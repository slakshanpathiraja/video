<footer>
<div class="footer">
        <div class="text">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by company.</p>
        </div>
        <div class="social">
            <ul class="social-icons">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
        </div>
    </div>
    </footer>
<script src="js/script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tokenfield/0.12.0/bootstrap-tokenfield.js"></script>

  
 
<script>
    $(document).ready(function(){
        $("#card_2").hide();
        $(".sub_m_menu").hide();
        $(".pro_m_menu").hide();

    $(".up").click(function(){
        $("#card_2").show(1000);
        $("#card_1").hide(1000);
        $(".up").css("background-color","white");
        $(".in").css("background-color","rgba(249, 255, 249, 0)");
    });
    $(".in").click(function(){
        $("#card_1").show(1000);
        $("#card_2").hide(1000);
        $(".in").css("background-color","white");
        $(".up").css("background-color","rgba(249, 255, 249, 0)");
    });
    $("#dropdown_sub_m_menu").click(function(){
        $(".sub_m_menu").toggle(1000);
    });
    $("#pro_sub_m_menu").click(function(){
        $(".pro_m_menu").toggle(1000);
    });
    $("#set3").click(function(){
        swal({
      title: "Good job!",
      text: "success!",
      icon: "success",
      button: "OK!",
        });
    });

    $('#tag').tokenfield({
    autocomplete:{
    source: ['PHP','Codeigniter','HTML','JQuery','Javascript','CSS','Laravel','CakePHP','Symfony','Yii 2','Phalcon','Zend','Slim','FuelPHP','PHPixie','Mysql'],
    delay:100,
    appendTo : $('#upload')
    },
    showAutocompleteOnFocus: true
    });

    
    });
</script>

<!--upload data-->
<script>
    function dec2hex (dec) {
        return ('0' + dec.toString(16)).substr(-2)
    }
    function upload_id(len) {
        var arr = new Uint8Array((len || 40) / 2)
        window.crypto.getRandomValues(arr)
        return Array.from(arr, dec2hex).join('')
    }
    function upload() {
        var title_ = document.getElementById("form_title").value;
        var vurl_ = document.getElementById("form_vurl").value;
        var vtag_ = document.getElementById("tag").value;
    //get your select image
    var image=document.getElementById("image").files[0];
    //now get your image name
    var imageName=image.name;
    //firebase  storage reference
    //it is the path where yyour image will store
    var storageRef=firebase.storage().ref('images/'+imageName);
    //upload image to selected storage reference

    var uploadTask=storageRef.put(image);

    uploadTask.on('state_changed',function (snapshot) {
        //observe state change events such as progress , pause ,resume
        //get task progress by including the number of bytes uploaded and total
        //number of bytes
        var progress=(snapshot.bytesTransferred/snapshot.totalBytes)*100;
        console.log("upload is " + progress +" done");
        document.getElementById("demo").innerHTML = Math.round(progress)+ "%";
        document.getElementById("progress").style.width = Math.round(progress) + "%";
    },function (error) {
        //handle error here
        console.log(error.message);
    },function () {
       //handle successful uploads on complete

        uploadTask.snapshot.ref.getDownloadURL().then(function (downlaodURL) {
            //get your upload image url here...
            var video_id=upload_id(20);
            console.log(video_id);
            console.log(title_);
            console.log(vurl_);
            console.log(downlaodURL);
            console.log(vtag_);
            $.ajax({
                    url:'insert.php',
                    method:'POST',
                    data:{
                        data_id : 'video',
                        video_id : video_id,
                        title_ : title_,
                        vurl_ : vurl_,
                        downlaodURL : downlaodURL
                    },
                   success:function(data){
                       if(data==1){
                            alert(data);
                            //window.location.href="index.php";
                        }else{
                            alert(data);
                        }
                   }
                });

            //document.getElementById('upload').style.display='none'
            $('#upload').modal('hide');
        });
    });
}
</script>

<!--user add-->
<script>
function add_users() {
    var name_ = document.getElementById("u_add_name").value;
    var email_ = document.getElementById("u_add_Email").value;
    var pw_ = document.getElementById("u_add_Password1").value;
    var cpw_ = document.getElementById("u_add_Password2").value;
    var user_id=upload_id(20);
    console.log(user_id);
    console.log(name_);
    console.log(email_);
    console.log(pw_);
    console.log(cpw_);
    $.ajax({
        url:'insert.php',
        method:'POST',
        data:{
            data_id : 'user',
            user_id : user_id,
            name_ : name_,
            email_ : email_,
            pw_ : pw_,
            cpw_ : cpw_
        },
        success:function(data){
            if(data==1){
                window.location.href="index.php";
            }else{
                alert(data);
            }
            
        }
    });
    $('#user').modal('hide');
}
</script>

<!--login user-->
<script>
function log_users() {
    var log_email = document.getElementById("u_log_email").value;
    var log_pw = document.getElementById("u_log_Password").value;
    console.log(log_email);
    console.log(log_pw);
    $.ajax({
        url:'insert.php',
        method:'POST',
        data:{
            data_id : 'login',
            email : log_email,
            pw : log_pw
        },
        success:function(data){
            if(data==1){
                window.location.href="index.php";
            }else{
                alert(data);
            }
        }
    });

}
</script>


<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#config-web-app -->

<script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyDR-ZqMjBj78Fe28uvv5I4UejXl6KJEp-o",
        authDomain: "storage-c8234.firebaseapp.com",
        databaseURL: "https://storage-c8234.firebaseio.com",
        projectId: "storage-c8234",
        storageBucket: "storage-c8234.appspot.com",
        messagingSenderId: "574710043248",
        appId: "1:574710043248:web:7128e22ee80254fc241ab5"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
</script>



</body>
</html>
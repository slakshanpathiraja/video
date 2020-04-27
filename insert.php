<?php 
session_start();
require_once("includes/connection.php");
$data_id=$_POST['data_id'];
?>


<?php
if (mysqli_connect_errno($conn)){
   echo "Database Connection Failed";
  }else{
  echo "Database Connected";
    if($data_id === 'video'){
        $video_id=$_POST['video_id'];
        $video_title=$_POST['title_'];
        $video_url=$_POST['vurl_'];
        $video_image_url=$_POST['downlaodURL'];
        $video_view = "0";
        $video_time = "10.56";
        $query_add = "INSERT INTO `video`(`id`, `v_id`, `v_title`, `v_url`, `i_url`, `v_time`, `v_view`) VALUES(NULL,'v_{$video_id}','{$video_title}','{$video_url}','{$video_image_url}','{$video_time}','{$video_view}');";
        $query_add_run = mysqli_query($conn,$query_add);
            if($query_add_run){
                header('Location:index.php');
            }else{
                echo " data not added";
            }
    }
    if($data_id === 'user'){
        $user_id=$_POST['user_id'];
        $user_name=$_POST['name_'];
        $user_email=$_POST['email_'];
        $user_pw=$_POST['pw_'];
        $user_cpw = $_POST['cpw_'];
        $query_add = "INSERT INTO `users`(`id`, `user_id`, `user_name`, `user_email`, `user_password`) VALUES(NULL,'u_{$user_id}','{$user_name}','{$user_email}','{$user_pw}');";
        $query_add_run = mysqli_query($conn,$query_add);
            if($query_add_run){
                echo " data added";
            }else{
                echo " data not added";
            }
    }
    if($data_id === 'login'){
        $user_email=$_POST['email'];
        $user_pw=$_POST['pw'];
        $query_find ="SELECT * FROM users WHERE user_email='$user_email' AND user_password='$user_pw' ";
        $query_find_run = mysqli_query($conn,$query_find);
        if(mysqli_fetch_array($query_find_run)){
            echo " loging ok";
            $_SESSION['username']=$user_email;
        }else{
            console.log(" Email id / password is Invalid");
            echo " Email id / password is Invalid";
        }
    }
 }
  ?>
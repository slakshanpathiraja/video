<header>
    <div class="logo">
        <h2>company</h2>
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li><a class="item" href="#">home</a></li>
                <li><a class="item" href="#">set 2</a></li>
                <li><a class="item" href="#">set 3</a></li>
                <li><a class="item" href="javascript:void(0);"onclick="sb_menu()">set 4
                    <i class="fa fa-caret-down"></i>
                </a></li>
                <li><a  class="item active" data-toggle="modal" data-target="#user">login</a></li>
                <li><a class="item active" href="javascript:void(0);"onclick="profile_menu()">
                  <i class="fa fa-user" style="font-size:23px"></i>
                </a>
                </li>
            </ul>
        </nav>
        <a href="javascript:void(0);" class="item icon" onclick="mb_menu()">
        <i class="fa fa-bars"></i>
    </div>
  </a>
</header>
<!--mobile menu-->
    <div class="menu m_menu" id="mb_menu">
        <nav>
            <ul>
                <li><a class="item" href="#">home</a></li>
                <li><a class="item" href="#">set 2</a></li>
                <li><a class="item" href="#">set 3</a></li>
                <li><a class="item" href="#">set 4
                    <i class="fa fa-caret-down"></i>
                </a></li>
                <li><a class="item active" href="signin.php">login</a></li>
            </ul>
        </nav>
    </div>
<script>
function mb_menu() {
  var x = document.getElementById("mb_menu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<!--sub menu-->
<div class="menu sb_menu" id="sb_menu">
  <div class="tag_menu">
    <div class="tag">
    <i class="fa fa-check-circle-o" style="font-size:15px"></i>
      <h6>fgt</h6>
    </div>
  </div>
</div>
<script>
function sb_menu() {
  var x = document.getElementById("sb_menu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>
<!--profile menu-->
<div class="menu profile_menu" id="profile_menu">
  <div class="profile">
    <nav>
        <ul>
            <li><a class="item" href="#">Profile</a></li>
            <li><a class="item" href="#">Upload</a></li>
            <li><a class="item" href="#">Logout</a></li>
        </ul>
    </nav>
  </div>
</div>
<script>
function profile_menu() {
  var x = document.getElementById("profile_menu");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script>



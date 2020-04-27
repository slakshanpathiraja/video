<header>
    <div class="logo">
        <h2>company</h2>
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li><a class="item" href="index.php">home</a></li>
                <li><a class="item" href="#">set 2</a></li>
                <li><a class="item" href="#" id="set3">set 3</a></li>
                <li><a class="item" href="javascript:void(0);"onmouseover="sb_menu()"onmouseout="sb_menu()"onclick="sb_menu()">set 4
                    <i class="fa fa-caret-down"></i>
                </a></li>
                <li><a  class="item active" data-toggle="modal" data-target="#user" href="#">login</a></li>
                <li><a class="item active" href="javascript:void(0);"onmouseover="profile_menu()"onmouseout="profile_menu()"onclick="profile_menu()">
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
                <li><a class="item" href="index.php">home</a></li>
                <li><a class="item" href="#">set 2</a></li>
                <li><a class="item" href="#">set 3</a></li>
                <li><a class="item" id="dropdown_sub_m_menu"href="#">set 4  <i class="fa fa-caret-down "></i></a>
                  <ul class="sub_m_menu">
                    <li><a class="item" href="#">Green</a></li>
                    <li><a class="item" href="#">Red</a></li>
                  </ul>
                </li>
                <li><a class="item active" href="#" data-toggle="modal" data-target="#user">login</a></li>
                <li><a class="item active" id="pro_sub_m_menu" href="#">Profile  <i class="fa fa-caret-down "></i></a>
                  <ul class="pro_m_menu">
                      <li><a class="item" href="#">Profile</a></li>
                      <li><a class="item" href="#"data-toggle="modal" data-target="#upload">Upload</a></li>
                      <li><a class="item" href="#"data-toggle="modal" data-target="#logout">Logout</a></li>
                  </ul>
                </li>
            </ul>
        </nav>
    </div>

<!--sub menu-->
<div class="menu sb_menu" id="sb_menu" onmouseover="sb_menu()"onmouseout="sb_menu()">
  <div class="tag_menu">
    <div class="tag">
      <h6>fgt</h6>
    </div>
    <div class="tag">
      <h6>fgt</h6>
    </div>
    <div class="tag">
      <h6>fgt</h6>
    </div>
    <div class="tag">
      <h6>fgt</h6>
    </div>
    <div class="tag">
      <h6>fgt</h6>
    </div>
    <div class="tag">
      <h6>fgt</h6>
    </div>
  </div>
</div>

<!--profile menu-->
<div class="menu profile_menu" id="profile_menu" onmouseover="profile_menu()"onmouseout="profile_menu()">
  <div class="profile">
    <nav>
        <ul>
            <li><a class="item" href="#">Profile</a></li>
            <li><a class="item" href="#" id="upload_ng" data-toggle="modal" data-target="#upload">Upload</a></li>
            <li><a class="item" href="#" data-toggle="modal" data-target="#logout">Logout</a></li>
        </ul>
    </nav>
  </div>
</div>


<!-- Modal for sign in /up-->
<div class="modal fade" id="user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog dialog_bx" role="document">
    <div class="modal-content">
      <div class="card text-center">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link  in" href="#">signin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  up" href="#">signup</a>
                </li>
            </ul>
        </div>
        <div class="card-body" id="card_1">
        <form>
          <div class="form-group">
            <input type="email" class="form-control" id="u_log_email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="u_log_Password" placeholder="Password">
          </div>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success">Login</button>
        </form>
        </div>
        <div class="card-body " id="card_2">
        <form>
          <div class="form-group">
            <input type="text" class="form-control card_3" id="u_add_name" aria-describedby="emailHelp" placeholder="Enter Nick name">
          </div>
          <div class="form-group">
            <input type="email" class="form-control card_3" id="u_add_Email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="u_add_Password1" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="u_add_Password2" placeholder="Conform Password">
          </div>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-success" onclick="add_users()">Sign up</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for upload -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog dialog_bx" role="document">
    <div class="modal-content">
    <div class="upload">
      <form class="uploads">
      <div class="form-group">
        <label for="formGroupExampleInput">Title</label>
        <input type="text" class="form-control" id="form_title" placeholder="Example input" required> 
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Video URL</label>
        <input type="text" class="form-control" id="form_vurl" placeholder="Another input" required>
      </div>
      <div class="form-group">
        <label for="exampleFormControlFile1">Image Upload</label>
        <input type="file" class="form-control-file" id="image" accept="image/*" required>
      </div>
      <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
      <button type="button" class="btn btn-primary btn_upload" onclick="upload()">Upload</button>
      </form> 
      <div class="upload_bar">
        <div id="demo">0%</div>
        <div class="progress">
          <div id="progress">
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
 <!-- Logout Modal-->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog dialog_bx" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="logout_code.php" method="post">
          <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  
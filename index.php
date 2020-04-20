<?php
require_once("includes/header.php");
require_once("includes/navbar.php");
?>
<main>
<div class="section">
    <div class="cards">
        <div class="gallery" ><!--640*420-->
            <img src="https://cdn.pixabay.com/photo/2020/04/13/09/57/jay-5037580_960_720.jpg" alt="" width="100%">
        </div>
        <div class="discription">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, dicta!</p>
        </div>
    </div>
    <div class="cards">
        <div class="gallery" >
            <img src="https://cdn.pixabay.com/photo/2020/04/13/09/57/jay-5037580_960_720.jpg" alt="" width="100%">
        </div>
        <div class="discription">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, dicta!</p>
        </div>
    </div>
    <div class="cards">
        <div class="gallery" >
            <img src="https://cdn.pixabay.com/photo/2020/04/13/09/57/jay-5037580_960_720.jpg" alt="" width="100%">
        </div>
        <div class="discription">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, dicta!</p>
        </div>
    </div>
    <div class="cards">
        <div class="gallery" >
            <img src="https://cdn.pixabay.com/photo/2020/04/13/09/57/jay-5037580_960_720.jpg" alt="" width="100%">
        </div>
        <div class="discription">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab, dicta!</p>
        </div>
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
                <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
    </div>
    <div class="card-body" id="card_2">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    <div class="card-body" id="card_2">
        <h5 class="card-title">Special title treatment</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
    </div>

    </div>
  </div>
</div>

<!-- Modal for upload -->
<div class="modal fade" id="upload" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog dialog_bx" role="document">
    <div class="modal-content">
      img
    </div>
  </div>
</div>
 <!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

  
</main>
<?php
require_once("includes/footer.php");
?>  
</body>
</html>

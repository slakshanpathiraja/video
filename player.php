<?php
require_once("includes/connection.php");
require_once("includes/header.php");
require_once("includes/navbar.php");
$id = $_GET['id'];
?>
<main>
<div class="section">
  <div class="secction_1">
    <div class="player">
      <?php
          $query_find ="SELECT * FROM video WHERE v_id='$id'";
          $query_find_run = mysqli_query($conn,$query_find);
        while($row =mysqli_fetch_assoc($query_find_run)){
      ?>
        <iframe src="<?php echo $row['v_url']; ?>" ></iframe>
        <style type="text/css">
          iframe{
            width: 100%;
            height: 35vw;
          }
          @media screen and (max-width:1020px){
            iframe{
            width: 100%;
            height: 45vw;
            }
          }
        </style>
        <?php
          }
        ?>
    </div>
    <div class="play_list">
      <div class="play_list_inside">
        <h2>playlist jhjh</h2>
      </div>
      
    </div>
  </div>
  <div class="section_2">

<button class="up2 cvf">Hide</button>
<p class="card_3">This is a paragraph with little content.</p>
<p>This is another small paragraph.</p>

  </div>
</div>
</main>
<?php
require_once("includes/footer.php");
?>  
</body>
</html>
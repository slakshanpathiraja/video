<?php
require_once("includes/connection.php");
require_once("includes/header.php");
require_once("includes/navbar.php");
?>
<main>
<?php
  $query_find ="SELECT * FROM video";
  $query_find_run = mysqli_query($conn,$query_find);
?>
<div class="section">
<?php 
        if(mysqli_num_rows($query_find_run)>0){
            while($row =mysqli_fetch_assoc($query_find_run)){
    ?>
    <div class="cards"><a class="item" href="player.php">
        <div class="gallery" ><!--640*420-->
            <img src="<?php echo $row['i_url']; ?>" alt="" width="100%">
            <div class="viewers_l">
                <i class="fa fa-eye viewers_i" style="font-size:20px"></i>
                <p class="viewers_n"><?php echo $row['v_view']; ?></p>
            </div>
            <div class="viewers_r">
                <p class="viewers_t"><?php echo $row['v_time']; ?> min</p>
            </div>
        </div>
        <div class="discription">
            <p class="title"><?php echo $row['v_title']; ?></p>
        </div></a>
    </div>
    
    <?php
            }
        }else{
              echo "no recoded founded";
        }
    ?>  
    
</div>


</main>
<?php
require_once("includes/footer.php");
?>  
</body>
</html>
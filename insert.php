<?php 
require_once("includes/connection.php");
$video_id=$_POST['video_id'];
$video_title=$_POST['title_'];
$video_url=$_POST['vurl_'];
$video_image_url=$_POST['downlaodURL'];
$video_view = "0";
$video_time = "10.56";
//$video_id="asd";
//$video_title="sdfgjjjjjk";
//$video_url="dfgghjjk";
//$video_image_url="tgjhhhhj";
?>


<?php
if (mysqli_connect_errno($conn)){
   echo "Database Connection Failed";
  }else{
  echo "Database Connected";
    //$query_add = "INSERT INTO data_tbl(	name,img_link,v_link) VALUES('{$title}','{$i_url}','{$v_url}')";
    $query_add = "INSERT INTO `video`(`id`, `v_id`, `v_title`, `v_url`, `i_url`, `v_time`, `v_view`) VALUES(NULL,'{$video_id}','{$video_title}','{$video_url}','{$video_image_url}','{$video_view}','{$video_time}');";
    $query_add_run = mysqli_query($conn,$query_add);
        if($query_add_run){
            echo " data added";
        }else{
            echo " data not added";
        }
  }
  ?>
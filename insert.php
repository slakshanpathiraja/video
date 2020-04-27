<?php 
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
                echo " data added";
            }else{
                echo " data not added";
            }
    }
    
    
  }
  ?>
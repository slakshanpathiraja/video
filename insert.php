<?php 
//$video_id=$_POST['video_id'];
//$video_title=$_POST['title_'];
//$video_url=$_POST['vurl_'];
//$video_image_url=$_POST['downlaodURL'];
$video_id="asd";
$video_title="sdfgjjjjjk";
$video_url="dfgghjjk";
$video_image_url="tgjhhhhj";
?>


<?php
$dbServerName = "johnny.heliohost.org:2083";
$dbUsername = "skypipit_admin";
$dbPassword = "123@Samitha";
$dbName = "skypipit_vds";

// create connection
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);
if (mysqli_connect_errno($conn)){
   echo "Database Connection Failed";
  }else{
  echo "Database Connected";
    $query_add = "INSERT INTO video(v_id,v_title,v_url,i_url) VALUES('{$video_id}','{$video_title}','{$video_url},'{$video_image_url}')";
    $query_add_run = mysqli_query($conn,$query_add);
        if($query_add_run){
            echo " data added";
        }else{
            echo " data not added";
        }
  }

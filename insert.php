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
$dbServerName = "65.19.141.67";
$dbUsername = "skypipit_admin";
$dbPassword = "123@Samitha";
$dbName = "skypipit_vds";

// create connection
$conn = mysqli_connect($dbServerName, $dbUsername, $dbPassword, $dbName);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>

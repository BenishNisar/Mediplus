<?php
$connect=mysqli_connect("localhost","root","","mediplus");
$id=$_GET["id"];
$query="DELETE FROM `newsletter` WHERE `id` =$id";
mysqli_query($connect,$query);
echo "<script> window.location.href='newsfetch.php'; </script>";

?>
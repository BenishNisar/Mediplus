<?php
$connection=mysqli_connect("localhost","root","","mediplus");
$id=$_GET['id'];
$query="DELETE FROM `topbar` WHERE `id`=$id";
mysqli_query($connection,$query);
echo "<script>window.location.href='topbarfetch.php';</script>";

?>
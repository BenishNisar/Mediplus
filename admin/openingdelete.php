<?php
$connection=mysqli_connect("localhost","root","","mediplus");
$id=$_GET['id'];
$query="DELETE FROM `openinghours` WHERE `id`=$id";
mysqli_query($connection,$query);
echo "<script>window.location.href='openingfetch.php';</script>";

?>
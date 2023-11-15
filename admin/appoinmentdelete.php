  <?php
$connection = mysqli_connect("localhost","root","","mediplus");
$id=$_GET["id"];
$query="DELETE FROM `appointement` WHERE `id`=$id";
mysqli_query($connection,$query);

echo "<script>window.location.href='appoinmentfetch.php';</script>";
  
  ?>  
<?php
  include("dbconnect.php");

  $no=$_GET['no'];

  echo $query="DELETE FROM MeongUnSampleImages WHERE no=$no";
  mysqli_query($con,$query);
  echo "Suc";
?>

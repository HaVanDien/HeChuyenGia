<?php
$connect = new mysqli_connect("localhost","root","1234","selectUniverAndJob");
if(mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
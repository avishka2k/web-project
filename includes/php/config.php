<?php
  $hostname = "localhost";
  $username = "root";
  $password = "365";
  $dbname = "chatapp";

  $con = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$con){
    echo "Database connection error".mysqli_connect_error();
  }
?>
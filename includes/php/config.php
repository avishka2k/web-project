
<?php 

$sname = "localhost";
$uname = "root";
$password = "";
$dbName = "subscriber";

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if(!$conn) {
  echo "Connection faild!";
  exit();
}
?>
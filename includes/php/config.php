
<?php 

$sname = "127.0.0.1:3306";
$uname = "u981950455_uhealth";
$password = "e@345![lwL";
$dbName = "u981950455_healthydb";

$conn = mysqli_connect($sname, $uname, $password, $dbName);

if(!$conn) {
  echo "Connection faild!";
  exit();
}

?>
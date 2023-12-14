<?php
$host="localhost";
$user="root";
$pass="Passw0rd123#$";
$db="demo";

$con=mysqli_connect($host,$user,$pass,$db);

if ($con) {
  echo "";
}
else {
  echo "DB not Connected";
}
 ?>

<?php
$host="localhost";
$db="mydb";
$user="root";
$pass="";
$conn=@mysqli_connect($host,$user,$pass) or die("Mysql Baglanamadi");

mysqli_select_db($conn,$db) or die("Veritabanina Baglanilamadi");
mysqli_set_charset($conn,'latin5');
?>

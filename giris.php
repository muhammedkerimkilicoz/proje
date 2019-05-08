<?php

include("ayarlar.php");
error_reporting(0);   
ob_start();



$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];

//$sql_check =  mysqli_query($success, "select * from admin where kadi='".$kadi."' and sifre='".md5($sifre."' ") or die (mysqli_error());

$sql = mysqli_query( "SELECT * FROM admin WHERE sifre = '".$_POST['kadi']."' and sifre = '".md5($_POST['sifre'])."'");
$row = mysqli_num_rows($sql);

if($rom > 0)  { 
    session_start(); 
    $_SESSION["kadi"] = $_POST['kadi'];
    $_SESSION["sifre"] = $_POST['sifre'];
    
    header("Location:admin.php");
}
else {
    if($kadi=="" or $sifre=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();


?>

    <!DOCTYPE html>
<html lang="tr">
<form action="login.php" method="POST">
<head>
	<title>Mami</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>


		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
				
					
					<span class="login100-form-title p-b-34 p-t-27">
						<?php 

include("ayar.php");
ob_start();
session_start();
//error_reporting(0);

$kadi = $_POST['kadi'];
$sifre = $_POST['sifre'];

$sql_check = mysqli_query($conn,"select * from uyeler where username='".$kadi."' and password='".$sifre."' ") or die(mysqli_error());

if(mysqli_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $kadi;
    $_SESSION["pass"] = $sifre;
    header("Location:admin.php");
}
else {
	if($kadi=="" or $sifre=="") {

		echo "<center>Lütfen Kullanıcı Adı ve Şifreyi Boş Bırakmayınız..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
	}
	else {
		echo "<center>Kullanıcı Adı veya Şifre Yanlış.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
	}
}

ob_end_flush();
?>
						
					</span>
					
				
	</div>
		</div>
	</div>
</html>

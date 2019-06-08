

<!DOCTYPE html>
<html lang="tr">
<form action="onay.php" method="POST">
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
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					
					<span class="login100-form-title p-b-34 p-t-27">
						Ürün Ekleme
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Ürün Adı">
						<input class="input100" type="text" name="urunadi" placeholder="Ürün Adı">
						<span class="focus-input100" data-placeholder="&#xf158;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ürün Açıklaması">
						<input class="input100" type="text" name="urunaciklama" placeholder="Ürün Açıklaması">
						<span class="focus-input100" data-placeholder="&#xf301;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Ürün Fiyatı">
						<input class="input100" type="text" name="urunfiyat" placeholder="Ürün Fiyatı">
						<span class="focus-input100" data-placeholder="&#xf301;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="fileUp">
						<input class="input100" type="file" name="fileUp" placeholder="fileUp">
						<span class="focus-input100" data-placeholder="&#xf301;"></span>
					</div>



					<div class="container-login100-form-btn">
						<a href="admin.php"><button form="admin.php"  class="login100-form-btn" name="ekle">
							Geri
						</button>
						<button class="login100-form-btn" name="ekle">
							Ekle
						</button>
					</div>
</html>



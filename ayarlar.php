<?php
$sunucu = "localhost";
$veritabani = "proje";
$kullanici = "root";
$sifre = "";

$baglanti = @mysqli_connect($sunucu, $kullanici, $sifre) or die ("Sunucuya bağlanılamadı!!");

mysqli_select_db($baglanti, $veritabani) or die ("Veritabanina Baglanilamadi");


?>
<?php

$baglanti = @mysqli_connect($sunucu, $kullanici, $sifre) or die ("Sunucuya bağlanılamadı!!");
mysqli_select_db($baglanti, $veritabani) or die ("Veritabanina Baglanilamadi");
$sql = "delete from kisiler where id=".$gelenid;
$sonuc=mysql_query($sql);
echo "Kayıt Silinmiştir.";

?>
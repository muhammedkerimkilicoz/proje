 <?php 

if ($_GET) 
{

include("ayar.php"); // veritabanı bağlantımızı sayfamıza ekliyoruz.

// id'si seçilen veriyi silme sorgumuzu yazıyoruz.
if (mysqli_query($conn,"DELETE FROM urunler WHERE id =".(int)$_GET['id'])) 
{
    header("location:siluyari.php"); // Eğer sorgu çalışırsa ekle.php sayfasına gönderiyoruz.
}
}

?>
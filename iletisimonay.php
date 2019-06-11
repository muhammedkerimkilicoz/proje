  <?php 
    
    include("ayar.php");
        // Form Gönderilmişmi Kontrolü Yapalım
        if($_POST){
        
            // Formdan Gelen Kayıtlar
            $ad      =    $_POST["ad"];
            $soyad   =    $_POST["soyad"];
            $mail  =    $_POST["mail"];
            $adres   =    $_POST["adres"];
            $tel   =    $_POST["tel"];
            $urunkod  =    $_POST["urunkod"];
            
            // Veritabanına Ekleyelim.
            $ekle = mysqli_query($conn,"insert into siparis (ad ,soyad,mail,adres,tel,urunkod) values ('$ad','$soyad','$mail','$adres','$tel','$urunkod')");
            
            
           
        }
    ?>
			
           
        
    

     <?php
header("Refresh: 1; url=iletisim.php");
?>
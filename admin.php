<form action="" method="post">
    Adınız:<br />
    <input type="text" name="adi" required="required" /><br />
    Soyadınız:<br />
    <input type="text" name="soyadi" required="required" /><br />
    E-posta Adresiniz:<br />
    <input type="email" name="eposta" required="required" />
    <input type="submit" value="Kaydet" />
</form>
<?php

if (isset($_POST['adi'], $_POST['soyadi'], $_POST['eposta'])) {

    $adi = trim(filter_input(INPUT_POST, 'adi', FILTER_SANITIZE_STRING));
    $soyadi = trim(filter_input(INPUT_POST, 'soyadi', FILTER_SANITIZE_STRING));
    $eposta = trim(filter_input(INPUT_POST, 'eposta', FILTER_SANITIZE_EMAIL));

    if (empty($adi) || empty($soyadi) || empty($eposta)) {
        die("<p>Lütfen formu eksiksiz doldurun!</p>");
    }

    if (!filter_var($eposta, FILTER_VALIDATE_EMAIL)) {
        die("<p>Lütfen geçerli bir e-posta adresi girin!</p>");
    }

    echo "veri ekleme işlemi!";
}

 <?php 

if ($_GET) 
{

include("ayar.php"); 


if (mysqli_query($conn,"DELETE FROM urunler WHERE id =".(int)$_GET['id'])) 
{
    header("location:siluyari.php"); 
}
}

?>

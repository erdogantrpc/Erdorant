<?php
include("mysqlbaglan.php");

$sql = "DELETE FROM siparis WHERE siparis_no=".$_GET['id'];

$cevap = mysqli_query($baglanti,$sql);
       
if(!$cevap )
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    header("Location: siparislistele.php");
}
mysqli_close($baglanti);
?>

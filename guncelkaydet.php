<?php
include("mysqlbaglan.php");
extract($_POST);
$sql ="UPDATE siparis ".
      "SET menu='$menu',aci='$aci',isim='$isim',telefon='$telefon', adres='$adres', bicim='$bicim' ".
      "WHERE siparis_no=".$_GET['id'];
$cevap = mysqli_query( $baglanti,$sql);
if(!$cevap){
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else{
    header("Location: siparislistele.php");
}
mysqli_close($baglanti);
?>

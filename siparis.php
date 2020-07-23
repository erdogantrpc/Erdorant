<html>
<head><meta charset="utf-8"></head>
<body>
<?php
include("mysqlbaglan.php");

$menu = $_POST["menu"];
$aci = $_POST["aci"];
$isim = $_POST["name"];
$telefon = $_POST["phone"];
$adres = $_POST["adres"];
$bicim = $_POST["bicim"];

echo("$menu <br>$aci <br>$isim <br>$telefon <br>$adres <br>$bicim ");
$sql = "INSERT INTO siparis".
        "(menu, aci, isim, telefon, adres, bicim )".
        "VALUES('$menu', '$aci', '$isim', '$telefon', '$adres', '$bicim')";
echo $sql;

$cevap = mysqli_query($baglanti, $sql);
if(!$cevap)
{
    echo '<br>Hata:' . mysqli_error($baglanti);
}
else
{
    header("Location: siparislistele.php");
}



mysqli_close($baglanti);

?>
</body>
</html>

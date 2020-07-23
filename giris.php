<?php

$kullanici = "kullanıcı";
$sifre = "odev3";

session_start();

if(($_POST["ad"] == $kullanici) and ($_POST["sifre"] == $sifre)){
    $_SESSION["kontrol"] = true;
    header("Location: home.php");
}
else
{
    header("Location: index.html");
}
?>
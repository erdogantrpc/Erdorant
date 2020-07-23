<?php
$server = 'localhost';
$user = '121138';
$password = "2656406";
$database = '121138';

$baglanti = mysqli_connect($server, $user, $password, $database);

if (!$baglanti){
    echo "bağlantı kurulamadı <br>";
    echo "HATA:".mysqli_connect_error();
    exit;
}
?>
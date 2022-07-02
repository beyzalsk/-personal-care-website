<?php 

$host = "localhost";
$kullanici = "root";
$parola = "";
$veritabani = "kullaniciler";

$baglanti = mysqli_connect($host,$kullanici,$parola,$veritabani);
mysqli_set_charset($baglanti,"UTF8");


 ?>
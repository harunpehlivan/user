<?php
// bu sayfa baglan.php sayfasıdır.
$host="localhost";
$user="root";
$password="123";
$db="envai";
   
if(@!mysql_connect($host, $user, $password)){
   $mesaj="Veritabanı bağlantısı yapılamadı!<br>";
   $mesaj.="Hata açıklaması: ".mysql_error();
   die($mesaj);
}
   
if(@!mysql_select_db($db)){
   $mesaj="$veritabani veritabanı seçilemedi!<br>";
   $mesaj.="Hata açıklaması: ".mysql_error();
   die($mesaj);
}
mysql_query("set names utf8"); // veritabanı işlemlerinde kullanacağımız karakter seti utf8
?>
<?php
// Server hata mesajlarını kapatıyoruz
error_reporting(E_ALL);
ini_set('display_errors','Off');

// Bilgilerin alınacağı adresi tanımlıyoruz
$sunucu = "http://www.koeri.boun.edu.tr/scripts/lst9.asp";

$gelen_sayfa = file_get_contents("$sunucu") or die('<b>HATA!</b><br> Sunucuya bağlanılamadı!');
$basladi = stristr($gelen_sayfa,"<pre>");
$bitti = strpos($basladi,"</pre>");
$durum1 = substr($basladi,0,$bitti);
$depremler = "$durum1</pre>";

// Bilgileri ekrana yazdırıyoruz
echo "
<!-- egonomik.com -->
$depremler";

?>
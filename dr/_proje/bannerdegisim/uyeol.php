<?php

//  PHP Webmail Script

session_start();

// Tanımlamalar
	$alici_isim = "EPfarki.com";
	$alici_mail = "epfarki@gmail.com";
	$konu  	= "Web ziyaretçi mesaji."; 
	$userip 	= $_SERVER['REMOTE_ADDR'];
	$browser 	= $_SERVER['HTTP_USER_AGENT'];  
	$referrer 	= $_SERVER['HTTP_REFERER'];     
	$tarih 	=  date('Y-m-d h:i:s');       


if($_GET['mail'] == "gonder") {

// Post ile gelen değişkenler
    $isim	 = $_POST['isim'];
    $email	 = $_POST['email']; 
    $website = $_POST['website']; 
    $konu	 = $_POST['konu'];     
    $tercih1	 = $_POST['tercih1']; 
    $tercih2	 = $_POST['tercih2']; 
    $mesj	 = $_POST['mesaj']; 

	$_SESSION['isim'] = "$isim";
	$_SESSION['email'] = "$email";
	$_SESSION['mesj'] = "$mesj";

// Zorunlu alanlar kontrol ediliyor
if($isim == "") { 
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen isminizi girin!</span>';
	header('location:uyeol.php');
	die(); }

if(!eregi ("^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$", $email)) {
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen geçerli bir e-mail adresi girin!</span>';
	header('location:uyeol.php');
	die(); }

  if($konu == "") { 
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen Banner Kodunu girin!</span>';
	header('location:uyeol.php');
	die(); } 

if($tercih1 == "") { 
  if($tercih2 == "") { 
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen tercih girin!</span>';
	header('location:uyeol.php');
	die(); } 
}

if($_SESSION['security_code'] != $_POST['guvenlik_kodu']) {
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Güvenlik kodunu hatalı girdiniz!</span><br>Lütfen ekranda gördüğünüz işlemin sonucunu yanındaki kutucuğa giriniz.';
	header('location:uyeol.php');
	die(); }

// Kod arındırma fonksiyonu: <> ve "
function temizle($text) {   
    $text = trim($text);    
    $metin = array('<','>','"');  
    $duzenle = array('','','');    
    $temiz_text = str_replace($metin,$duzenle,$text);    
    return $temiz_text;  }

// HTML Mesaj içeriği
    $mesaj = '
	Gönderilen mesaj aşağıdadır:
    <br>
    ====================================<br><br>                        
    <b>Gönderen</b>	 : '.temizle($isim).'<br>                 
    <b>Konu</b>	 : '.temizle($konu).'<br><br>
    <b>E-Mail</b> 	 : <a href="mailto:'.temizle($email).'">'.temizle($email).'</a><br>
    <b>Web Site</b>  : <a href="'.temizle($website).'">'.temizle($website).'</a><br><br> 
    <b>tercih</b>	 : '.temizle($tercih1).''.temizle($tercih2).'<br><br> 
    <b>Mesaj</b> 	   : <br>'.temizle($mesj).'<br><br>
    ====================================
    <br><br>              
    <b>IP Adresi</b> : '.$userip.'<br>
    <b>Tarayıcı</b>  : '.$browser.'<br>
    <b>Tarih</b>     : '.$tarih.'<br>
    <b>Referrer</b>  : '.$referrer.'<br>
    <br>
    ====================================<br>
    <a href="http://epfarki.com">EPfarki.com </a>';

// Mail gövdesi
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=windows-1254"' . "\r\n";
    $headers .= 'To: '.$alici_isim.' <'.$alici_mail.'>' . "\r\n";
    $headers .= 'From: '.$isim.' <'.$email.'>' . "\r\n";
	$headers .= 'X-mailer: EPfarki.com' . "\r\n";

// Mail gönderiliyor    
	if(mail($to,$konu,$mesaj,$headers)) { 
		unset($_SESSION['isim']);
		unset($_SESSION['email']);
		unset($_SESSION['mesj']);
		$_SESSION['mesaj'] = '<span class="basarili">Talebiniz başarı ile iletilmiştir...<br />
                                                 Ücretli üye isniz yetkililer sizinle irtibata geçecektir.<br />
                                                 ÜCretsiz üye iseniz gerekli kodlara <a href="http://epfarki.com/bannerdegisim/kodlar/" target="_blank">buradan</a> ulaşabilirsiniz.</span>';
		header('location:uyeol.php');
		die(); }

	else {
		session_destroy();
		$_SESSION['mesaj'] = '<span class="hata"><b>HATA:</b> Mesajınız iletilemedi! Lütfen tekrar deneyiniz.</span>';
		header('location:uyeol.php');
		die(); }

} // if($_GET['mail'] == "gonder") sonu


// Güvenlik kodu
	$sayi1 = rand(1,9);
	$sayi2 = rand(1,9);
	$toplam_sayi = $sayi1+$sayi2;
	$_SESSION['security_code'] = "$toplam_sayi";

echo '
<html>
<head>
<title>EPfarki Banner Degisim Üyelik</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<style type="text/css">
body {
	color: #9A9A9A;
	font-family: Georgia;
	font-size: 11px; }

table {
	color: #71889D;
	font-family: Georgia;
	font-size: 12px; }

legend {
	color: #0080FF;
	font-size: 14px;
	font-weight: bold; }

.basarili {
	font-family: Georgia;
	font-size: 12px;
	color: #6CAE24; }

.hata {
	font-family: Georgia;
	font-size: 12px;
	color: #BB2E0B; }
</style>
</head>

<body>';

if($_SESSION['mesaj'] != "") { 
	echo '
<fieldset style="width: 450px; border: 1px solid #E9E9E9">
<legend>Bilgi</legend>
'.$_SESSION['mesaj'].'
</fieldset><br>'; }

echo '
<form action="?mail=gonder" method="POST">
<fieldset style="width: 500px; border: 1px dashed #68696E">
<legend>Üye OL</legend>

<table border="0" width="100%" cellpadding="2">
	<tr>
		<td width="124"><b>Adınız</b></td>
		<td> <input type="text" name="isim" value="'.$_SESSION['isim'].'"></td>
	</tr>
	<tr>
		<td width="124"><b>E-mail</b></td>
		<td> <input type="text" name="email" value="'.$_SESSION['email'].'"></td>
	</tr>
	<tr>
		<td width="124"><b>Web siteniz</b></td>
		<td> <input type="text" name="website" value="http://"></td>
	</tr>   
	<tr>
		<td width="124"><b>Banner Kodunuz:</b></td>
		<td> <input type="text" name="konu" value="'.$_SESSION['konu'].'"></td>
	</tr>
	<tr>
		<td width="124" valign="top"><b>Mesajınız(varsa)</b></td>
		<td><textarea rows="2" name="mesaj" cols="30">'.$_SESSION['mesj'].'</textarea></td>
	</tr>
	<tr>
    <td><b>Tercih Ettiğiniz Üyelik Tipi:</b></td>
    <td>
                  <input type="checkbox" name="tercih1" value="ucretli" /> Ücretli Üye</br> 
                  <input type="checkbox" name="tercih2" value="ucretsiz" />Ücretsiz Üye            
    </td>
	</tr>
	<tr>
		<td width="124"><b>Güvenlik kodu</b></td>
		<td> '.$sayi1.' + '.$sayi2.' = <input type="text" name="guvenlik_kodu" size="4" autocomplete="off"></td>
	</tr>
	<tr>
		<td width="124">Üyelik için anasayfada yer alan kuralları okudum</td>
		<td><input type="submit" value="Kabul Ediyorum."></td>
	</tr>   
</table>

</fieldset>

</form>';

if($_SESSION['mesaj'] != "") { 
	unset($_SESSION['mesaj']); }

echo '
</body>
</html>';
?>
<?php
date_default_timezone_set('Europe/Istanbul');
session_start();

// Tanýmlamalar
	$alici_isim = "EPfarki.com";
	$alici_mail = "iletisim@epfarki.com";
	$konu  	= "Web ziyaretçi mesaji."; 
	$userip 	= $_SERVER['REMOTE_ADDR'];
	$browser 	= $_SERVER['HTTP_USER_AGENT'];  
	$referrer 	= $_SERVER['HTTP_REFERER'];     
	$tarih 	=  date('Y-m-d h:i:s');       

if($_GET['mail'] == "gonder") {

// Post ile gelen deðiþkenler
    $isim	 = $_POST['isim'];
    $email	 = $_POST['email']; 
    $website = $_POST['website']; 
    $konu	 = $_POST['konu']; 
    $mesj	 = $_POST['mesaj']; 

	$_SESSION['isim'] = "$isim";
	$_SESSION['email'] = "$email";
	$_SESSION['mesj'] = "$mesj";

// Zorunlu alanlar kontrol ediliyor
if($isim == "") { 
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen isminizi girin!</span>';
	header('location:index.php');
	die(); }

if(!eregi ("^([a-z0-9_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,4}$", $email)) {
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen geçerli bir e-mail adresi girin!</span>';
	header('location:index.php');
	die(); }

if($mesj == "") { 
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Lütfen bize iletmek istediðiniz mesajýnýzý girin!</span>';
	header('location:index.php');
	die(); }

if($_SESSION['security_code'] != $_POST['guvenlik_kodu']) {
	$_SESSION['mesaj'] = '<span class="hata"><b>Hata:</b> Güvenlik kodunu hatalý girdiniz!</span><br>Lütfen ekranda gördüðünüz iþlemin sonucunu yanýndaki kutucuða giriniz.';
	header('location:index.php');
	die(); }

// Kod arýndýrma fonksiyonu: <> ve "
function temizle($text) {   
    $text = trim($text);    
    $metin = array('<','>','"');  
    $duzenle = array('','','');    
    $temiz_text = str_replace($metin,$duzenle,$text);    
    return $temiz_text;  }

// HTML Mesaj içeriði
    $mesaj = '
	Gönderilen mesaj aþaðýdadýr:
    <br>
    ====================================<br><br>                        
    <b>Gönderen</b>	 : '.temizle($isim).'<br>                 
    <b>Konu</b>	 : '.temizle($konu).'<br><br>
    <b>E-Posta</b> 	 : <a href="mailto:'.temizle($email).'">'.temizle($email).'</a><br>
    <b>Web Site</b>  : <a href="'.temizle($website).'">'.temizle($website).'</a><br><br>  
    <b>Mesaj</b> 	   : <br>'.temizle($mesj).'<br><br>
    ====================================
    <br><br>              
    <b>IP Adresi</b> : '.$userip.'<br>
    <b>Tarayýcý</b>  : '.$browser.'<br>
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
		$_SESSION['mesaj'] = '<span class="basarili">Mesajýnýz baþarýyla iletildi!</span>';
		header('location:index.php');
		die(); }

	else {
		session_destroy();
		$_SESSION['mesaj'] = '<span class="hata"><b>HATA:</b> Mesajýnýz iletilemedi! Lütfen tekrar deneyiniz.</span>';
		header('location:index.php');
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
<title>EPfarki.com PHP Mail Script</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254">
<style type="text/css">
body {
	color: #9A9A9A;
	font-family: Georgia;
	font-size: 11px; 
  border: 0 none;
  }

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
<fieldset style="width: 450px; border: 1px solid #E9E9E9">
<legend>Ýletiþim</legend>

<table border="0" width="100%" cellpadding="2">
	<tr>
		<td width="124"><b>Adýnýz:</b></td>
		<td> <input type="text" name="isim" value="'.$_SESSION['isim'].'"></td>
	</tr>
	<tr>
		<td width="124"><b>E-Posta:</b></td>
		<td> <input type="text" name="email" value="'.$_SESSION['email'].'"></td>
	</tr>
	<tr>
		<td width="124"><b>Web siteniz:</b></td>
		<td> <input type="text" name="website" value="http://"></td>
	</tr>   
	<tr>
		<td width="124"><b>Konu:</b></td>
		<td> <input type="text" name="konu" value="'.$_SESSION['konu'].'"></td>
	</tr>
	<tr>
		<td width="124" valign="top"><b>Mesajýnýz:</b></td>
		<td><textarea rows="6" name="mesaj" cols="30">'.$_SESSION['mesj'].'</textarea></td>
	</tr>
	<tr>
		<td width="124"><b>Güvenlik kodu:</b></td>
		<td> '.$sayi1.' + '.$sayi2.' = <input type="text" name="guvenlik_kodu" size="4" autocomplete="off"></td>
	</tr>
	<tr>
		<td width="124">&nbsp;</td>
		<td><input style="padding-right: 5px; padding-left: 5px; border: 0 none; font-weight: bold; color: white; background-color: #71889D;" type="submit" value="Gönder"></td>        
	</tr>
</table>

</fieldset>

</form>';

if($_SESSION['mesaj'] != "") { 
	unset($_SESSION['mesaj']); }

echo '
<br />
<a target="_blank" href="http://epfarki.com"><font color="#71BBE3">EPfarki.com</font></a> | Özel Ýletiþim: iletisim [at] epfarki.com
</body>
</html>';
?>
<html>
<head>
<title>Egonomik &raquo; PHP Rastgele Şifre Üretici (PHP Random Password Generator)</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1254" />
<meta name="description" content="PHP Rastgele Şifre Üretici (PHP Random Password Generator)" />
<meta name="keywords" content="şifre, şifre üretici, otomatik şifre üretici, php script, php random password, random password generator, php auto password, cpanel style password generator, php password, php ile rastgele şifre oluşturmak" />
<style type="text/css">
body {
	color: #3B3B3B;
	padding: 50px;
	font-family: Arial;
	font-size: 12px; }

a, a:visited {
	color: #1D87BA;
	text-decoration: none; }

a:hover {
	color: #C61147; }

.container {
	width: 720px;
	margin: 0px auto; 
	text-align: left; }

.box {
	float: left;
	margin-right: 10px; }

.dipnot {
	text-align: right;
	border-top: 1px solid #F3F3F3;
	color: #595959;
	font-size: 11px;
	padding: 10px;
	margin-top: 30px; }

fieldset {
	text-align: center;
	width: 200px;
	padding: 10px; 
	background: #F3F3F3;
	border: 1px solid #E6E6E6;
	-moz-border-radius: 6px;
 	-webkit-border-radius: 6px;
 	border-radius: 6px; }

.pass {
	font-family: Tahoma;
	font-size: 12px;
	color: #3B3B3B;
	margin: 2px;
	padding: 4px; 
	width: 160px;
	border: 1px solid #E2E2E2;}
</style>
</head>
<body>

<?php

if($_GET['len'] != "" && $_GET['len'] >= "3") {
	$uzunluk = $_GET['len']; }

else {
	$uzunluk = "6"; }

function generatePassword($length=6,$level=2){

   list($usec, $sec) = explode(' ', microtime());
   srand((float) $sec + ((float) $usec * 100000));

   $validchars[1] = "0123456789abcdfghjkmnpqrstvwxyz";
   $validchars[2] = "0123456789abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
   $validchars[3] = "0123456789_!@#$%&*()-=+/abcdfghjkmnpqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#$%&*()-=+/";

   $password  = "";
   $counter   = 0;

   while ($counter < $length) {
     $actChar = substr($validchars[$level], rand(0, strlen($validchars[$level])-1), 1);

     // All character must be different
     if (!strstr($password, $actChar)) {
        $password .= $actChar;
        $counter++;
     }
   }

   return $password;
}


echo '
<div class="container">
<div class="box">
<fieldset>
<legend><img src="images/1.png"></legend>
<input class="pass" type="text" value="'.generatePassword($uzunluk,"1").'" onclick="select();" /> <br />
<input class="pass" type="text" value="'.generatePassword($uzunluk,"1").'" onclick="select();" /> <br />
<input class="pass" type="text" value="'.generatePassword($uzunluk,"1").'" onclick="select();" /> <br />
</fieldset>
</div>

<div class="box">
<fieldset>
<legend><img src="images/2.png"></legend>
<input class="pass" type="text" value="'.generatePassword($uzunluk,"2").'" onclick="select();" /> <br />
<input class="pass" type="text" value="'.generatePassword($uzunluk,"2").'" onclick="select();" /> <br />
<input class="pass" type="text" value="'.generatePassword($uzunluk,"2").'" onclick="select();" /> <br />
</fieldset>
</div>

<div class="box">
<fieldset>
<legend><img src="images/3.png"></legend>
<input class="pass" type="text" value="'.generatePassword($uzunluk,"3").'" onclick="select();" /> <br />
<input class="pass" type="text" value="'.generatePassword($uzunluk,"3").'" onclick="select();" /> <br />
<input class="pass" type="text" value="'.generatePassword($uzunluk,"3").'" onclick="select();" /> <br />
</fieldset>
</div>

<div style="clear:both; margin-bottom: 20px"></div>

<form name="sifre" action="'.$PHP_SELF.'" method="GET">
<b>Yeni şifre oluştur</b><br />
Uzunluk: 
<select name="len" onchange="document.sifre.submit();">';

for($i=3; $i<=15; $i++) {
	echo '<option'; if($uzunluk == "$i") { echo ' selected'; } echo '>'.$i.'</option>'; 
}

	echo '</select>
	<input type="submit" value="Yeni" style="cursor:pointer" />
</form>


<div class="dipnot">
Egonomik.com 2010 | <a href="http://www.egonomik.com/" title="Egonomik Anasayfa">Anasayfa</a> | <a href="http://www.egonomik.com/2010/11/php-rastgele-sifre-uretici-php-random-password-generator/" title="PHP Rastgele Şifre Üretici (PHP Random Password Generator)">Konuya Git</a> | <a href="http://www.egonomik.com/script/php-sifre-olusturucu/php-sifre-olusturucu.rar" title="PHP Random Password Generator Download">Bu Scripti İndir</a>
</div>


</div>
';

?>

</body>
</html>
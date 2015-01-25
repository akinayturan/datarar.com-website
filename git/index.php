<?php      
$adres=$_GET['url'];
preg_match('@^(?:http://)?([^/]+)@i', $_SERVER['HTTP_REFERER'], $matches);
$ref = $matches[1];
	if($adres=='' || $ref!= 'epfarki.com') 
     $adres = '//epfarki.com'; 
	if( !(preg_match('|^(//)|', $adres) || preg_match('|^(http://)|', $adres) || preg_match('|^(https://)|', $adres)) ) 
     $adres = '//'.$adres;
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head><!-- Bismillahirrahmanirrahim ~ Rahmân ve Rahîm olan Allah'ın adıyla. -->

<title>Çıkış Sayfası | EPfarki</title>
<meta charset="UTF-8"/>
<meta name="designer" content="bizimakin"/> 
<meta name="author" content="bizimakin" />    
<meta name="generator" content="EP 2.0"/> 
<meta name="rating" content="general"/>   
   
<link rel="image_src" href="//epfarki.com/ep/tanitim/epfarki-com-banner-149-149.jpg" />  
<link rel="shortcut icon" href="//epfarki.com/favicon.ico" type="image/x-icon" /> 
<link rel="index" title="EPfarki" href="//epfarki.com/" />  

<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="//feeds.feedburner.com/epfarki" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="//epfarki.com/feed/" />

<meta name="robots" content="noindex,nofollow" />

<noscript>                                
 <meta http-equiv="Refresh" content="0;URL=http:<? echo $adres; ?>" />
</noscript>
<script type="text/javascript">// <![CDATA[ 
function exec_refresh() { var timerID = setTimeout("exec_refresh();", 0);  if (timeout > 0)  {   timeout -= 1;  }  else  {clearTimeout(timerID);   window.location = "<? echo $adres; ?>";  } } var timeout = 20; exec_refresh(); 
// ]]></script>
</head>
<body>
<div align="center">
  <center>
  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>  <p>&nbsp;</p>
  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; height: 130px;" bordercolor="#111111" width="59%" id="AutoNumber1">
    <tr>
      <td width="100%">
      <p align="center"><br /><b>
       <p><strong><font face="Trebuchet MS">Su Anda <a href="//epfarki.com">EPfarki.com</a> Sitesinden Ayrılıyorsunuz. Yeniden bekleriz...</font></strong></p></b>
      <font color="#FF0000" face="Tahoma" size="2">  
    Yönlendirme gerçekleşmedi ise <strong><a href="<? echo $adres; ?>" rel="nofollow">buraya</a></strong> tıklayabilirsiniz. Arada oluyor böyle şeyler :)<strong><br>		<br>
		veya <a href="//epfarki.com/?rastgele" title="Ruh halinize uygun bir yazı">Ruh halinize uygun bir yazı için burayıda tıklayabilirsiniz</a></strong></font> :)</td>
    </tr>
  </table>
  </center>
</div>
<!-- Elhamdülillah ~ Hamd Allah'adır --></body>
</html>
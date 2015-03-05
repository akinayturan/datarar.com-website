<? require('../tema/header.php'); ?>

<meta name="description" content="İp Adresi Bul » Datarar.com Hizmetleri » Birazcık Farklı" />
<meta name="keywords" content="İp Adresi Bul, datarar, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, " />
<title>İp Adresi Bul | Datarar</title>

<? require('../tema/menu2.php'); ?>

<div id="title-hizmet" class="title"><h4>
        <a href="http://datarar.com/dr/ip-bul/" rel="bookmark" title="Farklı">İp Adresiniz</a>
    </h4></div>
<div class="temiz"></div>

<?php
$ip = $_SERVER["REMOTE_ADDR"];
$tarayiciversiyonu = $_SERVER["HTTP_USER_AGENT"];
$serverversiyonu = $_SERVER["SERVER_SOFTWARE"];
$scriptdili = $_SERVER["GATEWAY_INTERFACE"];
$baglantituru = $_SERVER["HTTP_CONNECTION"];
$serveradi = $_SERVER["SERVER_NAME"];
$kodlamaturu = $_SERVER["HTTP_ACCEPT_ENCODING"];
$serverportu = $_SERVER["SERVER_PORT"];
$oncekisayfa = $_SERVER["HTTP_REFERER"];

?>


<b>IP Adresiniz :</b> <?php echo "$ip" ; ?><br />
<b>Server Adı:</b> <?php echo "$serveradi" ; ?><br />
<b>Script Dili:</b> <?php echo "$scriptdili" ; ?><br />
<b>Kodlama Türü:</b> <?php echo "$kodlamaturu" ; ?><br />
<b>Server Portu:</b> <?php echo "$serverportu" ; ?><br />
<b>Bağlantı Türü:</b> <?php echo "$baglantituru" ; ?><br />
<b>Önceki Sayfa:</b> <?php echo "$oncekisayfa" ; ?><br />
<b>Server Versiyonu:</b> <?php echo "$serverversiyonu" ; ?><br />
<b>Tarayıcı Versiyonu:</b> <?php echo "$tarayiciversiyonu" ; ?><br />

<blockquote>
    <p><b>İp Adresi Nedir?</b><br />
        IP adresi ya da numarası, İnternet de dahil olmak üzere, TCP/IP ağındaki uç noktalara tahsis edilen benzersiz bir kimlik numarasıdır. IP adresi, her birisi 0-255 aralığında değişen dört sekizli rakamdan oluşmaktadır.
        <br /><b>Statik İp</b><br />
        Statik IP adresi, servis sağlayıcı tarafından verilen ve hiç değişmeyen bir IP adresidir. İnternet'teki her bilgisayarın bir adresi vardır ve bu adres IP numarası ile belirlenir. Örneğin İnternet sitelerinin önemli bir bölümünün adresi statiktir. Pratik açıdan İnternet kullanıcılarının ip adreslerinin statik olmasına pek gerek yoktur.

        <br /><b>Dinamik İp</b><br />
        Dinamik IP adresi, İnternet Servis Sağlayıcı (ISP) tarafından kullanıcıya her internete bağlandığında geçici olarak tayin edilen bir IP adresidir. Büyük bir ihtimalle, sizin IP adresiniz de dinamiktir. İnternet bağlantınızı kesip tekrar bağlanarak bu siteyi yeniden ziyaret ederseniz, IP numaranızın değiştiğini görebilirsiniz. Çoğu bireysel kullanıcının IP adresi bu şekilde dinamiktir.
        <br /><br /></p> </blockquote>

<? require('../tema/footer.php'); ?>


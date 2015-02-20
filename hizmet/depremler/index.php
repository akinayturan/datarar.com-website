<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
    <!--
                                            (Bismillahirrahmanirrahim)
                                       (Rahm�n ve Rah�m olan Allah'�n ad�yla.)
                                                  _ ____   ____
                                                  \ ____\ \  __ \
                                                   \ \____ \ \_\ \
                                                    \ ____\ \ \__/
                                                     \ \___  \ \
                                                      \_____\ \_\
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1254">

    <meta name="google-site-verification" content="ciu-UfpnqJYe6rjrk5QMrrzz684u2HLlywF9KKLKEjk" />
    <meta name="msvalidate.01" content="910AEDDA7AB4D2A7FA00ACB17E444EA5" />
    <meta name="alexaVerifyID" content="ybOKfPS80NueBfPKssTKHmhaWo0" />
    <meta name="yandex-verification" content="5d863a6dead77fbe" />

    <meta name="description" content="Son Depremler | G�ncel Depremler | EPfark� | Birazc�k Farkl�" />
    <meta name="keywords" content="Son, g�ncel, Depremler, epfarki, ep, farki, evrensel, paylasim, evrenselpaylasim, fark�, farkl�, farkli, fark, " />

    <title>Son Depremler | EPfark�</title>

    <meta http-equiv="reply-to" content="epfarki@gmail.com" />
    <meta http-equiv="content-language" content="tr, en" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <meta name="abstract" content="EPfark� � Birazc�k Farkl�" />
    <meta name="DC.title" content="EPfark� � Birazc�k Farkl�!" />
    <meta name="geo.position" content="38.963745;35.243322" />
    <meta name="classification" content="personel blog" />
    <meta name="copyright" content="creativecommons" />
    <meta name="ICBM" content="38.963745, 35.243322" />
    <meta name="googlebot" content="index, follow" />
    <meta name="resource-type" content="document" />
    <meta name="geo.placename" content="ankara" />
    <meta name="robots" content="index, follow" />
    <meta name="distribution" content="global" />
    <meta name="publisher" content="bizimakin" />
    <meta name="creation" content="29/11/2010" />
    <meta name="generator" content="bizimakin" />
    <meta name="designer" content="bizimakin" />
    <meta name="geo.region" content="TR-06" />
    <meta name="author" content="bizimakin" />
    <meta name="rating" content="all" />

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://feeds.feedburner.com/epfarki" />
    <link rel="shortcut icon" href="http://epfarki.com/ep/tema/favicon.ico" type="image/x-icon" />
    <link rel="image_src" href="http://epfarki.com/ep/tanitim/epfarki-com-banner-149-149.jpg" />
    <link rel="index" title="EPfarki" href="http://epfarki.com/" />

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-26694472-1']);
        _gaq.push(['_setDomainName', 'epfarki.com']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {
            var refreshId = setInterval(function() {
                $("#epstats").html("<img src='http://whos.amung.us/swidget/epfarkistats.png?"+Math.random()+"' alt='ep-online-stats' />");
            }, 30000);
        });
        // ]]>
    </script>
</head>
<body>
<a href="http://epfarki.com/">Ana Site</a> | <a href="http://epfarki.com/hizmet">Hizmetlerimiz</a> | <a href="http://epfarki.com/hizmet/depremler/">Son Depremler</a>

<?php
// Server hata mesajlar�n� kapat�yoruz
error_reporting(E_ALL);
ini_set('display_errors','Off');

// Bilgilerin al�naca�� adresi tan�ml�yoruz
$sunucu = "http://www.koeri.boun.edu.tr/scripts/lst9.asp";

$gelen_sayfa = file_get_contents("$sunucu") or die('<b>HATA!</b><br> Sunucuya ba�lan�lamad�!');
$basladi = stristr($gelen_sayfa,"<pre>");
$bitti = strpos($basladi,"</pre>");
$durum1 = substr($basladi,0,$bitti);
$depremler = "$durum1</pre>";

// Bilgileri ekrana yazd�r�yoruz
echo "
$depremler";

?>
<p>
    <a href="#">Yukarı</a> |
    <a href="http://epfarki.com/hizmet">Hizmet</a> |
    <a target="_blank" rel="nofollow" href="http://feeds.feedburner.com/epfarki">Feed</a> |
    <a target="_blank" rel="nofollow" href="http://www.alexa.com/siteinfo/epfarki.com">Alexa</a> |
    <a target="_blank" rel="nofollow" href="http://validator.w3.org/check?uri=http%3a%2f%2fepfarki.com%2f">W3-html</a> |
    <a target="_blank" rel="nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fepfarki.com%2F">W3-css</a> |
    <a target="_blank" href="http://epfarki.com/sitemap-video.xml">V-Sitemap</a> |
    <a target="_blank" href="http://epfarki.com/sitemap.xml">G-Sitemap</a>
</p>

<p>
    <a href="http://epfarki.com/">EPfark�</a>
    <a target="_blank" rel="nofollow" href="http://creativecommons.org/licenses/by-nc-nd/2.5/">� 2012</a> | Tasar�m: <a href="http://epfarki.com/iletisim/">Bizimakin</a> | �zel �leti�im: epfarki [at] gmail.com
</p>


<!-- sayac -->
<script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script><script type="text/javascript">try { var yaCounter10711903 = new Ya.Metrika({id:10711903, clickmap:true, trackLinks:true, accurateTrackBounce:true}); } catch(e) { }</script><noscript><div><img src="//mc.yandex.ru/watch/10711903" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /sayac -->
</body>
</html>
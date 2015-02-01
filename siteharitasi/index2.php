<?php
date_default_timezone_set('America/Los_Angeles');

//edit onely next line
$maxpages=0;

//END

if(!empty($_GET[filename]) and file_exists(str_replace(strrchr($_SERVER[SCRIPT_FILENAME], "/"), "", $_SERVER[SCRIPT_FILENAME])."/".$_GET[filename])){

    header('Content-type: application/xhtml+xml');
    header("Content-Disposition: attachment; filename=\"{$_GET[filename]}\"");
    readfile($_GET[filename]);

}

set_time_limit(0);

function formatare_link($url_de_adaugat, $url_curent, $url_principal, $get){

    $parse_url_principal=parse_url($url_principal);
    if(!$parse_url_principal['path'] or $parse_url_principal['path']!="/"){

        $parse_url_principal['path']="/";
    }
    $parse_url_curent=parse_url($url_curent);
    $parse_url_de_adaugat=parse_url($url_de_adaugat);

    $parse_url_de_adaugat[path]=str_replace("..", "", $parse_url_de_adaugat[path]);
    $parse_url_de_adaugat[path]=preg_replace("/\/+/", "/", $parse_url_de_adaugat[path]);

    if(substr($parse_url_de_adaugat[path], 0, 1)=="/"){
        $parse_url_de_adaugat[path]=$parse_url_de_adaugat[path];

    }elseif(substr($parse_url_curent[path], -1)=="/"){
        $parse_url_de_adaugat[path]=$parse_url_curent[path].$parse_url_de_adaugat[path];

    }else{
        $parse_url_de_adaugat[path]=$parse_url_principal[path].$parse_url_de_adaugat[path];
    }

    $url_final=$parse_url_principal[scheme]."://".$parse_url_principal[host].$parse_url_de_adaugat[path];

    if($parse_url_de_adaugat[query]){$url_final.="?".$parse_url_de_adaugat[query];}
    $extensie=substr($url_final, -4);

    $extensie2=substr($url_final, -5);
    if($extensie==".css" or $extensie==".CSS" or $extensie==".gif" or $extensie==".GIF" or $extensie==".png" or $extensie==".PNG" or $extensie==".jpg" or $extensie==".JPG" or $extensie==".ico" or $extensie==".ICO" or $extensie2==".jpeg" or $extensie2==".JPEG"){

        $url_final="";
    }

    $www=substr($parse_url_principal[host], 0, 4);

    if($www=="www."){
        $url_principal_fara_www=substr($parse_url_principal[host], 4);
        $url_principal_cu_www=$parse_url_principal[host];

    }else{
        $url_principal_fara_www=$parse_url_principal[host];
        $url_principal_cu_www="www.".$parse_url_principal[host];
    }


    if(
        !$parse_url_de_adaugat[host] or
        $parse_url_de_adaugat[host]==$parse_url_principal[host] or

        $parse_url_de_adaugat[host]==$url_principal_fara_www or
        $parse_url_de_adaugat[host]==$url_principal_cu_www
    ){
        $url_final=$url_final;

    }else{
        $url_final="";
    }
    if($parse_url_de_adaugat[scheme]=="https"){
        $url_final="";

    }

    if(strstr($url_final, "?") and $get!=''){
        $query=explode("?", $url_final);

        $query2=explode("&", $query[1]);
        $strip=explode(",", $get);


        if(!empty($query2) and !empty($strip)){
            foreach($query2 as $vq){
                $x=array();
                foreach($strip as $vs){

                    $vs=trim($vs);
                    if(preg_match("/^$vs/", $vq)){
                        $x[]=1;

                    }
                }
                if(count($x)==0){
                    $p[]=$vq;
                }
            }
            if(!empty($p)){

                $qu=implode("&", $p);
                $url=$query[0]."?".$qu;

            }else{
                $url=$query[0];
            }
        }
    }else{
        $url=$url_final;
    }
    return $url;

}
function robotstxt($url_principal){
    $slash="";
    if(substr($url_principal, -1)!="/"){$slash="/";}

    if($r=@file_get_contents($url_principal.$slash."robots.txt")){
        $r=preg_replace("/\s+/m", " ", $r);

        $r=preg_replace("/Disallow: /", "", $r);
        $r=explode("User-agent: ", $r);

        foreach($r as $v){
            if(substr($v, 0, 1)=="*"){
                $v2=explode(" ", $v);

            }elseif(preg_match("/^rogio/i", $v)){
                $v4=explode(" ", $v);
            }

        }
        if($v2){
            foreach($v2 as $v3){
                if($v3 and $v3!="*"){
                    $disalow[]=$v3;

                }
            }
        }
        if($v4){
            foreach($v4 as $k5=>$v5){
                if($v5 and $v5!="*" and $k5!="0"){

                    $disalow[]=$v5;
                }
            }
            $disalow=array_unique($disalow);
            return $disalow;
        }else{
            return null;

        }
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <!--
                                                  _ ____   ____
                                                  \ ____\ \  __ \
                                                   \ \____ \ \_\ \
                                                    \ ____\ \ \__/
                                                     \ \___  \ \
                                                      \_____\ \_\
    -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

    <meta name="google-site-verification" content="ciu-UfpnqJYe6rjrk5QMrrzz684u2HLlywF9KKLKEjk" />
    <meta name="alexaVerifyID" content="ybOKfPS80NueBfPKssTKHmhaWo0" />

    <meta name="description" content="Siteniz için sitemap(site haritası) oluşturun. - Free online site map generator! Get your sitemap done and up in seconds." />
    <meta name="keywords" content="sitemap oluştur, sitemap nedir, sitemap, sitemap oluşturucu, hızlı sitemap, google sitemap, bedava sitemap, sitemap, site map, generator, XML, HTML, text, ROR, google, yahoo, php" />

    <title>Site Haritası-EP » Hızlı Sitemap Oluştur | Free online site map generator!</title>

    <meta http-equiv="reply-to" content="epfarki@gmail.com" />
    <meta http-equiv="content-language" content="tr, en" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="pragma" content="no-cache" />

    <meta name="abstract" content="EPfarkı » Bilgiye Işık Tut!" />
    <meta name="DC.title" content="EPfarkı » Bilgiye Işık Tut!" />
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
    <link rel="shortcut icon" href="http://ozel.epfarki.com/img/favicon.ico" type="image/x-icon" />
    <link rel="image_src" href="http://ozel.epfarki.com/img/epfarki-com.jpg" />
    <link rel='index' title='EPfarki' href='http://epfarki.com/' />

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

    <link rel="stylesheet" type="text/css" href="http://siteharitasi.epfarki.com/style.css" />
</head>
<body>

<div id="wrapper">

    <div id="left">
                <span id="logo">
                <a href="http://www.siteharitasi.epfarki.com/"><img src="img/logo.jpg" alt="siteharitasi.epfarki.com - Free online site map generator!" /></a>
            </span>

            <span id="menu">
                <strong>Sponsor Bağlantısı</strong>
                <p>
<div style="text-align: center;">
    <script type="text/javascript"><!--
        google_ad_client = "ca-pub-6963315907881230";
        /* 200x200 resimli */
        google_ad_slot = "7673614516";
        google_ad_width = 200;
        google_ad_height = 200;
        //-->
    </script>
    <script type="text/javascript"
            src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
    </script>
</div>
                </p>
            </span>
            <span id="about">
                <p><strong>Diğer Sitelerimiz</strong></p>
                <p><ul>

                    <li><a target="_blank" href="http://www.epfarki.com">EPfarkı</a></li>
                    <li><a target="_blank" href="http://www.hizmet.epfarki.com">Hizmetlerimiz</a></li>
                    <li><a target="_blank" href="http://www.paylasim.epfarki.com/kod-onizleme-editoru/">Kod Önizleme</a></li>
                    <li><a target="_blank" href="http://www.basin.epfarki.com/">Basın</a></li>
                    <li><a target="_blank" href="http://www.dizin.epfarki.com/">Dizin</a></li>
                    <li><a target="_blank" href="http://www.toplist.epfarki.com/">Toplist</a></li>
                    <li><a target="_blank" href="http://www.hitlen.epfarki.com/">Hitlen</a></li>
                    <li><a target="_blank" href="http://www.epfarki.com/addlink/">Link Ekle</a></li>
                    <li><a target="_blank" href="http://www.bannerdegisim.epfarki.com/">Banner Değişim</a></li>
                    <li><a target="_blank" href="http://www.sitearaclari.epfarki.com/anasayfa/">Site Araçları</a></li>
                    <li><a target="_blank" href="http://www.reklam.epfarki.com/">Reklam</a></li>
                    <li><a target="_blank" href="http://www.hitlen.net/">Hitlen.net</a></li>
                    <li><a target="_blank" href="http://www.hitarttirmak.com/">Hitarttirmak.com</a></li>

                </ul></p>
            </span>
            <span id="contact">
                <strong>İletişim</strong>
<p>
    <a href="http://www.epfarki.com/iletisim/">EPfarkı</a> © 2010
    <br />Design by <a href="http://www.epfarki.com/" target="_blank">Bizimakin</a>
    <br />Private Communication
    <br /><a href="mailto:epfarki@gmail.com" target="_blank">epfarki@gmail.com</a>
<div style="text-align: center;">
    <span id="wobsbn"><script type="text/javascript">var wozone="10800",wouser="yakaytu", wobanner=11;</script><script type="text/javascript" src="http://www.ozel.epfarki.com/c.js"></script></span>
</div>
                </p>
            </span>
    </div> <!-- End Left -->
    <div id="content">

        <div id="main">
                <span class="content_element">

                    <form action="" method="post" name="generate_sitemap" class="style1" id="generate_sitemap">

                        <table border="0" id="table4" cellspacing="0" cellpadding="5">
                            <tr>
                                <td width="601" valign="top">
                                    <table border="0" id="table6" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td>

                                                <table width="598" border="0" align="center" cellpadding="4" cellspacing="1" bgcolor="#FFFFFF" id="table7">
                                                    <tr bgcolor="#E4E4E4">

                                                    </tr>
                                                    <tr bgcolor="#E4E4E4">
                                                        <td width="106" align="right" valign="top" nowrap="nowrap" bgcolor="#f3f3f3">
                                                            <b>Website URLniz:</b></td>
                                                        <td width="200" valign="top" bgcolor="#f3f3f3">
                                                            <input name="url" type="text" value="" size="40"></td>

                                                        <td width="268" valign="top" bgcolor="#f3f3f3">
                                                            <p></p></td>
                                                    </tr>
                                                    <tr bgcolor="#FFFFFF">
                                                        <td align="right" valign="top" nowrap="nowrap"><b>Strip Türü (Bilmiyor iseniz dokunmayınız!) </b></td>

                                                        <td valign="top"><input name="strip" type="text" id="strip" value="sid, phpsessid" size="40"></td>
                                                        <td valign="top"><p></p></td>
                                                    </tr>
                                                    <tr bgcolor="#E4E4E4">
                                                        <td align="right" valign="top" nowrap="nowrap" bgcolor="#f3f3f3">
                                                            <b>Son değişiklik</b></td>
                                                        <td valign="top" bgcolor="#f3f3f3">
                                                            <input name="last_modified" type="text" value="<?=date("Y-m-d")?>" size="15" size="15"/><span style="font-size: 1pt"></span></td>
                                                        <td valign="top" bgcolor="#f3f3f3"><p></p>
                                                        </td>
                                                    </tr>
                                                    <tr bgcolor="#FFFFFF">
                                                        <td align="right" valign="top" nowrap="nowrap"><b>Frekansını değiştirme</b></td>
                                                        <td valign="top"><select name="change_frequency" id="Change frequency">

                                                                <option value="always">Always</option>
                                                                <option value="hourly">hourly</option>
                                                                <option value="daily" selected="selected">daily</option>
                                                                <option value="weekly">weekly</option>

                                                                <option value="monthly">monthly</option>
                                                                <option value="yearly">yearly</option>
                                                                <option value="never">never</option>
                                                            </select></td>

                                                        <td valign="top"><p></p></td>
                                                    </tr>
                                                    <tr bgcolor="#E4E4E4">

                                                        <td align="right" valign="top" nowrap="nowrap" bgcolor="#f3f3f3">
                                                            <b>Öncelik</b></td>
                                                        <td valign="top" bgcolor="#f3f3f3"><font color="#666"><select name="priority" id="Priority">
                                                                    <option value="0.0">0.0</option>

                                                                    <option value="0.1">0.1</option>
                                                                    <option value="0.2">0.2</option>
                                                                    <option value="0.3">0.3</option>
                                                                    <option value="0.4">0.4</option>

                                                                    <option value="0.5" selected="selected">0.5</option>
                                                                    <option value="0.6">0.6</option>
                                                                    <option value="0.7">0.7</option>
                                                                    <option value="0.8">0.8</option>

                                                                    <option value="0.9">0.9</option>
                                                                    <option value="1.0">1.0</option>
                                                                </select></font></td>
                                                        <td valign="top" bgcolor="#f3f3f3"><p> </p></td>
                                                    </tr>
                                                </table>
                                                <br/>
                                                <input name="generate_sitemap" type="submit" id="generate_sitemap" value="Sitemap'i Oluştur">

                                                <table border="0" width="100%" id="table12" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>

                                                    <tr>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                    <tr>

                                                        <td align="left" valign="top">

                    </form>
	  <h3>Sitemap dosyasını nereye koymalıyım?</h3>
		<p><abbr title="Site Haritası">Sitemap</abbr> dosyanızı <strong>sitemap.xml</strong> olarak değiştirin ve sitenizin ana dizinine yükleyin.</p>
		<h3>Sitemap dosyasının boyutu ne kadar olabilir?</h3>
		<p>Sitemap dosyaları 10 MB (10,485,760 bytes) üzeri olmamalıdır. Ayrıca en fazla 50.000 URL içerebilir.</p>
		<h3>Sitemap dosyasını oluşturduktan sonra ne yapmalıyım?</h3>
		<p><strong>Sitemap</strong> dosyanızı oluşturup sitenize yükledikten sonra Sitemap protokolünü kabul eden arama motorlarına bu dosyayı yollamalısınız. Mesela Google arama motoruna sitemap dosyanızı göndermek için <a href="http://www.google.com/webmasters" title="Google Webmasters">Google Webmaster</a> hesabı oluşturup sitemap dosyanızı yüklemelisiniz.</p>
		<h3>Sayfalarımdan bazılarında frame teknolojisi kullanıyorum. Her dosyanın URL'sini ayrı ayrı girmem gerekir mi?</h3>
		<p>Evet, girmelisiniz</p>

<p class="style1">
    <?
    if($_POST['generate_sitemap']){
    if(!empty($_POST['url']) && @file_get_contents($_POST['url'])){

        $urlok=1;
    }else{
        echo "<h3 align=center style='color: red'>URL Hatalı!</h3>";
        $urlok=0;

    }
    ?>
</p>


<div class='frame'>
    <?php
    $isok=$urlok;
    if($isok==1){
    echo "Sitemap'iniz aşağıda oluşturuluyor. Lütfen Bekleyiniz...\n";

    echo '
<style type="text/css">
<!--
body,td,th {
    font-family: Arial, Helvetica, sans-serif;
    font-size: 12px;
}
-->

</style>
<pre>';
    $db=array();
    $main_url=$_POST['url'];

    $url_sitemap=parse_url($main_url);
    $db[$main_url]=0;
    $asd=array("href=\"", "href='", "src=\"", "src='", "\"", "'", ">");

    $dsa=array("href=", "href=", "src=", "src=", " ", " ", " ");

    $disalow=robotstxt($main_url);
    $links_final=array();
    $xyz=0;
    while($xyz<=$maxpages){

        if($maxpages>=1){
            $xyz++;
        }
        $current_url=array_search(0, $db);
        if(!$current_url){break;}

        $db[$current_url]=1;
        flush();
        ob_flush();
        echo "($xyz) indexing: $current_url\n";
        flush();

        ob_flush();
        $file=@file_get_contents($current_url);
        $file=strtolower(preg_replace("/\s+/m", " ", $file));

        $file_array = explode("<", $file);
        $links_final=array();
        foreach($file_array as $v_file_array){
            $v_file_array=str_replace($asd, $dsa, $v_file_array);

            if (
                (preg_match("/^a/", $v_file_array) or
                    preg_match("/^frame/", $v_file_array) or

                    preg_match("/^iframe/", $v_file_array)) and
                (stristr($v_file_array, "href") or stristr($v_file_array, "src")) and

                !stristr($v_file_array, "href=javascript") and
                !stristr($v_file_array, "href=mailto")
            ) {

                preg_match('|href=(.*) |U', $v_file_array, $regs);
                if (($a=formatare_link($regs[1], $current_url, $main_url, $_POST['strip']))  != ''){

                    if($disalow){
                        foreach ($disalow as $v_disalow){
                            if(!stristr($a, '$v_disalow')){
                                if($db[$a]!=1){

                                    $db[$a]=0;
                                }
                                break;
                            }
                        }
                    }else{
                        if($db[$a]!=1){

                            $db[$a]=0;
                        }
                    }
                }
                preg_match('|src=(.*) |U', $v_file_array, $regs);

                if (($a=formatare_link($regs[1], $current_url, $main_url, $_POST['strip']))  != ''){

                    if($disalow){
                        foreach ($disalow as $v_disalow){
                            if(!stristr($a, '$v_disalow')){
                                if($db[$a]!=1){

                                    $db[$a]=0;
                                }
                                break;
                            }
                        }
                    }else{
                        if($db[$a]!=1){

                            $db[$a]=0;
                        }
                    }
                }
            }
        }
    }
    $site_lastmod=htmlspecialchars($_POST['last_modified']);

    $site_changefreq=htmlspecialchars($_POST['change_frequency']);
    $site_priority=htmlspecialchars($_POST['priority']);
    $sitemap="<?xml version=\"1.0\" encoding=\"UTF-8\"?>

<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\">
";
    $sitemap2="<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<urlset xmlns=\"http://www.google.com/schemas/sitemap/0.84\">
";

    foreach($db as $site_link=>$val){
        $site_link=htmlspecialchars(htmlspecialchars($site_link));
        $site_link2=htmlspecialchars($site_link);

        $sitemap.="<url>
    <loc>$site_link</loc>
    <lastmod>$site_lastmod</lastmod>
    <changefreq>$site_changefreq</changefreq>

    <priority>$site_priority</priority>
</url>
";
        $sitemap2.="<url>
    <loc>$site_link2</loc>

    <lastmod>$site_lastmod</lastmod>
    <changefreq>$site_changefreq</changefreq>
    <priority>$site_priority</priority>
</url>
";
    }

    $sitemap.="</urlset>";
    $sitemap2.="</urlset>";
    $filename=date("YmdHis")."-sitemap.xml";;

    $current_directory=str_replace(strrchr($_SERVER['SCRIPT_FILENAME'], "/"), "", $_SERVER['SCRIPT_FILENAME'])."/";

    $handle = fopen($current_directory.$filename, 'w');
    fwrite($handle, $sitemap2);
    fclose($handle);

    $count=count($db);
    $count1=array_count_values($db);
    echo "\n<b>{$count1[1]}</b> Sayfada <b>$count</b> link bulundu\n\n";

    ?>
</div>


<table>
    <tr><td>
            <textarea name="textarea2" cols="100" rows="10"><?=$sitemap?></textarea>
        </td></tr>
    <tr>
        <td><a href="<?=$filename?>" target="_blank"><strong>Sitemap'i</strong></a> Görüntüle</td></tr><tr>
        <td><a href="download.php?f=<?=$filename?>" target="_blank"><strong>Sitemap'i</strong></a> İndir</td>
    </tr>
</table>

                    <? } } ?>

        </div>
    </div>
    </span>
</div>
</div> <!-- End Content -->
</div> <!-- End Wrapper -->
</body>
</html>

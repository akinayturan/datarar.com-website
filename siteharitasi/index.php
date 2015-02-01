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
<?
require('../../hizmet/tema/menu1.php');
?>

<meta name="description" content="Siteniz için sitemap(site haritası) oluşturun. - Free online site map generator! Get your sitemap done and up in seconds." />
<meta name="keywords" content="sitemap oluştur, sitemap nedir, sitemap, sitemap oluşturucu, hızlı sitemap, google sitemap, bedava sitemap, sitemap, site map, generator, XML, HTML, text, ROR, google, yahoo, php" />
<title>Site Haritası-EP » Hızlı Sitemap Oluştur | Free online site map generator!</title>

<?
require('../../hizmet/tema/menu2.php');
?>

<div id="title-hizmet" class="title"><h3>
        <a href="http://epfarki.com/hizmet/siteharitasi/" title="Site Haritası">Site Haritası</a>
    </h3></div>
<div class="temiz"></div>


<span class="content_element">

 <form action="" method="post" name="generate_sitemap" id="generate_sitemap" />
	    <table id="mytable" cellspacing="0" summary="Sitemap olusturma tablosu.">

            <tr>
                <th scope="row" abbr="Site URL" class="spec">Site URL:</th>
                <td><span><input name="url" type="text" value="http://" />
	        </span></td>
                <td><p>Lütfen sitemap oluşturmak istediğiniz sitenizin adresini(URL) yazın.</p></td>

            </tr>
            <tr>
                <th scope="row" abbr="Last Modified" class="specalt"><strong>Strip Türü</strong>:</th>
                <td class="alt"><input name="strip" type="text" value="sid, phpsessid" /></td>
                <td class="alt">Bilmiyor iseniz dokunmayınız!</td>
            </tr>
            <tr>
                <th scope="row" abbr="Last Modified" class="specalt"><strong>Son Güncelleme</strong>:</th>
                <td class="alt">		<input name="last_modified" type="text" value="<?=date("Y-m-d")?>" /></td>
                <td class="alt">Son güncelleme yaptığınız tarih. Bu tarih Yıl-Ay-Gün biçiminde girilmelidir.</td>
            </tr>
            <tr>

                <th scope="row" abbr="Change frequency" class="spec"><strong>Güncelleme sıklığı</strong>:</th>
                <td><select name="change_frequency" id="Change_frequency">
                        <option value="always">Her zaman</option>
                        <option value="hourly">Her saat</option>
                        <option value="daily">Her gün</option>
                        <option value="weekly">Her hafta</option>

                        <option value="monthly" selected="selected">Her ay</option>
                        <option value="yearly">Her yıl</option>
                        <option value="never">Asla</option>
                    </select></td>
                <td>Bu site hangi sıklıklarla güncelleniyor.</td>
            </tr>
            <tr>

                <th scope="row" abbr="Priority" class="specalt"><strong>Öncelik</strong>:</th>
                <td class="alt"><select name="priority" id="Priority">
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
                    </select></td>
                <td class="alt">Sitenizde bulunan sayfalara verilen öncelik oranıdır. Geçerli değerler 0.1 ile 1.0 arasındadır. Bir sayfanın varsayılan öncelik oranı 0.5'tir. Arama motorları sitenizi indekslerken bu oranlardan faydalanır.</td>
            </tr>

            <tr bgcolor="#635F5F">
                <td colspan="3" style="text-align: center"><input name="generate_sitemap" type="submit" id="generate_sitemap" value="Sitemap'i Oluştur" style="margin: 5px 5px 5px 0;"></td>
            </tr>
        </table>
    </form>

    <p>
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
    echo "\n<b>{$count1[1]}</b> Sayfada <b>$count</b> link bulundu\n";

    ?>
</div>




  <div><span>
	  <h3>İşte Sitemap'iniz burada.</h3><textarea name="textarea2" cols="65" rows="10"><?=$sitemap?></textarea>

	</span></div>

<p align="center">
    <span><a href="<?=$filename?>" target="_blank"><strong>Sitemap</strong>i görüntüle</a></span>
</p>

    <? } } ?>
                    </span>


<blockquote>
    <h4>Sitemap Bilgileri</h4>
    <b>Sitemap dosyasını nereye koymalıyım?</b>
    <p><abbr title="Site Haritası">Sitemap.xml</abbr> dosyası için bilgisayarınızın not defterine sitemap'i kopyaladıktan sonra "sitemap.xml" olarak farklı kaydetmeniz gerekir.<strong>Sitemap</strong> dosyanızı sitenizin ana dizinine yükleyin.</p>
    <b>Sitemap dosyasının boyutu ne kadar olabilir?</b>
    <p>Sitemap dosyaları 10 MB (10,485,760 bytes) üzeri olmamalıdır. Ayrıca en fazla 50.000 URL içerebilir.</p>
    <b>Sitemap dosyasını oluşturduktan sonra ne yapmalıyım?</b>
    <p><strong>Sitemap</strong> dosyanızı oluşturup sitenize yükledikten sonra Sitemap protokolünü kabul eden arama motorlarına bu dosyayı yollamalısınız. Mesela Google arama motoruna sitemap dosyanızı göndermek için <a rel="nofollow" href="http://www.google.com/webmasters" title="Google Webmasters">Google Webmaster</a> hesabı oluşturup sitemap dosyanızı yüklemelisiniz.</p>
    <b>Sayfalarımdan bazılarında frame teknolojisi kullanıyorum. Her dosyanın URL'sini ayrı ayrı girmem gerekir mi?</b>
    <p>Evet, girmelisiniz</p>
</blockquote>

<? require('../../hizmet/tema/menu3.php'); ?>

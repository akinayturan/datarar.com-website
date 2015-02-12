<?
$dirurl = "http://datarar.com/hizmet/icon-mail/";
$picdir = "jim_black";

function read_from_file($file){
	$fp=fopen($file,"r");
	if(!$fp){
		return(FALSE);
	}
	flock($fp,LOCK_SH);
	$data=fread($fp,filesize($file));
	fclose($fp);
	return($data);
}

function hexrgb($hexstr, $rgb){ //
	$int = hexdec(str_replace("#", '', $hexstr));
	switch($rgb) {
		case "r":
			return 0xFF & $int >> 0x10;
			break;
		case "g":
			return 0xFF & ($int >> 0x8);
			break;
		case "b":
			return 0xFF & $int;
			break;
		default:
			return array(
				"r" => 0xFF & $int >> 0x10,
				"g" => 0xFF & ($int >> 0x8),
				"b" => 0xFF & $int
			);
			break;
	}
}

if($_GET['start']=="5glive"){
	$filename = "images/sample.png";
	$type = 1;
}elseif($_GET['show']){
	$picname = $_GET['show'];
	$filename = $picdir."/".date("ymd",$picname)."/".$picname.".png";
	$type = 2;
}elseif($_GET['down']){
	$filename = $_GET['down'];
	header("Content-type: command");
	header("Content-Disposition: attachment; filename=datarar_emaillogo.png");
	readfile($picdir."/".date("ymd",$filename)."/".$filename.".png");
	exit;
}elseif($_GET['mkpic']=="5glive"){
	$username = trim($_GET['s']); //�ʼ���ַ
	if(preg_match("/^[_\.0-9a-zA-Z\_@.]*$/i",$username) && $username){
		$host = $_GET['maillogo']; //�ʼ�HOST
		$srcUrl = "s_logo/".$host.".gif"; //EmailͼƬURL

		$back_c = "#ffffff"; //������ɫ
		$border_c = $_GET['bordercolor']; //�߿���ɫ
		$font_c = $_GET['color']; //������ɫ
		$font_size = $_GET['size']; //�����С
		$font_url = "s_font/".$_GET['mailfont'].".ttf"; //����URL

		if($_GET['border']=="true") $is_border = 1; else $is_border = 0; //�Ƿ��б߿� 0û�� ��0��
		if($host) $is_logo = 1; else $is_logo=0; //�Ƿ�������ͼ�� 0û�� ��0��

		$srcWidth = 0;
		$srcHeight = 0;

		$str_pos = imagettfbbox($font_size,0,$font_url,$username);
		$str_width = intval($str_pos[2]); //�����ַ���
		$str_height = intval(str_replace("-","",$str_pos[5])); //�����ַ�߶�

		if($is_logo){
			$origImg = ImageCreateFromGIF($srcUrl);
			$srcWidth = intval(imagesx($origImg)); //Emailͼ����
			$srcHeight = intval(imagesy($origImg)); //Emailͼ��߶�
		}

		$newWidth = $str_width + 15 + $srcWidth; //LOGO�ܿ��
		$newHeight = ($srcHeight>$str_height) ? $srcHeight+2 : $str_height+8;

		$image=imagecreatetruecolor($newWidth, $newHeight); //����ͼƬ

		$back_color = hexrgb($back_c,rgb); //ȡ������ɫ
		$back = imagecolorallocate($image, $back_color['r'], $back_color['g'], $back_color['b']); //������ɫ ��ɫ
		imagefilledrectangle($image, 0, 0, $newWidth - 1, $newHeight - 1, $back); //�������

		if($is_border){
			$border_color = hexrgb($border_c,rgb); //ȡ�߿���ɫ
			$border = imagecolorallocate($image, $border_color['r'], $border_color['g'], $border_color['b']); //�߿���ɫ
			imagerectangle($image, 0, 0, $newWidth - 1, $newHeight - 1, $border); //���߿�
		}

		if($is_logo){
			$srcX = $str_width+10; //EmailͼƬX��λ��
			$srcY = ($newHeight - $srcHeight)/2; //EmailͼƬY��λ��
			ImageCopy($image, $origImg, $srcX,$srcY,0,0,$srcWidth,$srcHeight); //��EmailͼƬ���Ƶ�LOGO��
		}

		$font_color = hexrgb($font_c,rgb); //ȡ������ɫ
		$color = imagecolorallocate($image, $font_color['r'], $font_color['g'], $font_color['b']); //������ɫ
		$str_x = $str_height+($newHeight-$str_height)/2;
		if(!$is_logo) $str_x-=2; //����߶�����
		imagettftext($image, $font_size, 0, 6, $str_x, $color, $font_url, $username); //������д��ͼƬ��

		//���ͼƬ
		$filename = time();
		$filedir = date("ymd",$filename);

		if(!file_exists($picdir."/".$filedir)){ //���ͼƬ�洢Ŀ¼�����·ݷֿ��洢
			mkdir($picdir."/".$filedir);
		}
		header("Content-type: image/png");
		imagepng($image,$picdir."/".$filedir."/".$filename.".png"); //���Ҫ��ͼƬ���ڱ��أ��򿪴�ѡ��
		imagedestroy($image);
		header("location: ?show=".$filename);
		exit;
	}elseif($username==""){
		$filename = "images/taddyshen.png";
		$type = 4;
	}else{
		$filename = "images/error.png";
		$type = 4;
	}
}else{
	$filename = "images/error.png";
	$type = 4;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=iso-8859-9" />

	<meta name="google-site-verification" content="ciu-UfpnqJYe6rjrk5QMrrzz684u2HLlywF9KKLKEjk" />
	<meta name="msvalidate.01" content="910AEDDA7AB4D2A7FA00ACB17E444EA5" />
	<meta name="alexaVerifyID" content="ybOKfPS80NueBfPKssTKHmhaWo0" />
	<meta name="yandex-verification" content="5d863a6dead77fbe" />

	<meta name="description" content="Resimli E-posta olu�turma � datarar.com Hizmetleri � Birazc�k Farkl�" />
	<meta name="keywords" content="Resimli E-posta olu�turma, datarar, ep, farki, evrensel, paylasim, evrenselpaylasim, fark�, farkl�, farkli, fark, " />
	<title>�con Mail � Resimli E-posta olu�turma � datarar.com Hizmetleri � Birazc�k Farkl�</title>



	<meta name="robots" content="index, follow" />
	<meta http-equiv="reply-to" content="iletisim@datarar.com" />
	<meta http-equiv="content-language" content="tr, en" />
	<meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="cache-control" content="no-cache" />
	<meta name="googlebot" content="index, follow" />
	<meta name="abstract" content="EPfark� � Bilgiye I��k Tut!" />
	<meta name="distribution" content="global" />
	<meta name="classification" content="personel blog" />
	<meta name="resource-type" content="document" />
	<meta name="rating" content="all" />
	<meta name="copyright" content="creativecommons" />
	<meta name="creation" content="29/11/2010 " />
	<meta name="generator" content="bizimakin" />
	<meta name="designer" content="bizimakin" />
	<meta name="publisher" content="bizimakin" />
	<meta name="author" content="akin" />
	<meta name="geo.region" content="TR-06" />
	<meta name="geo.placename" content="ankara" />
	<meta name="geo.position" content="38.963745;35.243322" />
	<meta name="ICBM" content="38.963745, 35.243322" />
	<meta name="DC.title" content="EPfark� � Bilgiye I��k Tut!" />


	<link href="http://datarar.com/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link href="http://datarar.com/index.php?format=feed&amp;type=rss" rel="alternate" type="application/rss+xml" title="RSS 2.0" />
	<link href="http://datarar.com/index.php?format=feed&amp;type=atom" rel="alternate" type="application/atom+xml" title="Atom 1.0" />

	<link rel='index' title='datarar' href='http://datarar.com/' />


	<link href="images/common.css" rel="stylesheet" type="text/css" />




	<style>
		body{font-size:12px;color:#666;margin:0;}
	</style>
	<!-- sayac -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-26694472-1', 'auto');
		ga('send', 'pageview');

	</script>
	<!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter10711903 = new Ya.Metrika({id:10711903, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/10711903" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
	<!-- /sayac -->
</head>
<body>
<? if($type==1){ ?>
	<table style="border:1px solid #f5f5f5;" width="350" align="center">
		<tr><td height="150" align="center"><img src="<?=$filename?>" id="newlogo" /></td></tr>
	</table>
<? }elseif($type==2){ ?>
	<script language="javascript">
		function oCopy(obj){
			obj.select();
			js=obj.createTextRange();
			js.execCommand("Copy");
		}
	</script>
	<table style="border:1px solid #f5f5f5;" width="350" align="center">
		<tr><td height="80" align="center"><img src="<?=$filename?>" id="newlogo" alt="����ͼ��" /></td></tr>
		<tr><td height="40" bgcolor="#f5f5f5" align="center"><input name="savebutton" type="button" id="savebutton" onClick="document.location='?down=<?=$picname?>'" value="Resmi indir" style="width:100px;line-height:150%;" /></td></tr>
		<tr><td>
				<table>
					<tr><td height="20" align="center" width="60">Resim Adresi</td><td><input type="text" value="<?=$dirurl.$filename?>" style="width:200px;height:16px;font-family:arial;" onclick="this.select()" id="ubbpic" /></td><td><input type="button" value="Copy" onclick="oCopy(ubbpic)" /></td></tr>
					<tr><td height="20" align="center">HTML kodu</td><td><input type="text" value='<img src="<?=$dirurl.$filename?>" alt="Mail icon Datarar.com" />' style="width:200px;height:16px;font-family:arial;" onclick="this.select()" id="htmlpic" /></td><td><input type="button" value="Copy" onclick="oCopy(htmlpic)" /></td></tr>
				</table>
			</td></tr>
	</table>
<? }elseif($type==3){ ?>

<? }else{ ?>
	<table style="border:1px solid #f5f5f5;" width="350" align="center">
		<tr><td height="150" align="center"><img src="<?=$filename?>" id="newlogo" alt="��,������,������!" /></td></tr>
	</table>
<? } ?>
</body>
</html>
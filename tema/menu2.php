</head>
<body>
<div id="genel"> 
<div id="ortalan">
<div id="sidebar">

<div id="yanlo2go">
<div id="lo2go"><h1><a title="EP" href="//epfarki.com/" class="dJAX_internal"> <span>EP</span>farkı</a></h1><h2><a title="EP" href="//epfarki.com/" class="dJAX_internal"> | Birazcık Farklı</a></h2></div></div>

<div class="yans"><?php $dosya = fopen("../../sozler.txt","r"); while($satir = fgets($dosya,1024)) $sozler[] = $satir; fclose($dosya); $soz = $sozler[rand(0,count($sozler)-1)]; echo $soz; ?></div>

<? require('../../wp-content/themes/epbeyaz/sosyal-paylasim-sidebar.php'); ?> 
<div class="temiz"></div>
<div class="yans yans2">     
<h4><span>Son Yazılar</span></h4>
<?php
function rssoku() 
{	
	$feed=file_get_contents("http://epfarki.com/feed");
	$xml= new SimpleXMLElement($feed);
	$sayac="1";
	$limit="10";
	echo "<ul>";
	foreach ($xml -> channel -> item as $veri){
		if ($sayac <= $limit){ 
		$desc= $veri -> description;
		$desc=substr($desc,0,0);
		$link = $veri -> link;
		$title= $veri -> title;
		echo "<li><a href=\"$link\" title=\"$title\">$title</a></li>";
		}
	$sayac++;
	}
	echo "</ul>";
}
rssoku();
?>  
</div>	   

</div><div id="anayazialan">
<div id="ustmenu">
<div id="siteisim">
                                                           
<? require('../../hizmet/tema/menuust.php'); ?>
</div>
</div>
<div id="yazialan">

<? require('../../wp-content/themes/epbeyaz/reklam-hareketli.php'); ?> 

<div id="altyazialan">
<div id="main" class="updatable" role="main">
<div id="yukleyici"></div>
<div id="kategorimenu"> 
<? require('../../hizmet/tema/menu.php'); ?>
</div>                            
<div class="postkap"><div class="post"><div class="postic"> 
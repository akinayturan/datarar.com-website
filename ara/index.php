<?
require('../../hizmet/tema/menu1.php'); 
?>
  
<meta name="description" content="Arama Sitesi » EPfarkı » Birazcık Farklı" />
<meta name="keywords" content="arama servisi, epfarki, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, " />
<title>Ara | EPfarki.com Sitede Gelişmiş Arama | EPfarkı</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script src="script.js"></script>

<?
require('../../hizmet/tema/menu2.php'); 
?>

<div id="title-hizmet" class="title">
<h4><a href="http://epfarki.com/hizmet/ara/" rel="bookmark" title="Arama Servisi">Arama Servisi</a></h4>
</div> 
<div class="temiz"></div>

<div id="icerik-hizmet" class="icerik"> 



    <form id="searchForm" method="post">
		<fieldset>
        
           	<input id="s" type="text" />
            
            <input type="submit" value="Submit" id="submitButton" />
            
      <div id="searchInContainer">
                <input type="radio" name="check" value="site" id="searchSite" checked />
                <label for="searchSite" id="siteNameLabel">Ara</label>
                
                <input type="radio" name="check" value="web" id="searchWeb" />
                <label for="searchWeb">Web'de Ara</label>
			</div>            
      <div id="icons">
            <ul class="icons">
                <li class="web" title="Web Search" data-searchType="web">Web</li>
                <li class="images" title="Image Search" data-searchType="images">Resim</li>
                <li class="videos" title="Video Search" data-searchType="video">Video</li>
            </ul>                  
			</div>
            
        </fieldset>
    </form>

    <div id="resultsDiv"></div>
    
      
</div>

<?
require('../../hizmet/tema/menu3.php'); 
?>

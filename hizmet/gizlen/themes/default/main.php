<?
require('../../hizmet/tema/menu1.php'); 
?>

  <meta name="description" content="<!--[meta_description]--> | EPfarkı">
  <meta name="keywords" content="<!--[meta_keywords]--> | EPfarkı">
  <title><!--[site_name]--> | EPfarkı</title>               

<?php echo injectionJS(); /* Javascript for redirection direct to proxified pages */ ?>
<script type="text/javascript">
window.addDomReadyFunc(function() {
   document.getElementById('options').style.display = 'none';
   document.getElementById('input').focus();
});
disableOverride();
</script>

<?
require('../../hizmet/tema/menu2.php'); 
?>
<div id="title-hizmet" class="title"><h3>
<a href="http://epfarki.com/hizmet/gizlen/" title="Gizlen">Gizlen</a>
</h3></div> <div class="temiz"></div>

      <!-- CONTENT START -->
      
         <!--[error]-->
         
         
         
         
         <b>Girmek İstediğiniz Siteyi Yazınız:</b>
         
         <!--[index_above_form]-->
         
         <form action="includes/process.php?action=update" method="post" onsubmit="return updateLocation(this);" class="form">
            <input type="text" name="u" id="input" size="40" class="textbox">&nbsp;
            <input type="submit" value="Git" class="button"> 
            &nbsp;
            [<a style="cursor:pointer;" onclick="document.getElementById('options').style.display = (document.getElementById('options').style.display=='none'?'':'none')">Ayrıntılar</a>]
            <ul id="options">
<?php foreach ( $toShow as $option ) echo <<<HTML
               <li>
                  <input type="checkbox" name="{$option['name']}" id="{$option['name']}"{$option['checked']}>
                  <label for="{$option['name']}" class="tooltip" onmouseover="tooltip('{$option['escaped_desc']}')" onmouseout="exit();">{$option['title']}</label>
               </li>
HTML;
?>
            </ul>
         </form>
                     <br style="clear: both;">
         <a href="http://www.glype.com/license"></a>
         <!--[index_below_form]-->

         <!-- CONTENT END -->
         
         <!--// Optional navigation supplied.  Uncomment and edit if you want to use but make sure the pages exist!
         <ul id="nav">
            <li class="left"><a href="index.php">Home</a></li>
            <li class="left"><a href="edit-browser.php">Edit Browser</a></li>
            <li class="left"><a href="cookies.php">Manage Cookies</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="disclaimer.php">Disclaimer</a></li>            
            <li><a href="terms.php">Terms of Use</a></li>            
         </ul>
         -->

<blockquote>
<b>Gizlen Nedir?</b> 
 <p>» Bu site sayesinde yasaklı sitelere giriş yapıp internetin özgür dünyasında gezebilirsiniz.     <br />
» Bilgisayarınızda hiçbir değişiklik yapmadan, güncel DNS ağımız sayesinde network değişimleri anlık olarak karşınızdadır.<br /> 
» IP adresiniz gizlenir ve kişisel bilgileriniz 3. sahışlara asla gönderilmez. Size kolay bir şekilde gizlilik sağlar.<br /><br /></p>
</blockquote>


<?
require('../../hizmet/tema/menu3.php'); 
?>
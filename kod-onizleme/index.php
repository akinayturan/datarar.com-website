<?
require('../../hizmet/tema/menu1cssyok.php');
?>

<meta name="description" content="Kod Ön İzleme Editörü | Gerçek Zamanlı | EPfarkı | Birazcık Farklı" />
<meta name="keywords" content="epfarki, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, HTML,JavaScript, Kodlari Test Et, Kod Onizleme Editoru," />
<title>Kod Ön İzleme Editörü | Gerçek Zamanlı | EPfarkı</title>

<script type="text/javascript">

  var editboxHTML =
      '<html class="expand close">' +
      '<head>' +
      '<style type="text/css">' +
      '.expand { width: 100%; height: 100%; }' +
      '.close { border: none; margin: 0px; padding: 0px; }' +
      'html,body { overflow: hidden; }' +
      '<\/style>' +
      '<\/head>' +
      '<body class="expand close" onload="document.f.ta.focus(); document.f.ta.select();">' +
      '<form class="expand close" name="f">' +
      '<textarea class="expand close" style="background: #def;" name="ta" wrap="hard" spellcheck="false">' +
      '<\/textarea>' +
      '<\/form>' +
      '<\/body>' +
      '<\/html>';

  var defaultStuff = '- Gerçek Zamanlı Kod Ön İzleme Editörü ^^ \n' +
      '- İstediginiz Kodu Buraya Yazınız... (*HTML,JavaScript Vb. )\n' +
      '- Yandaki Kutucukta Nasıl Göründüklerine Bakabilirsiniz.(Gerçek Zamanlı Olarak!)\n' +
      '- EPfarki.com\n';
  // I don't want this stuff to appear in the box at the top because I feel it's likely to be distracting.
  var extraStuff = '<div style="position:absolute; margin:.3em; bottom:0em; right:0em;"><small><a href="http://epfarki.com/">EPfarkı</a>  <a target="_blank" rel="nofollow" href="http://creativecommons.org/licenses/by-nc-nd/2.5/">© 2012</a> | Tasarım: <a href="http://epfarki.com/iletisim/">Bizimakin</a> | Özel İletişim: epfarki [at] gmail.com';


  var old = '';

  function init()
  {
    window.editbox.document.write(editboxHTML);
    window.editbox.document.close();
    window.editbox.document.f.ta.value = defaultStuff;
    update();
  }

  function update()
  {
    var textarea = window.editbox.document.f.ta;
    var d = dynamicframe.document;

    if (old != textarea.value) {
      old = textarea.value;
      d.open();
      d.write(old);
      if (old.replace(/[\r\n]/g,'') == defaultStuff.replace(/[\r\n]/g,''))
        d.write(extraStuff);
      d.close();
    }

    window.setTimeout(update, 150);
  }

</script>
</head>
<frameset cols="50%,*" resizable="yes" onload="init();">
  <!-- about:blank confuses opera, so use javascript: URLs instead -->
  <frame name="editbox" src="javascript:'';">
  <frame name="dynamicframe" src="javascript:'';">
</frameset>

<!-- sayac -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-26694472-1', 'auto');
    ga('send', 'pageview');

</script>
<!-- Yandex.Metrika counter --><script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript"></script><script type="text/javascript">try { var yaCounter10711903 = new Ya.Metrika({id:10711903, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true}); } catch(e) { }</script><noscript><div><img src="//mc.yandex.ru/watch/10711903" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
<!-- /sayac -->
</html>
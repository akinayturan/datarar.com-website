<? require('../tema/headerNcss.php'); ?>


<meta name="description" content="Kod Ön İzleme Editörü | Gerçek Zamanlı | Datarar" />
<meta name="keywords" content="datarar, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, HTML,JavaScript, Kodlari Test Et, Kod Onizleme Editoru," />
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
        '<body class="expand close" onload="document.f.ta.focus(); document.f.ta.select();"  */">' +
        '<form class="expand close" name="f">' +
        '<textarea class="expand close" style="background: #EAEAEA; font-family:trebuchet ms; font-size:16px; " name="ta" wrap="hard" spellcheck="false">' +
        '<\/textarea>' +
        '<\/form>' +
        '<\/body>' +
        '<\/html>';

    var defaultStuff = '<font face="trebuchet ms" color="green"><h1 style="font-weight:normal; font-size:28px; text-align:center"><b>Kod Önizleme Sayfası</b></h1></font>\n' +
        '<center><font face="trebuchet ms" color="green" style="font-size:23px;">Html, Css, Javascript kodlarını deneyebileceğiz<br>Dinamik & Eşzamanlı Kod Önizleme Sayfası</font></center><br><center><font face="trebuchet ms" color="#000000" style="font-size:19px;">Kodlarınızın çalışıp çalışmadığını, rengini, şeklini, işleyişini bilmiyorsanız, yukarıdaki kod alanına yapıştırın, önizleyin ve düzenleyin !</font></center>';


    var extraStuff = '<br><br><br><div style="text-align:center"><small><a target="_blank" title="DataRar" href="//datarar.com/">Datarar.com</a><\/small><\/div>';

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
<frameset resizable="yes" rows="50%,*" onload="init();">
    <frame name="editbox" src="javascript:'';">
    <frame name="dynamicframe" src="javascript:'';">
</frameset><noframes></noframes>

</html>
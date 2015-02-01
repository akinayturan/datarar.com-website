<?
require('../../hizmet/tema/menu1.php');
?>

<meta name="description" content="Otomatik Back Link Kazanma Sistemi » EPfarkı » Birazcık Farklı" />
<meta name="keywords" content="Oto, Link, Back, ücretsiz, epfarki, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, " />
<title>Oto Back Link | EPfarkı</title>


<script src="//epfarki.com/ep/tema/js/otobacklink.js"></script>
<script type="text/javascript">

    maxsub=300;

    function geturl(){
        current1 = parseInt(document.getElementById("currentk").value);
        //current1 = document.getElementById("currentk").value;
        if(current1<maxsub){
            currentk2=parseInt(document.getElementById("currentk").value)+1;
            document.getElementById("totalbl").innerHTML=currentk2;
            document.getElementById("statusk").innerHTML="Çalışıyor...";
            document.getElementById("currentk").value= currentk2;

            url = theurls[current1].replace("{website}", cdomain);
            window.open(url,"frame1");

            timerId = setTimeout(geturl, 5000);
        }else{
            document.getElementById("statusk").innerHTML="Submission Completed";
            //  clearInterval(chatinterval);
        }
    }

    function beginu(){
        cdomain=document.getElementById("domain").value;
        cdomain=cdomain.replace("http://", "");
        cdomain=cdomain.replace("www.", "");

        geturl();
        // chatinterval = setInterval ( "geturl()", 5000 );
    }



    function getFlashMovieObject(movieName)
    {
        if (window.document[movieName])
        {
            return window.document[movieName];
            alert(movieName);
        }
        if (navigator.appName.indexOf("Microsoft Internet")==-1)
        {
            if (document.embeds && document.embeds[movieName])
                return document.embeds[movieName];

        }
        else // if (navigator.appName.indexOf("Microsoft Internet")!=-1)
        {
            return document.getElementById(movieName);
        }
    }

    function SendDataToFlashMovie(fgh,tr)
    {
        var flashMovie=getFlashMovieObject("predoll");
        flashMovie.changetop(fgh,tr);
        using(fgh,tr);
    }

    function GetXmlHttpObject()
    {
        var xmlHttp=null;
        try
        {
            // Firefox, Opera 8.0+, Safari
            xmlHttp=new XMLHttpRequest();
        }
        catch (e)
        {
            // Internet explorer
            try
            {
                xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
            }
            catch (e)
            {
                xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
            }
        }
        return xmlHttp;
    }

    function stateChanged()
    {
        if (xmlHttp.readyState==3)
        {
            tid=xmlHttp.responseText;
            alert(tid);

        }
    }
</script>

<?
require('../../hizmet/tema/menu2.php');
?>

<div id="title-hizmet" class="title"><h4>

        <a href="http://epfarki.com/hizmet/otobacklink/" rel="bookmark" title="Oto Back Link">Otomatik Backlink (gerilink).</a>

    </h4></div> <div class="temiz"></div>


<div id="icerik-hizmet" class="icerik">

    <p><b>Backlink</b> kazanmak için yapmanız gereken tek şey boş alana sitenizin alanını, uzantısını yazmak vede başlat butonuna basmak ve ücretsiz link veren sitelerin tümü bitene kadar açılan sayfayı kapatmamanız olacaktır...<br />
        <br />İşlem sonunda site adresinize <strong>211 adet link</strong> kazanmış olursunuz...<br />
        <br />İşlem sonuna kadar açılan sayfayı kapatmamanız sizin için yararlı olacaktır...<br />
        Sistemimiz ücretsizdir, Hayırlı Olsun...<br />
        <br /><b>"Başlat"a tıkladıktan sonra işlem 10 dakika kadar sürecektir...</b></p>

    <table>
        <tr>
            <td>
                <input type='hidden' id='currentk' value='0' >
                <input type='hidden' id='cwindow' value='0' >
                <h5>Site: http://www.</h5></td>
            <td colspan='2'><input type='text' name='domain' id='domain' value='epfarki.com' ></td>
            <td><input type='button' value='Başlat!' name='submit' onclick="beginu();" ></td>
        </tr>
        <tr>
            <td colspan='4'>
                <p>
                    <b>Durum:</b> <span id='statusk'></span>
                    <br />
                    <b>Toplam Kazanılan Link Sayısı:</b><span id='totalbl'></span>
                </p>
            </td>
        </tr>
    </table>


    <blockquote><p>İşlem yaklaşık 10 dakika sürecektir ve sonunda site adresinize 211 adet link kazanmış olursunuz...</p>
    </blockquote>


</div>

<?
require('../../hizmet/tema/menu3.php');
?>

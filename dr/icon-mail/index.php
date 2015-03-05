<? require('../tema/header.php'); ?>


<meta name="description" content="Resimli E-posta oluşturma » datarar.com Hizmetleri » Birazcık Farklı" />
<meta name="keywords" content="Resimli E-posta oluşturma, datarar, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, " />
<title>İcon Mail » Resimli E-posta oluşturma » datarar.com Hizmetleri » Birazcık Farklı</title>

<script language="javascript">
    var once=true;
    var color="999999";
    var nowmails="gmail.com";
    var fsize=12;
    var nowcolor="666666";
    var nowbcolor="cccccc";
    var mailfont="arial";
    var savepf;
    var fname;

    function setcolor(c){
        nowcolor=c;
        document.getElementById('mailstring').style.color="#"+c;
    }
    function setbcolor(c){
        nowbcolor=c;
        document.getElementById('mailbcolor').style.background="#"+c;
    }
    function setfont(c){
        mailfont=c;
        //document.getElementById('mailstring').style.fontFamily=c;
    }
    function setmails(m){
        nowmails=m;
        document.getElementById('mails').src="s_logo/"+nowmails+".gif";
    }

    function nomails(){
        nowmails="";
        document.getElementById('mails').src="s_logo/blank.gif";
    }

    function crt(){
        mailfr.location='emaillogo.php?s='+document.getElementById('mailstring').value+'&maillogo='+'&border='+document.getElementById('haveborder').checked+'&bordercolor='+nowbcolor+'&size='+fsize+'&color='+nowcolor+'&mailfont='+mailfont+'&mkpic=5glive';
    }

    function save(){
        document.location='emaillogo.php?s='+document.getElementById('mailstring').value+'&maillogo='+'&border='+document.getElementById('haveborder').checked+'&bordercolor='+nowbcolor+'&size='+fsize+'&color='+nowcolor+'&mailfont='+mailfont;
    }
</script>
<style>

    .mailsblock {
        background: #fff;
        border:1px solid #e7e7e7;
        float:left;
        margin:2px 2px 0 0;
        width:125px;
        cursor:pointer;text-align:center;
    }

</style>

<? require('../tema/menu2.php'); ?>

<div id="title-hizmet" class="title"><h4>

        <a href="http://datarar.com/dr/icon-mail/" rel="bookmark" title="İcon Mail">İcon Mail</a>

    </h4></div> <div class="temiz"></div>

<table border="0" cellpadding="0" cellspacing="0" width="530" align="left">
    <tr>
        <td>
    <tr>
        <td width="355" valign="middle" style="text-align: center;">
            <iframe width="355" height="200" frameborder="0" id="mailfr" name="mailfr" src="http://datarar.com/dr/icon-mail/emaillogo.php?start=5glive" scrolling="no"></iframe>
        </td>
    </tr>
    <tr>
        <td width="320">
            <table>
                <tr><td colspan="2" height="18"><strong>E-posta adresinizi giriniz:</strong></td></tr>

                <tr>
                    <td style="padding-right: 4px;"><input type="text" name="mailstring" id="mailstring" maxlength="50" value="" onfocus="select()" style="font-weight:bold;font-size:16px;color:#666;font-family:arial;text-align:right;width:150px;height:32px;margin:0;" size="20" /></td>

                    <td><input name="crtbutton" type="button" id="crtbutton" onClick="crt();" value="Olu&#351;tur" style="width:156px;line-height:250%;" /></td><td><input id="haveborder" type="checkbox" checked value="checkbox" name="haveborder"><label for="haveborder">
                            Kenar&#305; &ccedil;izgili</label></td></tr>
                <tr><td height="6" colspan="2"></td></tr>
            </table>
            <table>
                <tr><td height="18"><strong>Metin Rengi</strong></td></tr>
                <tr><td><div class="acb">
                            <img onclick="setcolor('000000');" src="images/1.gif" width="12" height="12"><img onclick="setcolor('333333');" src="images/2.gif" width="12" height="12"><img onclick="setcolor('666666');" src="images/3.gif" width="12" height="12"><img onclick="setcolor('999999');" src="images/4.gif" width="12" height="12"><img onclick="setcolor('cccccc');" src="images/0.gif" width="12" height="12"><img onclick="setcolor('ffcc33');" src="images/5.gif" width="12" height="12"><img onclick="setcolor('009900');" src="images/6.gif" width="12" height="12"><img onclick="setcolor('ff6600');" src="images/7.gif" width="12" height="12"><img onclick="setcolor('99cc00');" src="images/8.gif" width="12" height="12"><img onclick="setcolor('0099ff');" src="images/9.gif" width="12" height="12"><img onclick="setcolor('660066');" src="images/10.gif" width="12" height="12"><img onclick="setcolor('ff0099');" src="images/11.gif" width="12" height="12"><img onclick="setcolor('996666');" src="images/12.gif" width="12" height="12"><img onclick="setcolor('cc0000');" src="images/13.gif" width="12" height="12"></div></td></tr>
                <tr><td height="6"></td></tr>
            </table>
            <table>
                <tr><td height="18"><strong>Kenarl&#305;k Rengi</strong></td><td align="right"><div id="mailbcolor" style="width:30px;height:18px;background:#cccccc;"> </div></td></tr>
                <tr><td colspan="2"><div class="acb">
                            <img onclick="setbcolor('000000');" src="images/1.gif" width="12" height="12"><img onclick="setbcolor('333333');" src="images/2.gif" width="12" height="12"><img onclick="setbcolor('666666');" src="images/3.gif" width="12" height="12"><img onclick="setbcolor('999999');" src="images/4.gif" width="12" height="12"><img onclick="setbcolor('cccccc');" src="images/0.gif" width="12" height="12"><img onclick="setbcolor('ffcc33');" src="images/5.gif" width="12" height="12"><img onclick="setbcolor('009900');" src="images/6.gif" width="12" height="12"><img onclick="setbcolor('ff6600');" src="images/7.gif" width="12" height="12"><img onclick="setbcolor('99cc00');" src="images/8.gif" width="12" height="12"><img onclick="setbcolor('0099ff');" src="images/9.gif" width="12" height="12"><img onclick="setbcolor('660066');" src="images/10.gif" width="12" height="12"><img onclick="setbcolor('ff0099');" src="images/11.gif" width="12" height="12"><img onclick="setbcolor('996666');" src="images/12.gif" width="12" height="12"><img onclick="setbcolor('cc0000');" src="images/13.gif" width="12" height="12"></div></td>
                </tr>
                <tr><td height="6" colspan="2"></td></tr>
            </table>
            <table>
                <tr><td height="18"><strong>Yaz&#305; Fontu</strong></td><td><select id="sfont" onchange="setfont(this.value);" name="sfont"><option selected value="arial">
                                arial</option><option value="verdana">verdana</option><option value="arial">
                                tahoma</option><option value="segoesc">segoesc</option><option value="itckrist">
                                itckrist</option></select></select></td></tr>
                <tr><td height="6" colspan="2"></td></tr>
            </table>
        </td>
    </tr>
    </td>
    </tr>
</table>

<? require('../tema/footer.php'); ?>

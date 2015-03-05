var base = 'http://datarar.com';
var theurls=new Array(

    "http://epfarki.com/linkekle/",
    "http://{website}.whoisbucket.com/",
    "http://{website}.websitetrafficspy.com/",
    "http://validator.w3.org/check?uri=http://{website}",
    "http://www.alexa.com/siteinfo/{website}",
    "http://jigsaw.w3.org/css-validator/validator?uri=http://{website}",
    "http://who.is/whois/{website}",
    "http://r.websnapr.com/?r=http://{website}/",
    "http://www.seoprofiler.com/analyze/{website}",
    "http://www.sitetrail.com/{website}",
    "http://www.aboutus.org/{website}",
    "http://websiteshadow.com/{website}",
    "http://www.talkreviews.com/{website}",
    "http://whois.domaintools.com/{website}",
    "http://www.markosweb.com/www/{website}",
    "http://www.aboutthedomain.com/{website}",
    "http://www.ip-adress.com/reverse_ip/{website}",
    "http://www.surcentro.com/en/info/www.{website}",
    "http://www.linkwan.com/gb/broadmeter/VisitorInfo/QureyIP.asp?QureyIP={website}",
    "http://stuffgate.com/{website}",
    "http://www.123cha.com/domain/{website}",
    "http://{website}.statout.com",
    "https://siteanalytics.compete.com/epfarki.com/{website}",
    "https://www.mywot.com/en/scorecard/{website}",
    "http://protect-x.com/info/{website}",
    "http://builtwith.com/{website}",
    "http://www.sitedossier.com/site/{website}",
    "http://toolbar.netcraft.com/site_report?url=http://{website}",
    "{website}.webstatsdomain.org",
    "http://www.iwebtool.com/rank?domain={website}",
    "http://www.robtex.com/dns/{website}.html",
    "http://page2rss.com/page?url={website}",
    "http://www.transtats.bts.gov/exit.asp?url=http://{website}",
    "http://www.onlinewebcheck.com/?url={website}",
    "http://www.websitevaluebot.com/www.{website}",
    "http://tool.chinadmoz.org/alexa/?domain={website}",
    "http://www.domaincrawler.com/{website}",
    "http://buildstats.com/{website}",
    "http://www.v3whois.com/w/{website}",
    "http://ip.webmasterhome.cn/?ip={website}",
    "http://alexa.chinaz.com/Index.asp?domain={website}",
    "http://pr.links.cn/querypr.asp?url={website}",
    "http://pagerank.webmasterhome.cn/?domain={website}",
    "http://site.egyfox.com/{website}",
    "http://alexa.chinabreed.com/?domain={website}",
    "http://www.mqdm.net/tool/search/alexa/?url={website}",
    "http://www.yousee123.com/search/alexa/index.asp?url={website}",
    "http://alexa.d-yn.com/?domain={website}",
    "http://whois.gwebtools.com.br/{website}",
    "http://www.123people.com/s/{website}",
    "http://80008.cn/link/Alexa/Index.asp?url={website}",
    "http://www.fuub.net/trustrank/?url=www.{website}",
   "http://www.fuub.net/site-bilgi/www..{website}",

    //not edited yet after here
    "http://{website}.cubestat.com/",
    "http://alexa.epclean.com/alexa.asp?url={website}",
    "http://trade.6jc.cn/tools/alexa/Index.asp?url={website}",
    "http://ip.toolsky.com/?IPstr={website}",
    "http://web.archive.org/web/*/http://{website}",
    "http://www.51.la/report/0_seotool.asp?id=1484711&d={website}&cp=+%C8%B7%B6%A8+",
    "http://www.china-holiday.com/webguide/pmcx/index.asp?url={website}",
    "http://ksscn.com/alexa/index.asp?url={website}",
    "http://www.seotg.com.cn/alexa/index.asp?url={website}",
    "http://www.hi001.net/alexa/Index.asp?url={website}",
    "http://tool.seo361.cn/alexa/Index.asp?url={website}",
    "http://netbar.in/alexa/Index.asp?url={website}",
    "http://www.it860.com/tools/alexa/index.asp?url={website}",
    "http://www.mybbdy.com/tool/Index.asp?domain={website}",
    "http://www.net-bar.com/alexa/Index.asp?url={website}",
    "http://www.baigoohoo.com/tools/indexed/Index.asp?url={website}",
    "http://www.100ceo.com/alexa/{website}/","http://www.wocha.com/alexa/{website}",
    "http://www.vvlink.com/alexa/index.asp?domain={website}",
    "http://www.alexa5.org/a/?Domain={website}",
    "http://www.myip.net/{website}",
    "http://www.mialexa.com/calcular_alexa.php?url={website}&Submit=+Calcular+",
    "http://www.jerichorose.com/tools/Alexa/index.asp?url={website}",
    "http://www.seoxuetang.com/wncxw/alexa/Index.asp?url={website}",
    "http://link.520750.com/alexa/Index.asp?url={website}",
    "http://www.chinaymz.com/alexa/?url={website}",
    "http://www.wbtrans.com/alexa/?url={website}",
    "http://www.baoge.net/webmaster/alexa/index.asp?url={website}",
    "http://www.bestiis.net/tool/alexa/?url={website}",
    "http://www.lywzz.com/Alexa/index.asp?url=www.{website}",
    "http://www.epun.cn/alexa/?url=www.{website}",
    "http://webboar.com/www/{website}",
    "http://hqindex.com/{website}",
    "http://www.websitefigures.com/site/{website}",
    "http://rbls.org/{website}",
    "http://domping.com/{website}",
    "http://www.siteluck.com/en/{website}",
    "http://www.bname.ru/analysis/{website}/",
    "http://domainsoutlook.com/g/site/{website}.html",
    "http://www.getwebsitevalue.com/www.{website}",
    "http://webmonitor.fyxm.net/www.{website}",
    "http://www.79tools.com/{website}",
    "http://whobis.com/{website}",
    "http://www.okajax.com/alexa/Index.asp?url={website}",
    "http://reverseinternet.com/domain/{website}",
    "http://who.pho.to/{website}",
    "http://www.293.net/{website}",
    "http://www.zzsky.cn/tool/sameip/?q={website}",
    "http://seo-monster.ru/?who={website}/","http://www.websiteaccountant.es/{website}",
    "http://www.whois365.com/cn/domain/{website}","http://tool.hnzzz.net/index.asp?url={website}",
    "http://www.fwol.biz/?url={website}",
    "http://www.gztyn.net/alexa/index.asp?url={website}",
    "http://www.qualidator.com/WQM/en/TestWebsite/http_{website}.aspx",
    "http://midea.mo.cn/alexa/index.asp?url={website}",
    "http://www.submityoursite.com/mypage/{website}",
    "http://www.carelmeyer.com/website-information/site-stats.aspx?site={website}",
    "http://webrota.com/{website}","http://seeallweb.org/domain/{website}",
    "http://www.lycos.de/?query=site:{website}",
    "http://webmastercoffee.com/site/{website}",
    "http://ip.many3.com/es/tracer/{website}",
    "http://www.sskee.com/tools/alexa/Index.asp?url={website}",
    "http://www.stirlingchinese.com/alexa/index.asp?url={website}",
    "http://www.onthesamehost.com/{website}/",
    "http://ip.yion.com/s.shtml?w=www.{website}",
    "http://www.112580.com/tools/alexa/index.asp?url={website}",
    "http://tool.difangwang.com/alexa/Index.asp?url={website}",
    "http://alexa.yxsj.net/?domain={website}",
    "http://www.threetong.com/lun/Index.asp?domain={website}",
    "http://tool.sxseo.cn/alexa/index.asp?domain={website}",
    "http://www.ax8008.com/alexa/?domain={website}",
    "http://www.gz007.net/alexa/index.asp?url={website}",
    "http://www.yourqi.net.cn/Alexa/Index.asp?url={website}",
    "http://tool.vaaoo.com/tools/webmaster-alexa/{website}",
    "http://website.informer.com/{website}",
    "http://webinformation.co/{website}",
    "http://urlspy.co.uk/{website}",
    "http://pezis.com/{website}",
    "http://www.laopinpai.com/tool/?domain={website}",
    "http://r-domain.net/{website}",
    "http://www.domainwhoisinfo.com/{website}",
    "http://www.chromewhois.com/domain/{website}",
    "http://www.whoisentry.com/domain/{website}",

    "http://www.similarsites.com/site/{website}",
    "http://{website}/?nereden=epfarki.com",
    "http://epfarki.com");


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
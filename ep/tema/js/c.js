function wousetCookie(name,value,expires,path,domain,secure)
{document.cookie=name+"="+escape(value)+((expires)?"; expires="+expires.toGMTString():"")+((path)?"; path="+path:"")+((domain)?"; domain="+domain:"")+((secure)?"; secure":"");}
function getCookieVal(offset){var endstr=document.cookie.indexOf(";",offset);if(endstr==-1){endstr=document.cookie.length;}
return unescape(document.cookie.substring(offset,endstr));}
function Wo_Get_Cookie(name){var arg=name+"=";var alen=arg.length;var clen=document.cookie.length;var i=0;while(i<clen){var j=i+alen;if(document.cookie.substring(i,j)==arg){return getCookieVal(j);}
i=document.cookie.indexOf(" ",i)+1;if(i==0)break;}
return null;}
function Wo_Delete_Cookie(name,path,domain){if(Wo_Get_Cookie(name))document.cookie=name+"="+((path)?";path="+path:"")+((domain)?";domain="+domain:"")+";expires=Thu, 01-Jan-1970 00:00:01 GMT";}
try{var kokwbs="ip";var wocookieEnabled=(navigator.cookieEnabled)?true:false
if(typeof navigator.cookieEnabled=="undefined"&&!wocookieEnabled){document.cookie="wotestcookie"
wocookieEnabled=(document.cookie.indexOf("wotestcookie")!=-1)?true:false}
var woucurrentTime=new Date();var woumonth=woucurrentTime.getMonth();var wouday=woucurrentTime.getDate();var wouyear=woucurrentTime.getFullYear();var t=escape(document.location);if(!wozone)var wozone=0;if(!wobanner)var wobanner=0;if(!wouser)var wouser="";var woucname="wou"+wouser;var wo_is_new_user=0;var wo_v_duration=0;if(wocookieEnabled)
{var wosecond=Math.round(woucurrentTime.getTime()/1000);woucname="awou_"+wouser;if(!Wo_Get_Cookie(woucname))wo_is_new_user=1;woucname="cwou_"+wouser;if(!Wo_Get_Cookie(woucname))
{wousetCookie(woucname,wosecond,"","/");woucname="bwou_"+wouser;Wo_Delete_Cookie(woucname,"/");woucname="awou_"+wouser;wo_v_duration=Wo_Get_Cookie(woucname);}
woucname="bwou_"+wouser;var woctime=Wo_Get_Cookie(woucname);if(!woctime)
wousetCookie(woucname,wosecond,new Date(1000*wosecond+30*60*1000),"/");else
{var wocurtime=Math.round(new Date().getTime()/1000);var wo_c_diff=wocurtime-woctime;woucname="awou_"+wouser;wousetCookie(woucname,wo_c_diff,new Date(2030,woumonth,wouday,23,59,59),"/");}}
if(navigator.cookieEnabled)
{woucname="wou"+wouser;var woucnamevalue=Wo_Get_Cookie(woucname);if(woucnamevalue)
kokwbs="ccno";else
{kokwbs="ccyes";wousetCookie(woucname,"t",new Date(wouyear,woumonth,wouday,23,59,59),"/");if(!Wo_Get_Cookie(woucname))
kokwbs="ip";if(!wocookieEnabled)
kokwbs="ip";}}
var wnoek="";var wos=escape(navigator.userAgent);var wnos="99";if(navigator.userAgent.search("Windows NT 5.1")!=-1)
wnos="4";if(navigator.userAgent.search("Windows 98")!=-1)
wnos="1";if(navigator.userAgent.search("Win98")!=-1)
wnos="1";if(navigator.userAgent.search("Windows NT 5.0")!=-1)
wnos="3";if(navigator.userAgent.search("Linux")!=-1)
wnos="5";if(navigator.userAgent.search("Macintosh")!=-1)
wnos="6";if(navigator.userAgent.search("Mac_PowerPC")!=-1)
wnos="6";if(navigator.userAgent.search("Windows NT 5.2")!=-1)
wnos="7";if(navigator.userAgent.search("Windows NT 6.0")!=-1)
wnos="8";if(navigator.userAgent.search("SymbianOS")!=-1)
wnos="9";if(navigator.userAgent.search("iPhone")!=-1)
wnos="11";if(navigator.userAgent.search("PLAYSTATION")!=-1)
wnos="12";if(navigator.userAgent.search("Windows NT 6.1")!=-1)
wnos="13";if(wnos=="99")
wnoek="&agent="+escape(wos);var wobr=escape(navigator.userAgent);var wnobr="99";if(navigator.userAgent.search("MSIE 6")!=-1)
wnobr="16";if(navigator.userAgent.search("MSIE 7")!=-1)
wnobr="17";if(navigator.userAgent.search("MSIE 8")!=-1)
wnobr="18";if(navigator.userAgent.search("Firefox/3")!=-1)
wnobr="33";if(navigator.userAgent.search("Firefox/2")!=-1)
wnobr="32";if(navigator.userAgent.search("Firefox/1")!=-1)
wnobr="31";if(navigator.userAgent.search("Netscape")!=-1)
wnobr="2";if(navigator.userAgent.search("Opera")!=-1)
wnobr="4";if(navigator.userAgent.search("Safari")!=-1)
wnobr="5";if(navigator.userAgent.search("Konqueror")!=-1)
wnobr="6";if(navigator.userAgent.search("Chrome")!=-1)
wnobr="7";if(navigator.userAgent.search("Nokia")!=-1)
wnobr="8";if(wnobr=="99")
wnoek="&agent="+escape(wobr);var womkelime="";var wokelime="";var woskelime="";var woengine="";var womtart="";var wosstart="0";var wostart="";if(document.referrer)
{if(document.referrer.search(".google.")!=-1)
{if(document.referrer.search("&q=")!=-1)
womkelime=document.referrer.split("&q=");if(document.referrer.search("\\?q=")!=-1)
womkelime=document.referrer.split("?q=");if(womkelime[1])
{wokelime=womkelime[1].split("&");woengine="Google";}
if(document.referrer.search("&start=")!=-1)
{womstart=document.referrer.split("&start=");if(womstart[1])
wostart=womstart[1].split("&");if(wostart[0])
wosstart=wostart[0];}
else
{if(document.referrer.search("&cd=")!=-1)
{womstart=document.referrer.split("&cd=");if(womstart[1])
wostart=womstart[1].split("&");if(wostart[0])
wosstart=wostart[0];}}}
if(document.referrer.search("search.live")!=-1)
{womkelime=document.referrer.split("q=");if(womkelime[1])
{wokelime=womkelime[1].split("&");woengine="Live";}}
if(document.referrer.search(".bing.com")!=-1)
{womkelime=document.referrer.split("q=");if(womkelime[1])
{wokelime=womkelime[1].split("&");woengine="Live";}
if(document.referrer.search("&first=")!=-1)
{womstart=document.referrer.split("&first=");if(womstart[1])
wostart=womstart[1].split("&");if(wostart[0])
wosstart=wostart[0];}}
if(document.referrer.search("search.msn")!=-1)
{womkelime=document.referrer.split("q=");if(womkelime[1])
{wokelime=womkelime[1].split("&");woengine="Msn";}}
if(document.referrer.search("search.yahoo")!=-1)
{womkelime=document.referrer.split("p=");if(womkelime[1])
{wokelime=womkelime[1].split("&");woengine="Yahoo";}
if(document.referrer.search("&b=")!=-1)
{womstart=document.referrer.split("&b=");if(womstart[1])
wostart=womstart[1].split("&");if(wostart[0])
wosstart=wostart[0];}}
if(!woengine)
if(document.referrer.search(".google.")!=-1)
{womkelime=document.referrer.split("prev=/images%3Fq%3D");if(womkelime[1])
{wokelime=womkelime[1].split("%26");woengine="Google";if(wokelime[0])
{wokelime[0]=unescape(wokelime[0]);if(wosstart>0)wosstart=10*Math.floor((wosstart/18));}}}
if(wokelime[0])
woskelime=wokelime[0];}
var wlink='<img src="http://46.45.138.126/analiz.gif?';if(wouser)wlink=wlink+'user='+wouser;if(kokwbs!="ccno")wlink=wlink+'&wnos='+wnos;if(kokwbs!="ccno")wlink=wlink+'&wnobr='+wnobr;if(kokwbs!="ccno")wlink=wlink+'&k='+kokwbs;if(woengine&&kokwbs!="ccno")wlink=wlink+'&engine='+woengine;if(wnoek&&kokwbs!="ccno")wlink=wlink+wnoek;if(woskelime&&kokwbs!="ccno")wlink=wlink+'&kelime='+woskelime;if(document.referrer&&kokwbs!="ccno")wlink=wlink+'&referer='+escape(document.referrer);if(t)wlink=wlink+'&l='+t;if(screen.width&&kokwbs!="ccno")wlink=wlink+'&w='+screen.width;if(screen.height&&kokwbs!="ccno")wlink=wlink+'&h='+screen.height;if(wosstart&&woengine)wlink=wlink+'&s='+wosstart;if(wo_is_new_user)wlink=wlink+'&n='+wo_is_new_user;if(wo_v_duration)wlink=wlink+'&d='+wo_v_duration;wlink=wlink+'&ce='+wocookieEnabled;var r=Math.random();wlink=wlink+'&r='+r;if(!document.getElementById('wobsbn'))
{document.write("<span id=wobsbn></span>");wlink=wlink+'&ns=1';}
else
wlink=wlink+'&ns=0';wlink=wlink+'" border=0>';document.write(""+wlink+"");var wsoBanners=[['<a target=_blank href=http://www.onlinewebstat.com/?user='+wouser+'><img src=http://sayac.onlinewebstats.com/logo/c.gif border=0></a>','2000'],['<a target=_blank href=http://www.onlinewebstat.com/?user='+wouser+'><img src=http://sayac.onlinewebstats.com/logo/c.gif border=0>','15000']];var wsIe=false;if(document.all){wsIe=true;}
var woswBIx=0;function getobject(obj){if(document.getElementById)
return document.getElementById(obj)
else if(document.all)
return document.all[obj]}
function woswsBC(){var hSt=wsoBanners[woswBIx][0];getobject("wobsbn").innerHTML=hSt;if(woswBIx<wsoBanners.length-1)woswBIx++;else woswBIx=0;clearInterval(wosbid);wosbid=setInterval("woswsBC()",wsoBanners[woswBIx][1]);}
var wosbid="";var wokkwbs="";if(document.getElementById('wobsbn'))wosbid=setInterval("woswsBC()",2000);}
catch(e){var o_c_wouser="wo_test";if(wouser!="")o_c_wouser=wouser;document.write("<img src='http://46.45.138.126/analiz.php3?user="+o_c_wouser+"&e="+e.description+"'>");}
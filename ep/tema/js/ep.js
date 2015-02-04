// EPfarki v2.0 | epfarki.com
var base = 'http://epfarki.com';    
    
// https://github.com/beezee/djax
(function($,exports){'use strict';$.fn.djax=function(selector,exceptions,replaceBlockWithFunc){if(!history.pushState){return $(this);}
var self=this,blockSelector=selector,excludes=(exceptions&&exceptions.length)?exceptions:[],replaceBlockWith=(replaceBlockWithFunc)?replaceBlockWithFunc:$.fn.replaceWith,djaxing=false;window.history.replaceState({'url':window.location.href,'title':$('title').text()},$('title').text(),window.location.href);self.clearDjaxing=function(){self.djaxing=false;}
self.attachClick=function(element,event){var link=$(element),exception=false;$.each(excludes,function(index,exclusion){if(link.attr('href').indexOf(exclusion)!==-1){exception=true;}
if(window.location.href.indexOf(exclusion)!==-1){exception=true;}});if(exception){return $(element);}
event.preventDefault();if(self.djaxing){setTimeout(self.clearDjaxing,1000);return $(element);}
$(window).trigger('djaxClick',[element]);self.reqUrl=link.attr('href');self.triggered=false;self.navigate(link.attr('href'),true);};self.navigate=function(url,add){var blocks=$(blockSelector);self.djaxing=true;$(window).trigger('djaxLoading',[{'url':url}]);var replaceBlocks=function(response){if(url!==self.reqUrl){self.navigate(self.reqUrl,false);return true;}
var result=$(response),newBlocks=$(result).find(blockSelector);if(add){window.history.pushState({'url':url,'title':$(result).filter('title').text()},$(result).filter('title').text(),url);}
$('title').text($(result).filter('title').text());blocks.each(function(){var id='#'+$(this).attr('id'),newBlock=newBlocks.filter(id),block=$(this);$('a',newBlock).filter(function(){return this.hostname===location.hostname;}).addClass('dJAX_internal').on('click',function(event){return self.attachClick(this,event);});if(newBlock.length){if(block.html()!==newBlock.html()){replaceBlockWith.call(block,newBlock);}}else{block.remove();}});$.each(newBlocks,function(){var newBlock=$(this),id='#'+$(this).attr('id'),$previousSibling;if(!$(id).length){$previousSibling=$(result).find(id).prev();if($previousSibling.length){newBlock.insertAfter('#'+$previousSibling.attr('id'));}else{newBlock.prependTo('#'+newBlock.parent().attr('id'));}}
$('a',newBlock).filter(function(){return this.hostname===location.hostname;}).addClass('dJAX_internal').on('click',function(event){return self.attachClick(this,event);});});if(!self.triggered){$(window).trigger('djaxLoad',[{'url':url,'title':$(result).filter('title').text(),'response':response}]);self.triggered=true;self.djaxing=false;}};$.get(url,function(response){replaceBlocks(response);}).error(function(response){console.log('error',response);replaceBlocks(response['responseText']);});};$(this).find('a').filter(function(){return this.hostname===location.hostname;}).addClass('dJAX_internal').on('click',function(event){return self.attachClick(this,event);});$(window).bind('popstate',function(event){self.triggered=false;if(event.originalEvent.state){self.reqUrl=event.originalEvent.state.url;self.navigate(event.originalEvent.state.url,false);}});};}(jQuery,window));
    
// yeni sayfa
$('body').on('click', 'a[target^=_blank], a[rel^=external], area[target^=_blank]', function(e) {  
    window.open($(this).attr('href'));
    return false;
});  
        
// sayfa yenile
$('body').on('click', 'a[target^=sayfayenile], a[rel^=appendix], area[target^=sayfayenile]', function(e) { 
    window.location= $(this).attr('href');
    return false;
});
     
// tepe sayfa
$('body').on('click', 'a[class^=dJAX_internal]', function(e) {
    $(window).scrollTop(0);
    e.preventDefault();
}); 

// djax
jQuery(document).ready(function($) {
  $('body').djax('.updatable', ['git/?url=', 'ep/', 'hizmet/', '?rastgele', 'sitemap', '#tab', 'wp-admin', 'wp-login']);
});

// yukleyici
$.ajaxSetup({   
	beforeSend: function (XMLHttpRequest) {
     	$("#yukleyici").html('<img title="yukleniyor" src="//epfarki.com/ep/tema/res/yukleniyor.gif" alt="reklam-ver">'); 
	},
	complete: function (XMLHttpRequest, textStatus) {
 	    $("#yukleyici").html('');      
	} 
});        

 // tab menü
$(document).ready(function() {
	//Default Action 1
	$(".tab_content").hide(); //Hide all content
	$("ul.tabs li:first").addClass("active").show(); //Activate first tab
	$(".tab_content:first").show(); //Show first tab content
	
	//On Click Event 1
	$("ul.tabs li").click(function() {
		$("ul.tabs li").removeClass("active"); //Remove any "active" class
		$(this).addClass("active"); //Add "active" class to selected tab
		$(".tab_content").hide(); //Hide all tab content
		var activeTab = $(this).find("a").attr("href"); //Find the rel attribute value to identify the active tab + content
		$(activeTab).fadeIn(); //Fade in the active content
		return false;
	});
});

// üst menü - http://micjamking.github.io/Menutron/
(function(a){a.fn.menutron=function(b){var c={maxScreenWidth:745,menuTitle:"Ana Menü"};var b=a.extend(c,b);return this.each(function(){var i=a(this).children();var f=a("<select>").css("display","none");var h=a("<optgroup>").css("display","none");g();function g(){e();d();j()}function e(){if(a(window).width()<b.maxScreenWidth){a(f).css("display","inline-block");a(i).css("display","none")}else{a(f).css("display","none");a(i).css("display","block")}}function d(){a(i).children().each(function(){if(a(this).get(0).tagName!=="DT"){if(a(this).find("ul,ol,dl").length){a(h).attr("label",a(this).children(":first").text());var l=a("<option>").text(a(this).children(":first").text());var m=a(this).children("a").attr("href");a(l).attr("value",m);a(l).appendTo(h);var n=a(this).children().not(":first");a(n).children().each(function(){var o=a("<option>").text(a(this).text());var p=a(this).children("a").attr("href");a(o).attr("value",p);a(o).appendTo(h)});console.log(h);a(h).appendTo(f)}else{var l=a("<option>").text(a(this).text());var m=a(this).children("a").attr("href");a(l).attr("value",m);a(l).appendTo(f)}}});var k='<option selected="selected" value>'+b.menuTitle+"</option>";a(f).prepend(k);f.appendTo(a(i).parent());f.change(function(){if(a(this).val()!=""){window.location.href=a(this).val()}})}function j(){a(window).resize(function(){e()})}})}})(jQuery);

		$(function(){
			$(".menunav, menunav").menutron();
		});


//	Slimbox v2.05
(function(w){var E=w(window),u,f,F=-1,n,x,D,v,y,L,r,m=!window.XMLHttpRequest,s=[],l=document.documentElement,k={},t=new Image(),J=new Image(),H,a,g,p,I,d,G,c,A,K;w(function(){w("body").append(w([H=w('<div id="lbOverlay" />').click(C)[0],a=w('<div id="lbCenter" />')[0],G=w('<div id="lbBottomContainer" />')[0]]).css("display","none"));g=w('<div id="lbImage" />').appendTo(a).append(p=w('<div style="position: relative;" />').append([I=w('<a id="lbPrevLink" href="#" />').click(B)[0],d=w('<a id="lbNextLink" href="#" />').click(e)[0]])[0])[0];c=w('<div id="lbBottom" />').appendTo(G).append([w('<a id="lbCloseLink" href="#" />').click(C)[0],A=w('<div id="lbCaption" />')[0],K=w('<div id="lbNumber" />')[0],w('<div style="clear: both;" />')[0]])[0]});w.slimbox=function(O,N,M){u=w.extend({loop:false,overlayOpacity:0.8,overlayFadeDuration:400,resizeDuration:400,resizeEasing:"swing",initialWidth:250,initialHeight:250,imageFadeDuration:400,captionAnimationDuration:400,counterText:"Image {x} of {y}",closeKeys:[27,88,67],previousKeys:[37,80],nextKeys:[39,78]},M);if(typeof O=="string"){O=[[O,N]];N=0}y=E.scrollTop()+(E.height()/2);L=u.initialWidth;r=u.initialHeight;w(a).css({top:Math.max(0,y-(r/2)),width:L,height:r,marginLeft:-L/2}).show();v=m||(H.currentStyle&&(H.currentStyle.position!="fixed"));if(v){H.style.position="absolute"}w(H).css("opacity",u.overlayOpacity).fadeIn(u.overlayFadeDuration);z();j(1);f=O;u.loop=u.loop&&(f.length>1);return b(N)};w.fn.slimbox=function(M,P,O){P=P||function(Q){return[Q.href,Q.title]};O=O||function(){return true};var N=this;return N.unbind("click").click(function(){var S=this,U=0,T,Q=0,R;T=w.grep(N,function(W,V){return O.call(S,W,V)});for(R=T.length;Q<R;++Q){if(T[Q]==S){U=Q}T[Q]=P(T[Q],Q)}return w.slimbox(T,U,M)})};function z(){var N=E.scrollLeft(),M=E.width();w([a,G]).css("left",N+(M/2));if(v){w(H).css({left:N,top:E.scrollTop(),width:M,height:E.height()})}}function j(M){if(M){w("object").add(m?"select":"embed").each(function(O,P){s[O]=[P,P.style.visibility];P.style.visibility="hidden"})}else{w.each(s,function(O,P){P[0].style.visibility=P[1]});s=[]}var N=M?"bind":"unbind";E[N]("scroll resize",z);w(document)[N]("keydown",o)}function o(O){var N=O.which,M=w.inArray;return(M(N,u.closeKeys)>=0)?C():(M(N,u.nextKeys)>=0)?e():(M(N,u.previousKeys)>=0)?B():null}function B(){return b(x)}function e(){return b(D)}function b(M){if(M>=0){F=M;n=f[F][0];x=(F||(u.loop?f.length:0))-1;D=((F+1)%f.length)||(u.loop?0:-1);q();a.className="lbLoading";k=new Image();k.onload=i;k.src=n}return false}function i(){a.className="";w(g).css({backgroundImage:"url("+n+")",visibility:"hidden",display:""});w(p).width(k.width);w([p,I,d]).height(k.height);w(A).html(f[F][1]||"");w(K).html((((f.length>1)&&u.counterText)||"").replace(/{x}/,F+1).replace(/{y}/,f.length));if(x>=0){t.src=f[x][0]}if(D>=0){J.src=f[D][0]}L=g.offsetWidth;r=g.offsetHeight;var M=Math.max(0,y-(r/2));if(a.offsetHeight!=r){w(a).animate({height:r,top:M},u.resizeDuration,u.resizeEasing)}if(a.offsetWidth!=L){w(a).animate({width:L,marginLeft:-L/2},u.resizeDuration,u.resizeEasing)}w(a).queue(function(){w(G).css({width:L,top:M+r,marginLeft:-L/2,visibility:"hidden",display:""});w(g).css({display:"none",visibility:"",opacity:""}).fadeIn(u.imageFadeDuration,h)})}function h(){if(x>=0){w(I).show()}if(D>=0){w(d).show()}w(c).css("marginTop",-c.offsetHeight).animate({marginTop:0},u.captionAnimationDuration);G.style.visibility=""}function q(){k.onload=null;k.src=t.src=J.src=n;w([a,g,c]).stop(true);w([I,d,g,G]).hide()}function C(){if(F>=0){q();F=x=D=-1;w(a).hide();w(H).stop().fadeOut(u.overlayFadeDuration,j)}return false}})(jQuery);

if (!/android|iphone|ipod|series60|symbian|windows ce|blackberry/i.test(navigator.userAgent)) {
	jQuery(function($) {
		$("a[class^='lightbox']").slimbox({/* Put custom options here */}, null, function(el) {
			return (this == el) || ((this.rel.length > 8) && (this.rel == el.rel));
		});
	});
}
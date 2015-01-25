// ERROR
var error = {
	'#CTEMP' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#resize' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#redo' : function(element){
		element.onclick = function(){
			document.getElementById('redo').style.display='none';
			new Effect.Appear('enviando',{duration: .5});
		}
	}
};

// Preferencias (tinyurl)
var _pref = {
	'a#pclosed' : function(element){
		element.onclick = function(){
			new Effect.SlideDown('pref-panel',{duration: .3});
			Effect.Fade(this,{duration: 0})
			Effect.Appear('popen',{duration: .2});
		}
	},
	'a#popen' : function(element){
		element.onclick = function(){
			new Effect.SlideUp('pref-panel',{duration: .3});
			Effect.Fade(this,{duration: 0})
			Effect.Appear('pclosed',{duration: 0});
		}
	},
	'input#cortarurl' : function(element){
		element.onclick = function(){
			new Effect.Highlight('pref-panel',{duration: .5, endcolor: '#F7F7F7'});
			var checked = this.checked? '1':'0';
    		var url = 'js/pref.php?url='+checked;
    		new Ajax.Request(url, {method: 'get'});
		}
	},
	'a#savepref' : function(element){
		element.onclick = function(){
			new Effect.SlideUp('pref-panel',{duration: .3});
			Effect.Fade('popen',{duration: 0})
			Effect.Appear('pclosed',{duration: 0});
		}
	}
};

// Solo para el upload
var _up = {
	'a.remota' : function(element){
		element.onclick = function(){
			new Effect.Appear('subir_remota',{duration: .5});
			Effect.Fade('subir_local', {duration: 0});
			new Effect.Fade(this,{duration: 0});
			Effect.Appear('linklocal',{duration: 0});
			new Effect.Shake('chooseremota');
		}
	},
	'a.local' : function(element){
		element.onclick = function(){
			new Effect.Appear('subir_local',{duration: .5});
			Effect.Fade('subir_remota', {duration: 0});
			new Effect.Fade(this,{duration: 0});
			Effect.Appear('linkremota',{duration: 0});
			new Effect.Shake('chooselocal');
		}
	},
	'#contenedorupload' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'a#rclosed' : function(element){
		element.onclick = function(){
			new Effect.Fade(this,{duration: 0});
			Effect.Appear('ropen', {duration: 0});
			Effect.Appear('cajonred', {duration: 0});
			Effect.SlideDown('redimensionar-borde', {duration: .5}, {delay: 0});
		}
	},
	'a#ropen' : function(element){
		element.onclick = function(){
			new Effect.Fade(this,{duration: 0});
			Effect.Appear('rclosed', {duration: 0});
			Effect.SlideUp('redimensionar-borde', {duration: .5});
		}
	},
	'#resize' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#subir' : function(element){
		element.onclick = function(){
			document.getElementById('subir').style.display='none';
			new Effect.Appear('enviando',{duration: .5});
		}
	}
};
		
// Solo para el post-proceso
var _proceso = {
	'a#sharing' : function(element){
		element.onclick = function(){
			new Effect.ScrollTo('share', {offset: -50});
		}
	}
};

// Solo para el ver
var _ver = {
	'a#sharing' : function(element){
		element.onclick = function(){
			new Effect.BlindDown('share');
			Effect.Fade(this, {duration: 0});
			Effect.Appear('sharing-close', {duration: 0});
			new Effect.ScrollTo('share', {offset: -24});
		}
	},
	'a#sharing-close' : function(element){
		element.onclick = function(){
			new Effect.BlindUp('share');
			new Effect.Fade(this, {duration: 0});
			Effect.Appear('sharing', {duration: 0});			
		}
	}
};

// Los Codigos
var _codes = {
	'#C1' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#C2' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#C3' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#C4' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	},
	'#C5' : function(element){
		element.onclick = function(){
			new Effect.Highlight(this,{duration: .5});
		}
	}	
};


// Los enlaces sociales
var _social = {
	'a#delicious' : function(element){
		element.onmouseover = function(){
			new Effect.Appear('d-delicious', {duration:.2});
			new Effect.Opacity(this, {duration:0, from:1, to:.6});
		}
		element.onmouseout = function(){
			new Effect.Fade('d-delicious', {duration:0});
			new Effect.Opacity(this, {duration:0, from:.8, to:1});
		}
	},
	'a#facebook' : function(element){
		element.onmouseover = function(){
			new Effect.Appear('d-facebook', {duration:.2});
			new Effect.Opacity(this, {duration:0, from:1, to:.6});
		}
		element.onmouseout = function(){
			new Effect.Fade('d-facebook', {duration:0});
			new Effect.Opacity(this, {duration:0, from:.8, to:1});
		}
	},
	'a#google' : function(element){
		element.onmouseover = function(){
			new Effect.Appear('d-google', {duration:.2});
			new Effect.Opacity(this, {duration:0, from:1, to:.6});
		}
		element.onmouseout = function(){
			new Effect.Fade('d-google', {duration:0});
			new Effect.Opacity(this, {duration:0, from:.8, to:1});
		}
	},
	'a#visualizeus' : function(element){
		element.onmouseover = function(){
			new Effect.Appear('d-visualizeus', {duration:.2});
			new Effect.Opacity(this, {duration:0, from:1, to:.6});
		}
		element.onmouseout = function(){
			new Effect.Fade('d-visualizeus', {duration:0});
			new Effect.Opacity(this, {duration:0, from:.8, to:1});
		}
	},
	'a#tumblr' : function(element){
		element.onmouseover = function(){
			new Effect.Appear('d-tumblr', {duration:.2});
			new Effect.Opacity(this, {duration:0, from:1, to:.6});
		}
		element.onmouseout = function(){
			new Effect.Fade('d-tumblr', {duration:0});
			new Effect.Opacity(this, {duration:0, from:.8, to:1});
		}
	},
	'a#twitter' : function(element){
		element.onmouseover = function(){
			new Effect.Appear('d-twitter', {duration:.2});
			new Effect.Opacity(this, {duration:0, from:1, to:.6});
		}
		element.onmouseout = function(){
			new Effect.Fade('d-twitter', {duration:0});
			new Effect.Opacity(this, {duration:0, from:.8, to:1});
		}
	}
};
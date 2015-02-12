<?
require('engine.php');
?>
<?
require('../../hizmet/tema/menu1.php');
?>

<meta name="description" content="Resim yükleme servisi | Datarar | Birazcık Farklı" />
<meta name="keywords" content="datarar, ep, farki, evrensel, paylasim, evrenselpaylasim, farkı, farklı, farkli, fark, " />
<title><? echo $titulo.' '.APP_NAME;?> - <?=TAG_LINE;?></title>

<link href="<?=URL_SCRIPT;?>estilo.css" rel="stylesheet" type="text/css" />
<!--[if lt IE 7.]>
<script defer type="text/javascript" src="<?=PATH_SCRIPT;?>js/pngfix.js"></script>
<![endif]-->

<script type="text/javascript" src="<?=PATH_SCRIPT;?>js/prototype.js"></script>
<script type="text/javascript" src="<?=PATH_SCRIPT;?>js/scriptaculous.js"></script>
<script type="text/javascript" src="<?=PATH_SCRIPT;?>js/behaviour.js"></script>
<script type="text/javascript" src="<?=PATH_SCRIPT;?>js/rules.js"></script>

<script type="text/javascript">
    // <![CDATA[
    <? if ($spit==true) { ?>Behaviour.register(error);
    <? } ?>
    <? if ($modo==1 || $modo=='rr') { ?>Behaviour.register(_up);
    <? } ?>
    <? if ($modo==3) { ?>Behaviour.register(_proceso);
    <? } ?>
    <? if ($modo==2) { ?>Behaviour.register(_ver);
    <? } ?>
    <? if ($modo==2 || $modo==3) { ?>Behaviour.register(_social);
    <? } ?>
    <? if ($cut_url==true && $cut_url_user==true && $modo==1) { ?>
    Behaviour.register(_pref);
    <? } ?>
    // ]]>
</script>
<style>
    #top {
        background: none;
        border-color: #111;
        height: 30px;
        border-bottom: none;
    }
</style>
</head>
<body>

<div id="top">
    <div id="logo">
        <a href="<?=URL_SCRIPT;?>"><img src="<?=PATH_SCRIPT;?>site-img/logo.png" alt="<?=APP_NAME;?>" /></a>
    </div>
    <div id="tagline"><?=TAG_LINE;?></div><div id="limite">JPG PNG BMP GIF <span>Max.<?=$max_mb;?>Mb</span></div>
</div>

<? if ($spit==true) { ?>
    <h1 id="error"><span><?=$errormsg?></span></h1>
<? } ?>

<? if ($modo==1) { ?>
<div id="contenido">

    <div id="selector_up">
        <div id="tab_container"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>>
            <div class="btn_local"><a class="local" id="linklocal" style="display: none;"></a></div>
            <div class="btn_remoto"><a class="remota" id="linkremota"></a></div>
        </div>
        <? if ($cut_url==true && $cut_url_user==true) { ?><div id="preferencias"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><a id="pclosed"><span><?=TXT_PREFERENCES;?></span></a><a id="popen" style="display:none;"><span><?=TXT_PREFERENCES;?></span></a></div><? } ?>
    </div> <!-- selector -->

    <form id="form_up" enctype="multipart/form-data" action="<?=PATH_SCRIPT;?>" method="post">

        <? if ($cut_url==true && $cut_url_user==true) { ?>
            <div id="pref-panel" style="display: none;"><div id="cajon-pref"><p id="prefurl"><input name="" type="checkbox" id="cortarurl" value="" <? if(isset($_COOKIE['prefurl'])) { ?>checked="checked"<? } ?> /><label for="cortarurl"> <?=TXT_TINYURL;?></label></p><div id="save"><a id="savepref" /><?=TXT_CLOSE_PREF;?></a></div></div></div>
        <? } ?>

        <div id="contenedorupload">
            <div id="subir_local">
                <h2 id="chooselocal"><?=TXT_LOCAL;?></h2>
                <div class="inputs"><input name="fileup" type="file" size="60" id="localUP" onclick="javascript:document.getElementById('remotaUP').value = '';"/></div>
            </div>
            <div id="subir_remota" style="display: none;">
                <h2 id="chooseremota"><?=TXT_REMOTE;?></h2>
                <div class="inputs"><input name="remota" size="60" id="remotaUP" onclick="javascript:document.getElementById('localUP').value = '';"/></div>
            </div>
        </div>

        <div id="redimensionar">
            <div id="redimensionar_cajatitulo">
                <div id="redimensionar_titulo">
                    <div id="boton_redimensionar"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><span><a id="rclosed"></a><a id="ropen" style="display: none;"></a></span></div>
                    <div id="red_mensaje"><span id="red1"><?=RESIZE_DSC;?></span><span id="red2" style="display: none;"></span></div>
                </div>
            </div>
            <div id="redimensionar-borde" style="display: none;">
                <div id="cajonred">
                    <div id="ancho_deseado"><?=RESIZE_WIDTH;?> <span><?=RESIZE_PIXELS;?></span></div>
                    <input name="resize" id="resize"/>
                    <div id="kepp"><?=RESIZE_KEEP;?></div>
                </div>
            </div>
        </div>

        <div id="boton_subir">
            <input type="image" src="<?=PATH_SCRIPT;?>site-img/btn_subir<? if (isset($lang)) { echo '_'.$lang; } ?>.gif" id="subir"/>
            <div id="enviando" style="display: none;"><span id="momentito"><?=TXT_UPLOADING;?></span></div>
        </div>

    </form>

    <? } ?>
    <? if ($modo=='rr') { ?>
        <!-- SUBIR -->

        <div id="imagenfull"><img src="<?=$urlrez?>" alt="<?=$urlrez?>" /></div>

        <form enctype="multipart/form-data" action="<?=PATH_SCRIPT;?>" method="post">

            <? if ($cut_url==true && $cut_url_user==true) { ?>
                <div id="pref-panel" style="display: none;"><div id="cajon-pref"><p id="prefurl"><input name="" type="checkbox" id="cortarurl" value="" <? if(isset($_COOKIE['prefurl'])) { ?>checked="checked"<? } ?> /><label for="cortarurl"> <?=TXT_TINYURL;?></label></p><div id="save"><a id="savepref" /><?=TXT_CLOSE_PREF;?></a></div></div></div>
            <? } ?>

            <div id="contenedorupload">
                <div id="subir_remota">
                    <h2 id="chooseremota"><?=TXT_REMOTE_RR;?></h2>
                    <div class="inputs"><input value="<?=$urlrez?>" name="remota" size="60" id="remotaUP" onclick="javascript:document.getElementById('localUP').value = '';"/></div>
                </div>
            </div>

            <div id="redimensionar">
                <div id="redimensionar_cajatitulo">
                    <div id="redimensionar_titulo">
                        <div id="boton_redimensionar"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><span><a id="rclosed"></a><a id="ropen" style="display: none;"></a></span></div>
                        <div id="red_mensaje"><span id="red1"><?=RESIZE_DSC;?></span><span id="red2" style="display: none;"></span></div>
                    </div>
                </div>
                <div id="redimensionar-borde" style="display: none;">
                    <div id="cajonred">
                        <div id="ancho_deseado"><?=RESIZE_WIDTH;?> <span><?=RESIZE_PIXELS;?></span></div>
                        <input name="resize" id="resize"/>
                        <div id="kepp"><?=RESIZE_KEEP;?></div>
                    </div>
                </div>
            </div>

            <div id="boton_subir">
                <input type="image" src="/site-img/btn_subir<? if (isset($lang)) { echo '_'.$lang; } ?>.gif" id="subir"/>
                <div id="enviando" style="display: none;"><span id="momentito"><?=TXT_UPLOADING;?></span></div>
            </div>

        </form>
        <!-- contenido --><? } // MODO RR ?>
    <? if ($modo==4) { ?>
        <div id="subiste-viendo"><h1><?=TXT_TEMP_SAVE;?></h1></div>

        <form enctype="multipart/form-data" action="<?=PATH_SCRIPT;?>" method="post">
            <input name="remota" type="hidden" value="<?=$URLrdn?>" />
            <div id="redimensionar_cajatitulo" class="denuevo">
                <div id="redimensionar_titulo"><div id="boton_redimensionar"<? if (isset($lang)) { echo ' class="'.$lang.'"'; } ?>><span><a id="ropen"></a></span></div>
                    <div id="red_mensaje"><span id="red1"><?=RESIZE_DSC;?></span><span id="red2" style="display: none;"></span></div>
                </div>
            </div>
            <div id="redimensionar">
                <div id="redimensionar-borde">
                    <div id="cajonred">
                        <div id="ancho_deseado"><?=RESIZE_WIDTH;?> <span><?=RESIZE_PIXELS;?></span></div>
                        <input name="resize" id="resize"/>
                        <div id="kepp"><?=RESIZE_KEEP;?></div>
                    </div>
                    <div id="boton_redo">
                        <input type="image" src="site-img/btn_reintentar<? if (isset($lang)) { echo '_'.$lang; } ?>.gif" id="redo" />
                        <div id="enviando" style="display: none;"><span id="momentito"><?=TXT_REZ_AGAIN;?></span></div>
                    </div>
                </div>
            </div>
        </form>

        <div id="share">
            <h2><?=TXT_TEMP_PLACE;?></h2>
            <div class="ctninput"><div class="codex">URL:</div><div class="inputshare"><input id="CTEMP" value="<?=$URLrdn;?>" /></div></div>
        </div>
    <? } // IF 4 ?>
    <? if ($modo==5) { ?>
    <div id="contenido-statico">
        <h1 id="titular"><?=$h1?></h1>
        <? if ($page=='400' || $page=='401' || $page=='403' || $page=='404' || $page=='500' || $page=='up' || $page=='up/temp' || $page=='up/working' || $page=='images'|| $page=='generico') { ?>
            <p align="center">
                <?=$explained?>
            </p>
        <? }
        } ?>

        <? if ($modo==2 || $modo==3) { // EL IF 2-3
        if (isset($v)) {
            $quehace = TXT_SEEING;
        } else {
            if ($red==1) {
                $retxt = ' '.TXT_AND_RESIZE;
            }
            $quehace = TXT_DID.$retxt;
        }
        $mensaje = $quehace.' <a href="'.PATH_SCRIPT.DIR_IM.$folhost.$name.'">'.$name.'</a> ('.$tamano_kb.' KB - '.$ancho.'x'.$alto.'px)'.$colita;

        ?>
        <div id="subiste-viendo"><h1><?=$mensaje?></h1></div>

        <div id="contenido">
            <div id="tools"><div id="fullsize"<? if ($ancho<=900) { echo ' style="display: none; "'; }?>><a href="<?=PATH_SCRIPT.DIR_IM.$folhost.$name?>" title="<?=$ancho?>x<?=$alto?>"><?=FULL_SIZE;?></a></div><div id="sharethis"><a id="sharing"><?=SHARE;?></a><a id="sharing-close" style="display: none;"><?=SHARE;?></a></div></div>
            <div id="imagen"><a href="<?=PATH_SCRIPT.DIR_IM.$folhost.$name?>"><img src="<?=PATH_SCRIPT.DIR_IM.$folhost.$name?>" alt="" <? if ($ancho>=900) { echo 'width="900" '; } ?>/></a></div>

            <div id="share" <? if (isset($v) && $v!=='rec.php') { ?>style="display: none;"<? } ?>>

                <div id="mostrar_mas_enlaceview">
                    <h2 id="mev"><?=SHARE_THUMB_VIEWER;?></h2>
                    <div class="ctninput">
                        <div class="codex">HTML:</div><div class="inputshare">
                            <input tabindex="1" value="&lt;a href=&quot;<?=$URLvim?>&quot;&gt;&lt;img src=&quot;<?=$URLthm?>&quot; border=&quot;0&quot;&gt;&lt;/a&gt;" onclick="this.focus();this.select();" />
                        </div>
                    </div>
                    <div class="ctninput">
                        <div class="codex"><?=SHARE_FORUMS;?>:</div><div class="inputshare">
                            <input tabindex="2" value="[url=<?=$URLvim?>][img]<?=$URLthm?>[/img][/url]" onclick="this.focus();this.select();" />
                        </div>
                    </div>
                </div>

                <div id="mostrar_directa">
                    <h2 id="md"><?=SHARE_DIRECT;?></h2>
                    <div class="ctninput">
                        <div class="codex"><a href="<?=$URLvim?>" target="_blank"><?=SHARE_VIEWER;?>:</a></div>
                        <div class="inputshare"><input tabindex="3" value="<?=$URLvim?>" onclick="this.focus();this.select();" /></div>
                    </div>
                    <div class="ctninput">
                        <div class="codex"><?=SHARE_FORUMS;?>:</div>
                        <div class="inputshare"><input tabindex="4" value="[img]<?=$URLimg?>[/img]" onclick="this.focus();this.select();" /></div>
                    </div>
                    <div class="ctninput">
                        <div class="codex"><a href="<?=$URLimg?>" target="_blank">URL:</a></div>
                        <div class="inputshare"><input tabindex="5"value="<?=$URLimg?>" onclick="this.focus();this.select();" /></div>
                    </div>
                    <? if (isset($ShortURL) && !empty($ShortURL)) { ?>
                        <div class="ctninput">
                            <div class="codex"><a href="<?=$ShortURL?>" target="_blank"><?=$tiny_service;?>:</a></div>
                            <div class="inputshare"><input id="tinyurl" tabindex="6" value="<?=$ShortURL?>" onclick="this.focus();this.select();" /></div>
                        </div>
                    <? } ?>
                </div>

                <div id="mostrar_social">
                    <h2 id="mes"><?=SHARE_SOCIAL;?></h2>
                    <div class="ctninput-social">
                        <div class="codex"><?=SHARE_NETWORKS;?>:</div>
                        <a href="http://del.icio.us/post?url=<?=$URLshr?>" id="delicious" target="_blank"></a>
                        <a href="http://www.facebook.com/share.php?u=<?=$URLshr?>" id="facebook" target="_blank"></a>
                        <a href="http://www.google.com/bookmarks/mark?op=edit&amp;bkmk=<?=$URLshr?>" id="google" target="_blank"></a>
                        <a href="http://www.tumblr.com/share?v=3&amp;u=<?=$eu_img?>" id="tumblr" target="_blank"></a>
                        <a href="http://twitter.com/home?status=viendo%20<? echo cortar_url($URLshr); ?>" id="twitter" target="_blank"></a>
                        <a href="http://vi.sualize.us/post/?popup=1&amp;address=<?=$eu_img?>&amp;referenceURL=<?=URL_SCRIPT;?>" id="visualizeus" target="_blank"></a>
                        <div id="quecosa">
                            <span id="d-delicious" style="display: none;">del.icio.us</span>
                            <span id="d-facebook" style="display: none;">facebook</span>
                            <span id="d-google" style="display: none;">Google Bookmarks</span>
                            <span id="d-tumblr" style="display: none;">tumblr</span>
                            <span id="d-twitter" style="display: none;"><?=SHARE_TWITTER;?></span>
                            <span id="d-visualizeus" style="display: none;">vi.sualize.us</span>
                        </div>
                    </div>
                </div>
            </div>
            <? } ?>

        </div> <!-- contenido -->

        <div id="foot"><div class="foot-d2">
                <a href="http://datarar.com/hizmet">Hizmet</a> |
                <a target="_blank" rel="nofollow" href="http://feeds.feedburner.com/datarar">Feed</a> |
                <a target="_blank" rel="nofollow" href="http://www.alexa.com/siteinfo/datarar.com">Alexa</a> |
                <a target="_blank" rel="nofollow" href="http://validator.w3.org/check?uri=http%3a%2f%2fdatarar.com%2f">W3-html</a> |
                <a target="_blank" rel="nofollow" href="http://jigsaw.w3.org/css-validator/validator?uri=http%3A%2F%2Fdatarar.com%2F">W3-css</a> |
                <a target="_blank" href="http://datarar.com/sitemap-video.xml">V-Sitemap</a> |
                <a target="_blank" href="http://datarar.com/sitemap.xml">G-Sitemap</a>
                <br /><br />
                <a href="http://datarar.com/">EPfarkı</a>
                <a target="_blank" rel="nofollow" href="http://creativecommons.org/licenses/by-nc-nd/2.5/">© 2012</a> | Tasarım: <a href="http://datarar.com/iletisim/">Bizimakin</a> | Özel İletişim: iletisim [at] datarar.com



                <!-- sayac -->
                <script>
                    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                    ga('create', 'UA-26694472-1', 'auto');
                    ga('send', 'pageview');

                </script>
                <!-- Yandex.Metrika counter --><script type="text/javascript">(function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter10711903 = new Ya.Metrika({id:10711903, clickmap:true, trackLinks:true, accurateTrackBounce:true, trackHash:true}); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks");</script><noscript><div><img src="//mc.yandex.ru/watch/10711903" style="position:absolute; left:-9999px;" alt="" /></div></noscript><!-- /Yandex.Metrika counter -->
                <!-- /sayac -->
            </div></div>
</body>
</html>
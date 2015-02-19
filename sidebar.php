<div id="sidebar">

    <div id="yanmenu">
        <ul>
            <li id="duyuru"><a class="duyuru"></a></li>
            <li><a href="http://datarar.com/24-kasim-ogretmenler-gunu-24-11/" title="24 Kasım Öğretmenler Günü">24 Kasım Öğretmenler Gününüz Kutlu Olsun</a></li>
        </ul>
    </div>
    <?php include (TEMPLATEPATH . "/sosyal-paylasim-sidebar.php"); ?>
    <div class="temiz"></div>

    <div class="tab3_content">
        <h5>Kategoriler</h5>
        <?php
        $cats = explode("<br />",wp_list_categories('title_li=&echo=0&style=none'));
        $cat_n = count($cats) - 1;
        for ($i=0;$i< $cat_n;$i++):
            if ($i<$cat_n/2):
                $cat_sol = $cat_sol.'<li>'.$cats[$i].'';
            elseif ($i>=$cat_n/2):
                $cat_sag = $cat_sag.'<li>'.$cats[$i].'</li>';
            endif;
        endfor;
        ?>
        <ul class="tab3ek">
            <ul class="tab3sol">
                <?php echo $cat_sol;?>
            </ul>
            <ul class="tab3sag">
                <?php echo $cat_sag;?>
            </ul>
        </ul>
    </div>

<div class="yanmenukapsa">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- esnek -->
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-6963315907881230"
         data-ad-slot="6559951811"
         data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>

    <div class="yanstab">
        <ul id="tabs" class="tabs">
            <li><a href="#tab1">Son Yazılar</a></li>
            <li><a href="#tab2">Rastgele</a></li>
            <li><a href="#tab3">Yorumlar</a></li>
        </ul>

        <div id="tab1" class="tab_content">
            <ul><?php wp_get_archives('type=postbypost&limit=10'); ?></ul>
        </div>

        <div id="tab2" class="tab_content">
            <ul><?php rastgele_yazi('10'); ?></ul>
        </div>

        <div id="tab3" class="tab_content">
            <ul><?php son_yorumlar(); ?></ul>
        </div>

    </div>
</div>
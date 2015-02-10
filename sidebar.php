<div id="sidebar">
    <div id="anakategorimenu">
        <ul>
            <li id="duyuru"><a class="duyuru"></a></li>
            <li><a href="http://datarar.com/24-kasim-ogretmenler-gunu-24-11/" title="24 Kasım Öğretmenler Günü">24 Kasım Öğretmenler Gününüz Kutlu Olsun</a></li>
        </ul>
    </div>
    <div class="temiz"></div>

    <?php include (TEMPLATEPATH . "/sosyal-paylasim-sidebar.php"); ?>

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
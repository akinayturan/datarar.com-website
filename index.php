<?php get_header(); ?>
<div id="altyazialan">
    <div id="main" class="updatable" role="main">

        <div id="anakategorimenu2">
            <ul>
                <li><a><?php $dosya = fopen("sozler.txt","r"); while($satir = fgets($dosya,1024)) $sozler[] = $satir; fclose($dosya); $soz = $sozler[rand(0,count($sozler)-1)]; echo $soz; ?></a></li>
            </ul>
        </div>
        <div class="temiz"></div>

        <div id="yukleyici"></div>

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="postkap"><div class="post"><div class="postic">
                        <div class="anatitle"><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></div>
                        <div id="anaicerik-<?php the_ID(); ?>" class="anaicerik">
                            <?php the_excerpt(get_the_title(). ' yazisinin devamini okuyun &raquo;'); ?></div>
                    </div></div></div>
        <div class="temiz"></div>
        <?php endwhile; endif; ?>
        <?php wp_pagenavi(); ?>
        <div class="temiz"></div>
    </div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>

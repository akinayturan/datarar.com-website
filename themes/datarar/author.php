<?php get_header(); ?>
<?php
if(isset($_GET['author_name'])) :
    $curauth = get_userdatabylogin($author_name);
else :
    $curauth = get_userdata(intval($author));
endif;
?>
    <div id="altyazialan">
        <div id="main" class="updatable" role="main">
            <div id="yukleyici"></div>
            <div class="post"><div class="postic">
                    <div class="title">
                        <h3><a href="/author/<?php the_author_meta('nickname'); ?>/">Yazar: <?php the_author_meta('display_name'); ?></a></h3></div>
                    <div class="temiz"></div>
                    <div id="icerik-<?php the_ID(); ?>" class="icerik">
                        <p class="alignleft" style="margin-right: 10px;"><?php echo get_avatar( get_the_author_meta('user_email'), '125', '' ); ?></p>
                        <p style="text-align: justify;"><?php the_author_meta('description'); ?></p>
                    </div></div>
                <div class="temiz"></div>
                <div class="etiketler">
                    <span>
                        Yazar: <?php the_author_posts_link(); ?> /
                        iletişim: <a href="mailto:<?php echo get_the_author_meta('user_email'); ?>"><?php echo get_the_author_meta('user_email'); ?></a> /
                        Kişisel:<a rel="external" href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_url'); ?></a>
                    </span>
                </div>

                <div class="etiketler">
                </div>
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="postkap"><div class="post"><div class="postic">
                                <div class="anatitle"><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></div>
                                <div id="anaicerik-<?php the_ID(); ?>" class="anaicerik">
                                    <?php the_excerpt(get_the_title(). ' yazisinin devamini okuyun &raquo;'); ?></div>
                            </div></div></div>
                    <div class="temiz"></div>
                <?php endwhile; endif; ?>
                <?php wp_pagenavi(); ?>
            </div>
        </div>
        <div class="temiz"></div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
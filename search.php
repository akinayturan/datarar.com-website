<?php get_header(); ?>
    <div id="altyazialan">
        <div id="main" class="updatable" role="main">
            <div id="yukleyici"></div>

            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="postkap"><div class="post"><div class="postic">
                            <div class="anatitle"><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></div>
                            <div id="anaicerik-<?php the_ID(); ?>" class="anaicerik">
                                <?php the_excerpt(get_the_title(). ' yazisinin devamini okuyun &raquo;'); ?></div>
                        </div></div></div>
                <div class="temiz"></div>
            <?php endwhile; ?>
                <?php else : ?>

                    <div id="post-<?php the_ID(); ?>" class="post">
                        <div id="postic-<?php the_ID(); ?>" class="postic">
                            <h3>Üzgünüz, aradığınız içerik bulunamadı.</h3>
                            <p>Aşağıdaki form aracılığıyla site içerisinde arama yapabilirsiniz.</p>

                            <form style="width:380px;" method="get" id="searchform2" action="<?php bloginfo ('home'); ?>">
                                <input style="width:200px;" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
                                <input type="submit" id="searchsubmit" value="Ara" />
                            </form>
                            <br />
                            <h4>Veya</h4>
                            <p class="center"><a rel="appendix" href="//datarar.com/?rastgele" title="Burası sizi şu anki ruh halinize uygun bir yazıya götürür!">Burası sizi şu anki ruh halinize uygun bir yazıya götürür!</a></p>
                        </div>
                    </div>

                <?php endif; ?>
                <?php wp_pagenavi(); ?>

            </div>
        <div class="temiz"></div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
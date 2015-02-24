<?php get_header(); ?>
    <div id="altyazialan">
        <div id="main" class="updatable" role="main">
            <div id="yukleyici"></div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post"><div class="postic">
                    <div class="title">
                        <h3><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3></div>
                    <div class="temiz"></div>
                    <div id="icerik-<?php the_ID(); ?>" class="icerik">
                        <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
                        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                        <div class="oncekiyazi">Bir önceki <?php previous_post_link( '%link', '%title' ); ?> başlıklı yazımızı okudunuz mu?</div>
                    </div></div>
                <div class="temiz"></div>
                <div class="etiketler">
                    <span>Kategori(ler): <?php the_category(', ') ?></span>
                    <br />
                    <?php edit_post_link('Düzenle', '', ' | '); ?>
                    <?php the_tags('Etiketler: ', ', ', '<br />'); ?>
                </div>
                <div class="etiketler">
                    <div class="tekil-reklam">
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
                </div>
                <div class="etiketler">
                    <p class="alignleft" style="margin-right: 10px;"><?php echo get_avatar( get_the_author_meta('user_email'), '125', '' ); ?></p>
                    <p style="text-align: justify;"><?php the_author_meta('description'); ?></p>
                </div>
                <div class="etiketler">
                    <div class="soltaraf">
                        <span>Yazar: <?php the_author_posts_link(); ?> / Kişisel:<a rel="external" href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('user_url'); ?></a> /</span>
                        <span><?php comments_popup_link('Yorum Yok', '1 Yorum', '% Yorum'); ?> /</span>
                        <span><a rel="external" href="//www.google.com.tr/search?hl=tr&amp;q=<?php the_title(); ?>" title="<?php the_title(); ?>">G-Arama</a></span>
                        <br />
                        <span><?php setPostViews(get_the_ID()); ?><?php echo getPostViews(get_the_ID()); ?> /</span>
                        <span>Güncelleme: <?php the_modified_date('j F Y'); ?> /</span>
                        <span>Yayın: <?php the_time('j F Y [l]'); ?></span>
                    </div>
                    <div class="sagtaraf">
                        <?php include (TEMPLATEPATH . '/sosyal-paylasim-single.php'); ?>
                    </div>
                </div>
                <div class="etiketler">
                    <?php
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                        $category_ids = array();
                        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                        $args=array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'showposts'=>5, // Gösterilecek benzer yazı sayısı
                            'caller_get_posts'=>1
                        );

                        $my_query = new wp_query($args);
                        if( $my_query->have_posts() ) {
                            echo '<h3>Benzer yazılar</h3><ul>';
                            while ($my_query->have_posts()) {
                                $my_query->the_post();
                                ?>
                                <li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
                            <?php
                            }
                            echo '</ul>';
                        }
                        else {
                            echo '<h3>Karışık yazılar</h3><ul>';
                            rastgele_yazi('5');
                            echo '</ul>';
                        }
                        wp_reset_query();
                    }
                    ?>
                </div>
                <div class="temiz"></div>
                <div class="postic">
                    <div class="yorumlar">
                        <?php comments_template(); ?>
                        <div class="temiz"> </div>
                        <?php endwhile; else: ?>
                            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="temiz"></div>
            </div>
        </div>
        <div class="temiz"></div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
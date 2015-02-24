<?php /* Template Name: İnceleme */ ?>
<?php get_header(); ?>
    <div id="altyazialan">
        <div id="main" class="updatable" role="main">
            <div id="yukleyici"></div>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div id="post-<?php the_ID(); ?>" class="post">
    <div id="postic-<?php the_ID(); ?>" class="postic">
        <div id="title-<?php the_ID(); ?>" class="title"><h4><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4></div>
        <div class="temiz"></div>
        <div id="icerik-<?php the_ID(); ?>" class="icerik">
            <?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
            <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

            <?php
            $args=array(
                'orderby' => 'name',
                'order' => 'ASC'
            );
            $categories=get_categories($args);
            $cat_count = 0;
            foreach($categories as $c) {
                $cat_count++;
            }
            $count_posts = wp_count_posts();
            $published = $count_posts->publish;
            ?>
            <blockquote> Web sitemizde <strong><?php echo $cat_count; ?></strong> kategori'de <strong><?php echo $published;?></strong> adet yazı yazılmış ve <strong><?php echo $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->comments WHERE comment_approved = '1'");?></strong> yorum bulunmaktadır.
            </blockquote>

            <div class="yans2tab">
                <div class="tab2_content">
                    <h5>Popüler Yazılar</h5>

                    <ul>
                        <?php
                        query_posts('meta_key=post_views_count&orderby=meta_value_num&order=DESC&posts_per_page=10');
                        if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                        <?php
                        endwhile; endif;
                        wp_reset_query();
                        ?>
                    </ul>

                </div>

                <div class="tab2_content">
                    <h5>Güncel Yazılar</h5>

                    <?php $bugun = current_time('mysql', 1);  $kactane = 10; if ( $recentposts = $wpdb->get_results("SELECT ID, post_title FROM $wpdb->posts WHERE post_status = 'publish' AND post_modified_gmt < '$bugun' ORDER BY post_modified_gmt DESC LIMIT $kactane")): ?>

                        <ul><?php foreach ($recentposts as $post) { if ($post->post_title == '') $post->post_title = sprintf(__('Post #%s'), $post->ID); echo "<li><a href='".get_permalink($post->ID)."'>"; the_title(); echo '</a></li>'; } ?>
                        </ul><?php endif; ?>
                </div>


                <div class="tab2_content">
                    <h5>Yazarlar:</h5>
                    <ul class="sitemap-authors">
                        <?php
                        //http://codex.wordpress.org/Function_Reference/wp_list_authors
                        wp_list_authors('exclude_admin=1&optioncount=1');
                        ?>
                    </ul>
                </div>

                <div class="tab2_content">
                    <h5>Etiket</h5>
                    <div class="tab3etiket">
                        Etiketler: <?php wp_tag_cloud('smallest=8&largest=8&number=50'); ?> <br /><br />
                    </div>
                    <h5>Arşiv</h5>
                    <ul class="tab2ek">
                        <?php wp_get_archives('type=monthly&limit=30'); ?>
                    </ul>
                </div>

            </div>

        </div>
    </div>

    <div class="temiz"> </div>
<?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>
                    </div>
                </div>
                <div class="temiz"></div>
            </div>
        </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
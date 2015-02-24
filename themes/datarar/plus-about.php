<?php /* Template Name: ek-about */ ?>
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
                        <?php the_content('<p class="serif">Read more &raquo;</p>'); ?>
                        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>


                        <p class="alignleft" style="margin-right: 10px;"><?php echo get_avatar( get_the_author_meta('user_email', 1), '125', '' ); ?></p>
                        <p style="text-align: justify;"><?php the_author_meta('description', 1); ?></p>

                        Yazar: <a href="/author/<?php the_author_meta('nickname', 1); ?>/"><?php echo get_the_author_meta('nickname', 1); ?></a> /
                        iletişim: <a href="mailto:<?php echo get_the_author_meta('user_email', 1); ?>"><?php echo get_the_author_meta('user_email', 1); ?></a>
                        <hr style="clear: both;" />

                        <p class="alignleft" style="margin-right: 10px;"><?php echo get_avatar( get_the_author_meta('user_email', 3), '125', '' ); ?></p>
                        <p style="text-align: justify;"><?php the_author_meta('description', 3); ?></p>

                        Yazar: <a href="/author/<?php the_author_meta('nickname', 3); ?>/"><?php echo get_the_author_meta('nickname', 3); ?></a> /
                        iletişim: <a href="mailto:<?php echo get_the_author_meta('user_email', 3); ?>"><?php echo get_the_author_meta('user_email', 3); ?></a>
                        <hr style="clear: both;" />
                    </div>
                    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
                </div>
                <div class="temiz"></div>
                <?php endwhile; endif; ?>
                <div class="temiz"></div>
            </div>
        </div>
        <div class="temiz"></div>
    </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
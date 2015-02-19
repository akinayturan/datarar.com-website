<?php
/*
Template Name: intro
*/
?>
<?php get_header(); ?>
    <div id="main" class="updatable" role="main">
        <div id="yukleyici"></div>
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" class="post-701 page type-page status-publish hentry">
                                    <div id="postic-<?php the_ID(); ?>" class="postic">
                                        <?php the_content('<p class="serif">Read more &raquo;</p>'); ?>
                                        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                                    </div>
                            <?php endwhile; endif; ?>
                            </div>
                            <div class="clearfix"></div>

        </div>
    </div>
    <div class="temiz"></div>

<?php get_footer(); ?>
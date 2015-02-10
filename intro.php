<?php
/*
Template Name: intro
*/
?>
<?php get_header(); ?>
    <div id="main" class="updatable" role="main">
        <div id="yukleyici"></div>
        <div id="page" class="page-container" style="margin-top: 0px;">
            <div class="container">

                <div class="sixteen columns">
                    <div id="primary" class="content-area">
                        <div id="content" class="site-content" role="main">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <div id="post-<?php the_ID(); ?>" class="post-701 page type-page status-publish hentry">
                                <div class="entry-content">
                                    <div id="postic-<?php the_ID(); ?>" class="postic">
                                        <?php the_content('<p class="serif">Read more &raquo;</p>'); ?>
                                        <?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
                                    </div>
                            <?php endwhile; endif; ?>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- .entry-content -->
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>
    <div class="temiz"></div>

<?php get_footer(); ?>
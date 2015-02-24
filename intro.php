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
            <div class="clearfix"></div>
            <div class="info-box-row clearfix">
                <div class=" ffs-three-one ffs-info-box center ">
                    <a href="/blog/" class="span4 project thousand-pitches dJAX_internal">
                        <div class="ffs-icon-box"><i class="fa fa-archive fa-4x" style="text-align: center;display: block;min-height: 70px;margin: 0 auto 15px;min-width: 51px;"></i></div>
                        <div class="infobox-title" style="text-align: center; font-size: 20px; text-transform: uppercase;">Blog</div>
                        <div class="infobox-text" style="text-align: center; font-size: 13px;">Güncel makaleler, teknolojide göze çarpanlar vede çokça payaşımıyla farkını hisstettiren blog</div>

                    </a>
                </div>
                <div class=" ffs-three-one ffs-info-box center ">
                    <a href="/hizmetler/" class="span4 project thousand-pitches dJAX_internal">
                        <div class="ffs-icon-box"><i class="fa fa-cogs fa-4x" style="text-align: center;display: block;min-height: 70px;margin: 0 auto 15px;min-width: 51px;"></i></div>
                        <div class="infobox-title" style="text-align: center; font-size: 20px; text-transform: uppercase;">Hizmetlerimiz</div>
                        <div class="infobox-text" style="text-align: center; font-size: 13px;">Amacımız bir blog olmanın ötesinde online hizmetleriyle de size özel bir alan sunmak...</div>
                    </a>
                </div>
                <div class=" ffs-three-one ffs-info-box center last">
                    <a href="/hakkimizda/" class="span4 project thousand-pitches dJAX_internal">
                        <div class="ffs-icon-box"><i class="fa fa-users fa-4x" style="text-align: center;display: block;min-height: 70px;margin: 0 auto 15px;min-width: 51px;"></i></div>
                        <div class="infobox-title" style="text-align: center; font-size: 20px; text-transform: uppercase;">Hakkımızda</div>
                        <div class="infobox-text" style="text-align: center; font-size: 13px;">Datarar ve bizi daha yakından tanımak isteyenler için buradayız ^^</div>
                    </a>
                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
    </div>
    <div class="clear"></div>

</div>
<div class="clear"></div>

<?php get_footer(); ?>

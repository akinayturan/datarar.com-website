<?php /* Template Name: ek-passwpage */ ?>
<?PHP
function SifreliGiris($kullanici,$sifre) {
    if(empty($_SERVER['PHP_AUTH_USER']) || empty($_SERVER['PHP_AUTH_PW']) ||  $_SERVER['PHP_AUTH_USER'] != "$kullanici" || $_SERVER['PHP_AUTH_PW'] !=  "$sifre")
    {
        header('WWW-Authenticate: Basic realm="Kullanici adi ve sifreyi giriniz."');
        die(header('HTTP/1.0 401 Unauthorized'));
    }  }
$kullanici = 'data';
$sifre = 'rar';
SifreliGiris($kullanici,$sifre);
?>
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
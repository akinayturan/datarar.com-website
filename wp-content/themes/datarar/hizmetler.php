<?php /* Template Name: Hizmetler */ ?>
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
            <div class="yans2tab">
                <div class="tab2_content">
                    <ul class="tab2ek">
                        <ul class="sol">
                            <li><a href="//datarar.com/linkekle/" title="Link Ekle">Link Ekle</a></li>
                            <li><a href="//datarar.com/hizmet/otobacklink/" title="Oto Back Link">Oto Back Link</a></li>
                            <li><a href="//datarar.com/hizmet/gizlen/" title="Site Gizleme (Proxy)">Site Gizleme (Proxy)</a></li>
                            <li><a href="//datarar.com/hizmet/icon-mail/" title="İcon Email Yapma">İcon Email Yapma</a></li>
                            <li><a href="//datarar.com/hizmet/ovalkose/" title="CSS Oval Köşe Oluşturucu">Oval Köşe Oluşturucu</a></li>
                            <li><a href="//datarar.com/hizmet/ip-bul/" title="İp Adresiniz">İp Adresiniz Nedir?</a></li>
                            <li><a href="//datarar.com/hizmet/havadurumu/" title="Hava Durumu">Hava Durumu</a></li>
                        </ul>
                        <ul class="sag">
                            <li><a target="_blank" href="//datarar.com/hizmet/kod-onizleme/" title="Kod Ön İzleme">Kod Ön İzleme</a></li>
                            <li><a target="_blank" href="//datarar.com/hizmet/resimyukle/" title="Resim Yükleme Aracı">Resim Yükleme Aracı</a></li>
                            <li><a target="_blank" href="//datarar.com/hizmet/depremler/" title="Son Depremler">Son Depremler</a></li>
                        </ul>
                    </ul>
                </div>
                <div class="temiz"> </div>
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
<!-- s-extra
================================================== -->
<section class="s-extra">
<div class="row">
    <div class="col-seven md-six tab-full popular">
                <h3>Popular Posts</h3>
                <div class="block-1-2 block-m-full popular__posts">
                <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 6,
                        'orderby' => 'comment_count',
                    ); 
                    $q = new WP_Query($args);

                    while($q->have_posts()) :
                        $q->the_post();
                ?>
                    <article class="col-block popular__post">
                        <a href="<?php the_permalink();?>" class="popular__thumb">
                            <?php the_post_thumbnail();?>
                        </a>
                        <h5><?php the_title();?></h5>
                        <section class="popular__meta">
                            <span class="popular__author"><span><?php esc_html_e( 'By', 'wordkanak' ); ?></span> <a href="<?php the_author_link();?>"><?php the_author();?></a></span>
                            <span class="popular__date"><span><?php esc_html_e( 'On', 'wordkanak' ); ?></span> <time datetime="2018-06-14"><?php echo get_the_date();?></time></span>
                        </section>
                    </article>
                    <?php 
                        endwhile;
                        wp_reset_postdata();
                    ?>
                </div> <!-- end popular_posts -->
            </div> <!-- end popular -->
    <div class="col-four md-six tab-full end">
        <div class="row">
            <?php if ( is_active_sidebar( 'footer-top-right-sidebar' ) ) : ?>
                <?php dynamic_sidebar( 'footer-top-right-sidebar' ); ?>
            <?php endif; ?>
        </div>
    </div>
</div> <!-- end row -->
</section> <!-- end s-extra -->
<!-- s-footer
================================================== -->
<?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 6,
        'orderby' => 'comment_count',
    ); 
    $q = new WP_Query($args);
?>
<footer class="s-footer">
    <div class="s-footer__main">
        <div class="row">                              
                <?php if ( is_active_sidebar( 'footer-about' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-about' ); ?>
                <?php endif; ?>                   
                <?php if ( is_active_sidebar( 'footer-subcribe' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-subcribe' ); ?>
                <?php endif; ?>
            </div> <!-- end s-footer__subscribe -->
        </div>
    </div> <!-- end s-footer__main -->
    <div class="s-footer__bottom">
        <div class="row">
            <?php if ( is_active_sidebar( 'footer-social-icon' ) ) : ?>
                <?php dynamic_sidebar( 'footer-social-icon' ); ?>
            <?php endif; ?>
            <div class="col-six">
                <?php if ( is_active_sidebar( 'footer-copyright' ) ) : ?>
                    <?php dynamic_sidebar( 'footer-copyright' ); ?>
                <?php endif; ?>
            </div>           
        </div>
    </div> <!-- end s-footer__bottom -->
    <div class="go-top">
        <a class="smoothscroll" title="Back to Top" href="#top"></a>
    </div>
</footer> <!-- end s-footer -->
<?php wp_footer();?>
</body>
</html>
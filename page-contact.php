<?php 
/*
Template Name: Contact us
*/
the_post();
get_header();?>
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">
        <div class="row narrow">
            <div class="col-full s-content__header">
                <h1 class="display-1 display-1--with-line-sep"><?php echo esc_html( get_post_meta( get_the_ID(), 'Title-One', true ) ); ?></h1>
                <p class="lead">
                <?php echo esc_html( get_post_meta( get_the_ID(), 'Title-Two', true ) ); ?></p>
            </div>
        </div>
        <div class="row">
            <div class="col-full s-content__main">
                <p><?php echo get_the_post_thumbnail();?></p>
                <?php echo get_the_content();?>
                <div id="map-wrap">
                    <?php
                        if(is_active_sidebar( 'google-map' )){
                            dynamic_sidebar('google-map');
                        }
                    ?>
                </div> 
                <div class="row">
                    <?php if ( is_active_sidebar( 'contact-sidebar' ) ) : ?>
                            <?php dynamic_sidebar( 'contact-sidebar' ); ?>
                    <?php endif; ?>
                </div>

                <h4>Get In Touch</h4>

                <form name="cForm" id="cForm" class="contact-form" method="post" action="">
                    <?php echo do_shortcode('[contact-form-7 id="145" title="Contact form 1"]'); ?>
                </form>

            </div> <!-- s-content__main -->
        </div> <!-- end row -->

    </section> <!-- end s-content -->
<?php get_footer();?>
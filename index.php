<?php get_header();?>
<!-- featured 
================================================== -->
<section class="s-featured">
    <div class="row">
        <div class="col-full">
            <div class="featured-slider featured" data-aos="zoom-in">
                <?php $i = 1; while (have_posts() && $i < 4) : the_post(); ?>
                <div class="featured__slide">
                    <div class="entry">
                        <div class="entry__background" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>"></div>                       
                        <div class="entry__content">
                            <span class="entry__category">
                                <?php the_category( ' ');?>
                            </span>
                            <h1><a href="<?php echo get_the_permalink();?>" title=""><?php echo get_the_title();?></a></h1>
                            <div class="entry__info">
                                <a href="#0" class="entry__profile-pic">
                                    <?php echo get_avatar( get_the_author_meta("ID")); ?>
                                </a>
                                <ul class="entry__meta">
                                    <li><a href="<?php get_the_author_link(); ?>"><?php the_author() ?></a></li>
                                    <li><?php echo get_the_date('F j, Y'); ?></li>
                                </ul>
                            </div>
                        </div> <!-- end entry__content -->                       
                    </div> <!-- end entry -->
                </div> <!-- end featured__slide -->
                <?php $i++; endwhile; ?>
            </div> <!-- end featured -->
        </div> <!-- end col-full -->
    </div>
</section> <!-- end s-featured -->
<!-- s-content
================================================== -->
<section class="s-content">
    <div class="row entries-wrap wide">
        <div class="entries">
            <?php 
            $the_query = new WP_Query(array(
                'posts_per_page' => '12'
            ));
            while ($the_query->have_posts()) : $the_query->the_post(); ?>
            <article class="col-block">              
                <div class="item-entry" data-aos="zoom-in">
                    <div class="item-entry__thumb">
                        <a href="<?php echo get_the_permalink();?>" class="item-entry__thumb-link">
                            <?php echo get_the_post_thumbnail();?>
                        </a>
                    </div>  
                    <div class="item-entry__text">    
                        <div class="item-entry__cat">
                            <?php the_category( ' ');?>
                        </div>
                        <h1 class="item-entry__title"><a href="<?php echo get_the_permalink();?>"><?php echo get_the_title();?></a></h1>                         
                        <div class="item-entry__date">
                            <a href="<?php echo get_the_permalink();?>"><?php echo get_the_date('F j, Y'); ?></a>
                        </div>
                    </div>
                </div> <!-- item-entry -->
            </article> <!-- end article -->
            <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div> <!-- end entries -->
    </div> <!-- end entries-wrap -->
    <div class="row pagination-wrap">
        <div class="col-full">
            <nav class="pgn" data-aos="fade-up">
                <?php 
                    woedsmith_pagination();
                ?>
            </nav>
        </div>
    </div>
</section> <!-- end s-content -->
<?php get_footer();?>
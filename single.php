<?php get_header();?>
    <!-- s-content
    ================================================== -->
    <section class="s-content s-content--top-padding s-content--narrow">
        <?php while ( have_posts() ) : the_post();?>
        <article class="row entry format-standard">
            <div class="entry__media col-full">
                <div class="entry__post-thumb">
                    <?php the_post_thumbnail('large'); ?>
                </div>
            </div>
            <div class="entry__header col-full">
                <h1 class="entry__header-title display-1">
                    <?php echo get_the_title();?>
                </h1>
                <ul class="entry__header-meta">
                    <li class="date"><?php echo get_the_date('F j, Y'); ?></li>
                    <li class="byline">
                        By
                        <a href="<?php get_the_author_link(); ?>"><?php the_author(); ?></a>
                    </li>
                </ul>
            </div>
            <div class="col-full entry__main">
            <?php echo get_the_content();?>
            <div class="entry__taxonomies">
                    <div class="entry__cat">
                        <h5><?php esc_html_e( 'Posted In: ', 'wordkanak' ); ?></h5>
                        <span class="entry__tax-list">
                            <?php the_category( ' ');?>
                        </span>
                    </div> <!-- end entry__cat -->

                    <div class="entry__tags">
                        <h5><?php esc_html_e( 'Tags: ', 'wordkanak' ); ?></h5>
                        <span class="entry__tax-list entry__tax-list--pill">
                        <?php
                        the_tags(' ');
                        ?>
                        </span>
                    </div> <!-- end entry__tags -->
                </div> <!-- end s-content__taxonomies -->

                <div class="entry__author">
                    <?php echo get_avatar( get_the_author_meta("ID")); ?>

                    <div class="entry__author-about">
                        <h5 class="entry__author-name">
                            <span><?php esc_html_e( 'Posted by', 'wordkanak' ); ?></span>
                            <a href="<?php get_the_author_link(); ?>"><?php the_author() ?></a>
                        </h5>

                        <div class="entry__author-desc">
                            <?php the_author_meta('description');?>
                        </div>
                    </div>
                </div>
            </div> <!-- s-entry__main -->
        </article> <!-- end entry/article -->
		<?php endwhile;?>
        <div class="s-content__entry-nav">
            <div class="row s-content__nav">               
                <?php 
                    $wordkanak_prev_post = get_previous_post();
                    if($wordkanak_prev_post) :
                ?>
                <div class="col-six s-content__prev">
                    <a href="<?php echo get_the_permalink($wordkanak_prev_post);?>" rel="prev">
                        <span><?php esc_html_e( 'Previous Post', 'wordkanak' ); ?></span>
                        <?php echo get_the_title($wordkanak_prev_post);?>
                    </a>
                </div>
                <?php endif;?>
                <?php 
                        $wordkanak_next_post = get_next_post();
                        if($wordkanak_next_post) :
                    ?>
                <div class="col-six s-content__next">
                    <a href="<?php echo get_the_permalink($wordkanak_next_post);?>" rel="prev">
                        <span><?php esc_html_e( 'Next Post', 'wordkanak' ); ?></span>
                        <?php echo get_the_title($wordkanak_next_post);?>
                    </a>                                     
                </div>
                <?php endif;?>
            </div>
        </div> <!-- end s-content__pagenav -->
        <div class="comments-wrap">
            <?php comments_template();?>
        </div> <!-- end comments-wrap -->
    </section> <!-- end s-content -->
<?php get_footer();?>
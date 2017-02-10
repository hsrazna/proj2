<div class="next-prev-block next-prev-blog blog-section clearfix az-blog-section ">
    <h3 class="blog-section-title"><?php esc_html_e( 'Еще вас может заинтересовать:', 'houzez' ); ?></h3>
    <div class="prev-box pull-left">
        <?php
        $prevPost = get_previous_post(true);
        if($prevPost) {
        $args = array(
            'posts_per_page' => 1,
            'include' => $prevPost->ID
        );
        $prevPost = get_posts($args);
        foreach ($prevPost as $post) {
            setup_postdata($post);
            ?>
            <div class="media">
                <div class="media-left">
                    <a href="#"><i class="fa fa-arrow-circle-left"></i></a>
                </div>
                <div class="media-body media-middle">
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
    <h3 class="media-heading"><a href="<?php the_permalink(); ?>"> <?php esc_html_e( 'Previous post', 'houzez' ); ?></a></h3>
    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
    <h3 class="media-heading"><a href="<?php the_permalink(); ?>"> <?php esc_html_e( 'Предыдущая статья', 'houzez' ); ?></a></h3>
    <?php } ?>
                    
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
            </div>
            <?php
            wp_reset_postdata();
            } //end foreach
        } // end if
        ?>
    </div>

    <div class="next-box pull-right">

        <?php
        $nextPost = get_next_post(true);
        if($nextPost) {
        $args = array(
            'posts_per_page' => 1,
            'include' => $nextPost->ID
        );
        $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
            setup_postdata($post);
            ?>
            <div class="media">
                <div class="media-body media-middle text-right">
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
    <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Next post', 'houzez' ); ?></a></h3>
    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
    <h3 class="media-heading"><a href="<?php the_permalink(); ?>"><?php esc_html_e( 'Следующая статья', 'houzez' ); ?></a></h3>
    <?php } ?>
                    
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                </div>
                <div class="media-right">
                    <a href="<?php the_permalink(); ?>"><i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        <?php
        wp_reset_postdata();
            } //end foreach
        } // end if
        ?>
    </div>
</div>
<?php
global $post, $related_posts;
$categories = get_the_category( $post->ID );
if ($categories):
    $cat_ids = array();
    foreach($categories as $individual_cat) $cat_ids[] = $individual_cat->term_id;
    $args=array(
        'category__in' => $cat_ids,
        'post__not_in' => array( $post->ID ),
        'posts_per_page' => '3'
    );
    $related_posts = get_posts( $args );
endif;

if( $related_posts ) {
?>
<div class="blog-section">
    <?php if ( qtrans_getLanguage() == 'en' ) {?>
    <h3 class="blog-section-title"><?php esc_html_e( 'Related posts', 'houzez' ); ?></h3>
    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
    <h3 class="blog-section-title"><?php esc_html_e( 'Похожие статьи', 'houzez' ); ?></h3>
    <?php } ?>
    <div class="row grid-row">
    <?php foreach( $related_posts as $post ): setup_postdata( $post ); ?>
        <div class="col-sm-4">
            <?php get_template_part('content-grid-1'); ?>
        </div>
    <?php endforeach; ?>
    </div>
</div>
<?php } ?>
<?php wp_reset_postdata(); ?>
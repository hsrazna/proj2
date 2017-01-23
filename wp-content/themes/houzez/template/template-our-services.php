<?php
/**
 * Template Name: Our services
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 25/01/16
 * Time: 9:12 PM
 */
get_header();
global $houzez_local, $wp_query, $paged;
if ( is_front_page()  ) {
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
}
?>
<div class="row">
    <div class="col-sm-12">
        <div class="page-title breadcrumb-single">
            <div class="row">
                <div class="col-sm-12">
                    <?php //get_template_part( 'inc/breadcrumb' )?>
                    <?php get_template_part( 'inc/breadcrumb-services' )?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-article">
    <?php get_template_part('template-parts/page-title'); ?>
</div>
<?php the_content(); ?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div id="content-area">
            <div id="post-card-masonry-module" class="post-card-masonry az-margin-top15">
                <?php
                    $terms = get_terms( array(
                        'taxonomy' => 'servicescat',
                        'hide_empty' => false,
                    ) );
                    // print_r($terms);

   // $taxonomy_objects = get_object_taxonomies( 'services', 'objects' );
   // print_r( $taxonomy_objects);

                // $number_of_posts = houzez_option('masorny_num_posts');
                // if (!$number_of_posts) {
                //     $number_of_posts = '12';
                // }
                // //'category__not_in' => 70
                // $wp_query_args = array(
                // 'category_name' => 'Our services',
                // 'post_type' => 'post',
                // 'posts_per_page' => $number_of_posts,
                // 'paged' => $paged,
                // 'post_status' => 'publish'
                // );
                // $the_query = New WP_Query($wp_query_args);
                ?>
                 <div class="grid-block row">
                    <?php if( $terms ): 
                        foreach( $terms as $term ): ?>
                        <?php //$term_query = new WP_Term_Query( Array('slug' => $term->slug) ); ?>
                        <div class="col-md-12 col-sm-12 col-xs-12 grid-item">
                            <div class="post-card-item az-post-card-item">

                                <figure class="item-thumb az-item-thumb">
                                    <?php 
                                        $img = get_field('изображение', 'servicescat_'.$term->term_id);
                                        
                                    ?>
                                    <a href="<?php echo get_term_link($term->term_id); ?>" class="hover-effect">
                                        <img src="<?php echo $img['url']; ?>">
                                    </a> 
                                    
                                 </figure>
                                <div class="post-card-body az-post-card-body">

                                    <div class="post-card-description">
                                        
                                        <h2><a href="<?php echo get_term_link($term->term_id); ?>"><?php echo $term->name; ?></a></h2>
                                        <p><?php echo $term->description;//houzez_clean_excerpt( '100', 'false' ); ?></p>
                                        <a href="<?php echo get_term_link($term->term_id); ?>" class="read"><?php echo $houzez_local['continue_reading']; ?> <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php endforeach; endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>

            </div>
            <!-- <hr> -->
            <!--start Pagination-->
            <?php houzez_pagination( $the_query->max_num_pages, $range = 2 ); ?>
            <!--start Pagination-->

        </div>
    </div><!-- end container-content -->

</div> 
<?php get_footer(); ?>
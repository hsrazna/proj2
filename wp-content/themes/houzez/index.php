<?php
/**
 * @package Houzez
 * @since Houzez 1.0
 */

get_header();
$sticky_sidebar = houzez_option('sticky_sidebar');
// global $wp_query;
// $wp_query->set("orderby", "type");
$wp_query = new WP_Query( Array( "s" => $_GET["s"], "orderby" => "type", "order" => "ASC", "post_status" => "publish") );
// print_r($wp_query);
?>
    
    <section class="section-detail-content blog-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
                    <div class="article-main">
                        <?php
                        if ( $wp_query->have_posts() ) :

                            $i = 0;
                            while ( $wp_query->have_posts() ) : $wp_query->the_post();
                                if( $post->post_type == 'services'){
                                    if(!$i++){
                                        ?><h3 class="az-margin-search-head">Результаты поиска по запросу "<?php echo $_GET["s"]; ?>" в разделе Услуг</h3><?php
                                    }
                                    get_template_part( 'content', get_post_format() );
                                }
                            endwhile;
                        
                            $wp_query->rewind_posts();
                            
                            $i = 0;
                            while ( $wp_query->have_posts() ) : $wp_query->the_post();
                                if( $post->post_type == 'post'){
                                    if(!$i++){
                                        ?><h3 class="az-margin-search-head">Результаты поиска по запросу "<?php echo $_GET["s"]; ?>" в разделе Статей</h3><?php
                                    }
                                    get_template_part( 'content', get_post_format() );
                                }
                            endwhile;
                        
                            $wp_query->rewind_posts();
                            
                            $i = 0;
                            while ( $wp_query->have_posts() ) : $wp_query->the_post();
                                if( $post->post_type == 'page'){
                                    if(!$i++){
                                        ?><h3 class="az-margin-search-head">Результаты поиска по запросу "<?php echo $_GET["s"]; ?>" в разделе Страниц</h3><?php
                                    }
                                    get_template_part( 'content', get_post_format() );
                                }
                            endwhile;

                        else :
                            // If no content, include the "No posts found" template.
                            get_template_part( 'content', 'none' );

                        endif;
                        ?>
                        <hr>

                        <!--start pagination-->
                        <?php houzez_pagination( $wp_query->max_num_pages ); ?>
                        <!--end pagination-->

                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar <?php if( isset( $sticky_sidebar['default_sidebar'] ) && $sticky_sidebar['default_sidebar'] != 0 ){ echo 'houzez_sticky'; }?>">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
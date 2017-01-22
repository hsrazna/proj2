<?php
/**
 * @package Houzez
 * @since Houzez 1.0
 */

get_header();
$sticky_sidebar = houzez_option('sticky_sidebar');
?>
<?php //echo get_queried_object()->name;//$term = the_ID(); ?>
<?php //get_template_part( 'template-parts/page-title' ); ?>

				
<section class="section-detail-content">
	<div class="container">
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
            <!-- <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar"> -->
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="grid-block row">
				<div class="col-md-12 col-sm-12 col-xs-12 grid-item">

                <div class="post-card-item blog-article">
                <!-- <div class="page-title"> -->
                    <?php get_template_part( 'template-parts/page-title' ); ?>
                <!-- </div> -->
                <?php $az_img = get_field('изображение', 'servicescat_'.get_queried_object()->term_id); ?>
                <img src="<?php echo $az_img['url'] ?>">
                <div class="clearfix"></div>
                <div class="article-detail">
					<?php the_field('текст', 'servicescat_'.get_queried_object()->term_id); ?>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
				</div>
				</div>
				<div class="grid-block row">
                    <?php if ( have_posts() ) :
                        while ( have_posts() ) : the_post(); ?>
                        <?php //$term_query = new WP_Term_Query( Array('slug' => $term->slug) ); ?>
                        <div class="col-md-12 col-sm-12 col-xs-12 grid-item">
                            <div class="post-card-item az-post-card-item">
                                <figure class="item-thumb az-item-thumb">
                                    <?php 
                                        // $img = get_field('изображение', 'servicescat_'.$term->term_id);
                                        
                                    ?>
                                    <a href="<?php the_permalink(); ?>" class="hover-effect">
                                        <?php the_post_thumbnail('medium'); ?>
                                    </a> 
                                    
                                 </figure>
                                <div class="post-card-body az-post-card-body">

                                    <div class="post-card-description">
                                        
                                        <h3><?php the_title(); ?></h3>
                                        <p><?php the_excerpt();//houzez_clean_excerpt( '100', 'false' ); ?></p>
                                        <a href="<?php the_permalink(); ?>" class="read"><?php echo $houzez_local['continue_reading']; ?> <i class="fa fa-caret-right"></i></a>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                    <?php wp_reset_postdata(); ?>
                </div>
			</div>
			<!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-md-offset-0 col-sm-offset-3 container-sidebar <?php //if( isset( $sticky_sidebar['default_sidebar'] ) && $sticky_sidebar['default_sidebar'] != 0 ){ echo 'houzez_sticky'; }?>">
				<?php //get_sidebar(); ?>
			</div> -->
		</div>
	</div>
</section>

<?php get_footer(); ?>
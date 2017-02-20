<?php
/**
 * @package Houzez
 * @since Houzez 1.0
 */

get_header();
$sticky_sidebar = houzez_option('sticky_sidebar');
?>

<?php get_template_part( 'template-parts/page-title' ); ?>

<?php //print_r($az_tags = get_the_tags()); ?>
<?php //echo($az_tags[0]->slug) ; ?>
<?php $wp_query = new WP_Query( Array( "tag__in" => $az_tags[0]->term_id, "post_type" => Array("services", "post", "property")) ); ?>
<section class="section-detail-content anzar">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 container-contentbar">
				<div class="article-main">
					<?php
					if ( $wp_query->have_posts() ) :

						while ( $wp_query->have_posts() ) : $wp_query->the_post();

							get_template_part( 'content', get_post_format() );

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
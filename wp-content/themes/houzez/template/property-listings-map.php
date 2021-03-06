<?php
/**
 * Template Name: Property Listing Half Map
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 11/06/16
 * Time: 11:00 PM
 */
get_header();
global $post, $listings_tabs, $fave_featured_listing;
$listing_view = get_post_meta( $post->ID, 'fave_default_view', true );
$listings_tabs = get_post_meta( $post->ID, 'fave_listings_tabs', true );
$listings_tab_1 = get_post_meta( $post->ID, 'fave_listings_tab_1', true );
$listings_tab_2 = get_post_meta( $post->ID, 'fave_listings_tab_2', true );
$fave_featured_listing = get_post_meta( $post->ID, 'fave_featured_listing', true );
$fave_featured_prop_no = get_post_meta( $post->ID, 'fave_featured_prop_no', true );
$fave_prop_no = get_post_meta( $post->ID, 'fave_prop_no', true );
$search_result_page = houzez_option('search_result_page');
$geo_location = houzez_option('geo_location');
$map_fullscreen = houzez_option('map_fullscreen');
$enable_disable_save_search = houzez_option('enable_disable_save_search');
$listing_page_link = houzez_properties_listing_link();

if( $listing_view == 'grid_view' || $listing_view == 'grid_view_3_col' ) {
    $listing_view = 'grid-view';
} else {
    $listing_view = 'list-view';
}
$sortby = '';
if( isset($_GET['prop_featured']) && $_GET['prop_featured'] == 'no' ) {
    $fave_featured_listing = 'disable';
}
if( isset( $_GET['sortby'] ) ) {
    $sortby = $_GET['sortby'];
}

$latest_listing_args = array(
    'post_type' => 'property',
    'posts_per_page' => -1,
    // 'posts_per_page' => 10,//$posts_per_page,
    // 'paged' => $paged,
    'post_status' => 'publish',
);
$latest_listing_args = apply_filters('houzez_search_parameters_2', $latest_listing_args);

$latest_listing_args = houzez_prop_sort ( $latest_listing_args );
?>
<div class="container-fluid">
    <div class="row">

        <!-- <div class="col-md-5 col-sm-5 col-xs-12 no-padding">
            <div id="houzez-gmap-main" class="fave-screen-fix">
                <div id="mapViewHalfListings" class="map-half">
                </div>
                <div id="houzez-map-loading">
                    <div class="mapPlaceholder">
                        <div class="loader-ripple">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <?php wp_nonce_field('houzez_header_map_ajax_nonce', 'securityHouzezHeaderMap', true); ?>

                <div  class="map-arrows-actions">
                    <button id="listing-mapzoomin" class="map-btn"><i class="fa fa-plus"></i> </button>
                    <button id="listing-mapzoomout" class="map-btn"><i class="fa fa-minus"></i></button>
                    <input type="text" id="google-map-search" placeholder="<?php esc_html_e('Google Map Search', 'houzez'); ?>" class="map-search">
                </div>
                <div class="map-next-prev-actions">
                    <ul class="dropdown-menu" aria-labelledby="houzez-gmap-view">
                        <li><a href="#" class="houzezMapType" data-maptype="roadmap"><span><?php esc_html_e( 'Roadmap', 'houzez' ); ?></span></a></li>
                        <li><a href="#" class="houzezMapType" data-maptype="satellite"><span><?php esc_html_e( 'Satelite', 'houzez' ); ?></span></a></li>
                        <li><a href="#" class="houzezMapType" data-maptype="hybrid"><span><?php esc_html_e( 'Hybrid', 'houzez' ); ?></span></a></li>
                        <li><a href="#" class="houzezMapType" data-maptype="terrain"><span><?php esc_html_e( 'Terrain', 'houzez' ); ?></span></a></li>
                    </ul>
                    <button id="houzez-gmap-view" class="map-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-globe"></i> <span><?php esc_html_e( 'View', 'houzez' ); ?></span></button>

                    <button id="houzez-gmap-prev" class="map-btn"><i class="fa fa-chevron-left"></i> <span><?php esc_html_e('Prev', 'houzez'); ?></span></button>
                    <button id="houzez-gmap-next" class="map-btn"><span><?php esc_html_e('Next', 'houzez'); ?></span> <i class="fa fa-chevron-right"></i></button>
                </div>
                <div  class="map-zoom-actions">
                    <?php if( $geo_location != 0 ) { ?>
                        <span id="houzez-gmap-location" class="map-btn"><i class="fa fa-map-marker"></i> <span><?php esc_html_e('My location', 'houzez'); ?></span></span>
                    <?php } ?>
                    <?php if( $map_fullscreen != 0 ) { ?>
                        <span id="houzez-gmap-full"  class="map-btn"><i class="fa fa-arrows-alt"></i> <span><?php esc_html_e('Fullscreen', 'houzez'); ?></span></span>
                    <?php } ?>
                </div>

            </div>
        </div> -->

        <div class="col-md-12 col-sm-12 col-xs-12 no-padding">
        <div class="az-col-map1" style="display:none;">
            <div id="houzez-gmap-main" class="fave-screen-fix">
                <div id="mapViewHalfListings" class="map-half">
                </div>
                <div id="houzez-map-loading">
                    <div class="mapPlaceholder">
                        <div class="loader-ripple">
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>
                <?php wp_nonce_field('houzez_header_map_ajax_nonce', 'securityHouzezHeaderMap', true); ?>

                <div  class="map-arrows-actions">
                    <button id="listing-mapzoomin" class="map-btn"><i class="fa fa-plus"></i> </button>
                    <button id="listing-mapzoomout" class="map-btn"><i class="fa fa-minus"></i></button>
                    <input type="text" id="google-map-search" placeholder="<?php esc_html_e('Google Map Search', 'houzez'); ?>" class="map-search">
                </div>
                <div class="map-next-prev-actions">
                    <ul class="dropdown-menu" aria-labelledby="houzez-gmap-view">
                        <li><a href="#" class="houzezMapType" data-maptype="roadmap"><span><?php esc_html_e( 'Roadmap', 'houzez' ); ?></span></a></li>
                        <li><a href="#" class="houzezMapType" data-maptype="satellite"><span><?php esc_html_e( 'Satelite', 'houzez' ); ?></span></a></li>
                        <li><a href="#" class="houzezMapType" data-maptype="hybrid"><span><?php esc_html_e( 'Hybrid', 'houzez' ); ?></span></a></li>
                        <li><a href="#" class="houzezMapType" data-maptype="terrain"><span><?php esc_html_e( 'Terrain', 'houzez' ); ?></span></a></li>
                    </ul>
                    <button id="houzez-gmap-view" class="map-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fa fa-globe"></i> <span><?php esc_html_e( 'View', 'houzez' ); ?></span></button>

                    <button id="houzez-gmap-prev" class="map-btn"><i class="fa fa-chevron-left"></i> <span><?php esc_html_e('Prev', 'houzez'); ?></span></button>
                    <button id="houzez-gmap-next" class="map-btn"><span><?php esc_html_e('Next', 'houzez'); ?></span> <i class="fa fa-chevron-right"></i></button>
                </div>
                <div  class="map-zoom-actions">
                    <?php if( $geo_location != 0 ) { ?>
                        <span id="houzez-gmap-location" class="map-btn"><i class="fa fa-map-marker"></i> <span><?php esc_html_e('My location', 'houzez'); ?></span></span>
                    <?php } ?>
                    <?php if( $map_fullscreen != 0 ) { ?>
                        <span id="houzez-gmap-full"  class="map-btn"><i class="fa fa-arrows-alt"></i> <span><?php esc_html_e('Fullscreen', 'houzez'); ?></span></span>
                    <?php } ?>
                </div>

            </div>
        </div>
        <div class="az-col-map az-col-map3">
            <div class="module-half map-module-half fave-screen-fix">
                <?php get_template_part('template-parts/advanced-search/half-map'); ?>
                <!--start latest listing module-->
                <div class="houzez-module">
                    <!--start list tabs-->
                    <div class="list-tabs table-list full-width">
                        <div class="tabs table-cell">
                            <h2 class="tabs-title"><?php the_title(); ?></h2>
                        </div>
                        <div class="sort-tab table-cell text-right">
                            <span class="view-btn btn-list"><i class="fa fa-th-list"></i></span>
                            <span class="view-btn btn-grid active"><i class="fa fa-th-large"></i></span>
                            <span class="view-btn btn-map"><i class="fa fa-columns" aria-hidden="true"></i></span>
                        </div>
                    </div>
                    <!--end list tabs-->
                    <?php if( 0/*$enable_disable_save_search != 0*/ ) { ?>
                    <div class="tabs table-cell v-align-top">
                        <p><?php echo $houzez_local['save_search'];?></p>
                    </div>
                    <?php } ?>
                    <?php
                    if( $enable_disable_save_search != 0 ) {
                        get_template_part('template-parts/save', 'search');
                    }?>
                    <div class="property-listing grid-view">
                        <div class="row">
                            
                                
                                <div id="houzez_ajax_container">
                                    <?php
                                    global $wp_query, $paged;
                                    if ( is_front_page()  ) {
                                        $paged = (get_query_var('page')) ? get_query_var('page') : 1;
                                    }
                                    // $ls_status = $_POST['property_status'];
                                    // echo $ls_status;
                                    // if(0/*$ls_status == 'For Rent' || $ls_status == 'For Sale'*/){
                                    //     $latest_listing_args = array(
                                    //         'post_type' => 'property',
                                    //         'posts_per_page' => 10,//$posts_per_page,
                                    //         'paged' => $paged,
                                    //         'post_status' => 'publish',
                                    //         // 'property_status' => $ls_status,
                                    //     );
                                    // } else {
                                        
                                    // }
                                    $az_i = 0;

                                    //if( $search_result_page == 'half_map' ) {
                                        

                                    $latest_posts = new WP_Query( $latest_listing_args );

                                    if ( $latest_posts->have_posts() ) :
                                        while ( $latest_posts->have_posts() ) : $latest_posts->the_post();
                                            // echo 1111;//$ls_status;
                                    if($az_i%2==0):
                                    ?>
                                        <div class="az-col">
                                    <?php
                                    endif;
                                            get_template_part('template-parts/property-for-listing');
                                    if($az_i%2==1):
                                    ?>
                                        </div>
                                    <?php
                                    endif;
                                    if($az_i%4==3):
                                    ?>
                                        <div class="clearfix"></div>
                                    <?php
                                    endif;
                                    $az_i++;
                                        endwhile;
                                    else:
                                        get_template_part('template-parts/property', 'none');
                                    endif;
                                    wp_reset_postdata();
                                    ?>

                                    <hr>
                                    <!--start Pagination-->
                                    <?php //houzez_pagination( $latest_posts->max_num_pages, $range = 2 ); ?>
                                    <!--start Pagination-->

                                </div>
                            
                            </div>

                        </div>
                    </div>
                    <!--end latest listing module-->

                </div>
            </div>
        </div>
    </div>
</div>

</div><!-- #section Body -->
<?php wp_footer(); ?>

</body>
</html>
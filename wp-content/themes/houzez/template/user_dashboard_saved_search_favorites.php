<?php
/**
 * Template Name: User Dashboard Saved Search Favorites
 * Created by Anzarsh.
 * User: anzarsh
 * Date: 13/12/16
 * Time: 10:45 PM
 */

global $houzez_local, $current_user;

global $wpdb;
if(is_user_logged_in()){
    
    $userID         = $current_user->ID;
    $user_login     = $current_user->user_login;
    $fav_ids = 'houzez_favorites-'.$userID;
    $fav_ids = get_option( $fav_ids );
    $table_name     = $wpdb->prefix . 'houzez_search';
    $results        = $wpdb->get_results( 'SELECT * FROM ' . $table_name . ' WHERE auther_id = ' . $userID, OBJECT );

} else {
    $results = isset($_COOKIE['az_saved_search'])?unserialize(base64_decode($_COOKIE['az_saved_search'])):'';

    $fav_ids = unserialize(base64_decode($_COOKIE['az_favorites']));
}
get_header();
?>

<?php //get_template_part( 'template-parts/dashboard-title'); ?>
<div class="bg-white">
	<div class="row">
		<div class="col-lg-6 col-md-7 col-sm-12">
			<div class="user-dashboard-full">

			    <?php //get_template_part( 'template-parts/dashboard', 'menu' ); ?>

			    <div class="profile-top">
			        <div class="profile-top-left az-w-100">
				        <?php if ( qtrans_getLanguage() == 'en' ) {?>
					        <h2 class="title">Favorite</h2>
		            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
			            <h2 class="title az-title1">Избранное</h2>
		            <?php } ?>
			            <!-- <h2 class="title"><?php //the_title(); ?></h2> -->
			        </div>
			    </div>

			    <div class="profile-area-content">
			    <div class="account-block">
			        <!--start property items-->
			        <div class="property-listing list-view az-margin-none">
			            <div class="row">

			                <?php
			                if( !empty( $fav_ids ) ) {
			                    $args = array('post_type' => 'property', 'post__in' => $fav_ids);

			                    $myposts = get_posts($args);
			                    foreach ($myposts as $post) : setup_postdata($post);

			                        get_template_part('template-parts/property-for-listing');

			                    endforeach;
			                    wp_reset_postdata();
			                } else {
			                    echo '<div class="col-sm-12">';
			                    echo '<div class="az-message">';
			                    echo $houzez_local['favorite_not_found'];
			                    echo '</div>';
			                    echo '</div>';
			                }
			                ?>

			            </div>
			        </div>
			        <!--end property items-->
			    </div>
			    

			    <!--start Pagination-->
			    <?php houzez_pagination(); ?>
			    <!--start Pagination-->
			    </div>
			</div>
		</div>
		<div class="col-lg-6 col-md-5 col-sm-12">
			<div class="user-dashboard-full">
			    <?php //get_template_part( 'template-parts/dashboard', 'menu' ); ?>

			    <div class="profile-top">
			        <div class="profile-top-left az-w-100">
		        		<?php if ( qtrans_getLanguage() == 'en' ) {?>
					        <h2 class="title">Saved search</h2>
		            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
			            <h2 class="title az-title1">Сохр. поиск</h2>
		            <?php } ?>
			            <!-- <h2 class="title"><?php //the_title(); ?></h2> -->
			        </div>
			    </div>
			    <div class="profile-area-content">
			        <div class="account-block">
			            <div class="saved-search-list">
			                <?php
			                // echo 111;
			                // print_r( $results );
			                if ( sizeof( $results ) !== 0 && isset($_COOKIE['az_saved_search']) ) :

			                    foreach ( $results as $az_search_key => $houzez_search_data ) :

			                        get_template_part( 'template-parts/search', 'list' );

			                    endforeach;

			                else :

			                    echo '<div class="saved-search-message">'.$houzez_local['saved_search_not_found'].'</div>';

			                endif;

			                ?>
			            </div>
			        </div>
			    </div>

			</div>
		</div>

	</div>

	<div class="row">
		<div class="col-md-12 col-xs-12">
		<hr>
      <?php get_template_part( 'template-parts/az-form' ); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>
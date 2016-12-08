<?php
/**
 * Template Name: User Dashboard Saved Search
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 11/01/16
 * Time: 4:35 PM
 */
global $current_user;

wp_get_current_user();
$userID     = $current_user->ID;
$user_login = $current_user->user_login;
$fav_ids = 'houzez_favorites-'.$userID;
$fav_ids = get_option( $fav_ids );

global $wpdb;
if(is_user_logged_in()){
    $table_name     = $wpdb->prefix . 'houzez_search';
    $results        = $wpdb->get_results( 'SELECT * FROM ' . $table_name . ' WHERE auther_id = ' . $userID, OBJECT );
    // print_r($results);
} else {
    $results = unserialize(base64_decode($_COOKIE['az_saved_search']));
    // print_r($results);
}

// if(is_user_logged_in()){
//     if ( sizeof( $results ) === 0 ){
//         wp_redirect(  home_url() );
//     }
// } elseif( (!isset($_COOKIE['az_saved_search'])) || empty($results) ){
//     wp_redirect(  home_url() );
// }
// if ( !is_user_logged_in() ) {
//     wp_redirect(  home_url() );
// }




get_header(); ?>

<?php get_template_part( 'template-parts/dashboard-title'); ?>

    <div class="user-dashboard-full">
        <?php get_template_part( 'template-parts/dashboard', 'menu' ); ?>

        <div class="profile-top">
            <div class="profile-top-left">
                <h2 class="title"><?php the_title(); ?></h2>
            </div>
        </div>
        <div class="profile-area-content">
            <div class="account-block">
                <div class="saved-search-list">
                    <?php

                    // global $wpdb;
                    // if(is_user_logged_in()){
                    //     $table_name     = $wpdb->prefix . 'houzez_search';
                    //     $results        = $wpdb->get_results( 'SELECT * FROM ' . $table_name . ' WHERE auther_id = ' . $userID, OBJECT );
                    //     // print_r($results);
                    // } else {
                    //     $results = unserialize(base64_decode($_COOKIE['az_saved_search']));
                    //     // print_r($results);
                    // }
                    

                    if ( sizeof( $results ) !== 0 ) :
                        // $az_num ==
                        foreach ( $results as $az_search_key => $houzez_search_data ) :

                            get_template_part( 'template-parts/search', 'list' );

                        endforeach;

                    else :

                        echo '<div class="saved-search-message">'.esc_html__("You don't have any saved search", "houzez").'</div>';

                    endif;

                    ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
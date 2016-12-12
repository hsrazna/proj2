<?php
global $post, $current_user, $prop_images;
wp_get_current_user();

$key = '';
$userID      =   $current_user->ID;
$fav_option = 'houzez_favorites-'.$userID;
if(is_user_logged_in()){
	$fav_option = get_option( $fav_option );
} else {
	$fav_option = unserialize(base64_decode($_COOKIE['az_favorites']));//$_SESSION['az_houzez_favorites'];//get_option( $fav_option );
}
if( !empty($fav_option) ) {
    $key = array_search($post->ID, $fav_option);
}

if( $key != false || $key != '' ) {
    $fav_class = 'fa fa-star';//''fa fa-heart';
} else {
    $fav_class = 'fa fa-star-o';//'fa fa-heart-o';
}
?>
<span class="add_fav" data-toggle="tooltip" data-original-title="<?php esc_html_e('Favorite', 'houzez'); ?>" data-propid="<?php echo intval( $post->ID ); ?>"><i class="<?php echo esc_attr( $fav_class ); ?>"></i></span>
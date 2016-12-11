<?php
global $search_qry, $latest_listing_args;
$search_parameters = $min_price = $max_price = $min_area = $max_area = '';
if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if( isset( $_GET['type'] ) && !empty($_GET['type']) ) {
        $search_parameters = $_GET['type'].', ';
    }
    if( isset( $_GET['bedrooms'] ) && !empty($_GET['bedrooms']) && $_GET['bedrooms'] != 'any') {
        $search_parameters .= $_GET['bedrooms'].' '.esc_html__('Bedrooms', 'houzez').', ';
    }
    if( isset( $_GET['bathrooms'] ) && !empty($_GET['bathrooms']) && $_GET['bathrooms'] != 'any') {
        $search_parameters .= $_GET['bathrooms'].' '.esc_html__('Bathrooms', 'houzez').', ';
    }
    if( isset( $_GET['status'] ) && !empty($_GET['status']) ) {
        $search_parameters .= $_GET['status'].', ';
    }
    if( isset( $_GET['location'] ) && !empty($_GET['location']) ) {
        $search_parameters .= esc_html__('in', 'houzez').' '.$_GET['location'].', ';
    }
    if( isset( $_GET['area'] ) && !empty($_GET['area']) ) {
        $search_parameters .= $_GET['area'].', ';
    }
    if( isset( $_GET['keyword'] ) && !empty($_GET['keyword']) ) {
        $search_parameters .= $_GET['keyword'].', ';
    }
    if( isset( $_GET['min-price'] ) && !empty($_GET['min-price']) ) {
        $min_price = $_GET['min-price'];
    }
    if( isset( $_GET['max-price'] ) && !empty($_GET['max-price']) ) {
        $max_price = $_GET['max-price'];
    }
    if( isset( $_GET['min-area'] ) && !empty($_GET['min-area']) ) {
        $min_area = $_GET['min-area'];
    }
    if( isset( $_GET['max-area'] ) && !empty($_GET['max-area']) ) {
        $max_area = $_GET['max-area'];
    }
}else if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if( isset( $_POST['type'] ) && !empty($_POST['type']) ) {
        $search_parameters = $_POST['type'].', ';
    }
    if( isset( $_POST['bedrooms'] ) && !empty($_POST['bedrooms']) && $_POST['bedrooms'] != 'any') {
        $search_parameters .= $_POST['bedrooms'].' '.esc_html__('Bedrooms', 'houzez').', ';
    }
    if( isset( $_POST['bathrooms'] ) && !empty($_POST['bathrooms']) && $_POST['bathrooms'] != 'any') {
        $search_parameters .= $_POST['bathrooms'].' '.esc_html__('Bathrooms', 'houzez').', ';
    }
    if( isset( $_POST['status'] ) && !empty($_POST['status']) ) {
        $search_parameters .= $_POST['status'].', ';
    }
    if( isset( $_POST['location'] ) && !empty($_POST['location']) ) {
        $search_parameters .= esc_html__('in', 'houzez').' '.$_POST['location'].', ';
    }
    if( isset( $_POST['area'] ) && !empty($_POST['area']) ) {
        $search_parameters .= $_GET['area'].', ';
    }
    if( isset( $_POST['keyword'] ) && !empty($_POST['keyword']) ) {
        $search_parameters .= $_POST['keyword'].', ';
    }
    if( isset( $_POST['min-price'] ) && !empty($_POST['min-price']) ) {
        $min_price = $_POST['min-price'];
    }
    if( isset( $_POST['max-price'] ) && !empty($_POST['max-price']) ) {
        $max_price = $_POST['max-price'];
    }
    if( isset( $_POST['min-area'] ) && !empty($_POST['min-area']) ) {
        $min_area = $_POST['min-area'];
    }
    if( isset( $_POST['max-area'] ) && !empty($_POST['max-area']) ) {
        $max_area = $_POST['max-area'];
    }
}
if( !empty( $min_price ) && !empty( $max_price ) ) {
    $search_parameters .= esc_html__('From', 'houzez').' '.esc_attr( $min_price ).' '.esc_html__('to', 'houzez').' '.esc_attr( $max_price ).', ';
}
if( !empty( $min_price ) && !empty( $max_price ) ) {
    $search_parameters .= esc_html__('Area', 'houzez').' '.esc_attr( $min_area ).' '.esc_html__('to', 'houzez').' '.esc_attr( $max_area );
}
?>
<?php print_r($latest_listing_args); ?>
<?php echo 1231231; ?>
<div class="list-search">
    <form method="post" action="" id="save_search_form">

        <div class="input-level-down input-icon">
            <input placeholder="<?php esc_html_e('Search Listing', 'houzez'); ?>" class="form-control" readonly value="<?php echo esc_attr( $search_parameters ); ?>">
            <input type="hidden" name="search_args" value='<?php print base64_encode( serialize( $latest_listing_args/*$search_qry*/ ) ); ?>'>
            <input type="hidden" name="search_URI" value="<?php echo $_SERVER['REQUEST_URI'] ?>">
            <input type="hidden" name="action" value='houzez_save_search'>
            <input type="hidden" name="houzez_save_search_ajax" value="<?php echo wp_create_nonce('houzez-save-search-nounce')?>">
        </div>
        <span  id="save_search_click" class="save-btn"><?php esc_html_e( 'Save', 'houzez' ); ?></span>
    </form>
</div>
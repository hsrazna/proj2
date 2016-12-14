<?php
$mobile_menu_sticky = houzez_option('mobile-menu-sticky');
$create_lisiting_enable = houzez_option('create_lisiting_enable');
$header_onepage = '';
if ( is_page_template( 'template/template-onepage.php' ) ) {
	$header_onepage = 'header-single-page';
}
?>

<div class="header-mobile houzez-header-mobile <?php echo esc_attr($header_onepage); ?> visible-sm visible-xs"  data-sticky="<?php echo esc_attr( $mobile_menu_sticky ); ?>">
	<div class="container">
		<!--start mobile nav-->
		<div class="mobile-nav">
			<span class="nav-trigger"><i class="fa fa-navicon"></i></span>
			<div class="nav-dropdown main-nav-dropdown"></div>
		</div>
		<!--end mobile nav-->
		<div class="header-logo logo-mobile">
			<?php get_template_part('inc/header/logo-mobile'); ?>
		</div>
		
		<div class="ls-lang">
        <?php the_widget('qTranslateXWidget', array('type' => 'image', 'hide-title' => true, 'widget-css-off' => true) ); ?>
	    </div>
	    <?php if(!is_user_logged_in()): ?>
	        <div class="ls-favorites">
	            <a href="/saved-searches/"><!-- <i class="fa fa-star-o" aria-hidden="true"></i> --><i class="fa fa-star" aria-hidden="true"></i></a>
	        </div>
        <?php endif; ?>
		<?php if( class_exists('Houzez_login_register') ): ?>
			<?php if( houzez_option('header_login') != 'no' || $create_lisiting_enable != 0 ): ?>
				<div class="header-user">
					<?php get_template_part('inc/header/login-nav', 'mobile'); ?>
				</div>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</div>
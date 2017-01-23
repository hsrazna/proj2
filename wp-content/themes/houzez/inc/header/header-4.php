<?php
if ( is_page_template( 'template/template-splash.php' ) ) {
    $css_class = 'header-section slpash-header';
} else {
    $css_class = 'header-section-4 not-splash-header';
}

$allowed_html = array();

global $current_user, $post;
wp_get_current_user();
$userID  =  $current_user->ID;
$user_login = $current_user->user_login;
$user_custom_picture =  get_the_author_meta( 'fave_author_custom_picture' , $userID );
$header_layout = houzez_option('header_4_width');
$main_menu_sticky = houzez_option('main-menu-sticky');
$header_4_menu_align = houzez_option('header_4_menu_align');
$top_bar = houzez_option('top_bar');
$az_phone = get_user_meta( $userID, 'fave_author_phone', true );
$az_mobile = get_user_meta( $userID, 'fave_author_mobile', true );

$trans_class = '';
$fave_main_menu_trans = get_post_meta( $post->ID, 'fave_main_menu_trans', true );
if( $fave_main_menu_trans == 'yes' ) {
    $trans_class = 'houzez-header-transparent';
}

if( $top_bar != 0 ) {
    get_template_part('inc/header/top', 'bar');
}
$menu_righ_no_user = '';
$header_login = houzez_option('header_login');
if( $header_4_menu_align == 'nav-right' && $header_login != 'yes' ) {
    $menu_righ_no_user = 'menu-right-no-user';
}
?>
<!--start section header-->
<form method="post" class="az-menu-post"></form>
<?php if(1/*is_front_page()*/){ ?>
<div class="az-above-header az-dispay-block-md">
    <div class="container-fluid">
        <nav class="main-nav2">
            <?php
                wp_nav_menu( array (
                    // 'theme_location' => 'main menu2',
                    'menu' => 'main menu2',
                    'container' => '',
                    'container_class' => '',
                    'menu_class' => '',
                    'menu_id' => 'main-nav2',
                    'depth' => 4
                ));
            ?>
        </nav>
        <div class="az-tels">
            <span><?php //echo geoip_continent_code_by_name(); ?></span>
            <a href="tel:+66600035625"><strong>+66 (0) 60 00 35 625</strong></a>
            <span class="az-city">Пхукет</span>
            <span class="az-time"><strong>00<span>:</span>00</strong></span>
            &nbsp;&nbsp;|&nbsp;&nbsp;<a href="tel:+74996771664"><strong>+7499 677 1664</strong></a>
            <span class="az-city">Москва</span>
            <span class="az-time2"><strong>00<span>:</span>00</strong></span>&nbsp;&nbsp;|&nbsp;&nbsp;
        </div>
<!-- $_SERVER['REMOTE_ADDR'] -->

    </div>
    <div class="clearfix"></div>
</div>
<div class="az-above-header az-dispay-none-md">
    <div class="container">
        <nav class="main-nav2">
            <?php
                wp_nav_menu( array (
                    // 'theme_location' => 'main menu2',
                    'menu' => 'main menu2',
                    'container' => '',
                    'container_class' => '',
                    'menu_class' => '',
                    'menu_id' => 'main-nav2',
                    'depth' => 4
                ));
            ?>
        </nav>
    </div>
    <div class="clearfix"></div>
</div>
<?php } ?>
<header id="header-section" class="houzez-header-main <?php echo esc_attr( $css_class ).' '.esc_attr( $header_4_menu_align ).' '.esc_attr($trans_class).' '.esc_attr($menu_righ_no_user); ?> hidden-sm hidden-xs" data-sticky="<?php echo esc_attr( $main_menu_sticky ); ?>">

    <div class="<?php echo sanitize_html_class( $header_layout ); ?>">
        <div class="header-left">

            <div class="ls-md-menu">
                <div class="mobile-nav">
                    <span class="nav-trigger"><i class="fa fa-navicon"></i></span>
                    <div class="nav-dropdown main-nav-dropdown"></div>
                </div>
            </div>

            <div class="logo logo-desktop">
                <?php get_template_part('inc/header/logo'); ?>
            </div>

            <div class="ls-soc" style="display: none;">
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-vk" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
            </div>

            <div class="ls-phone"><a href="tel:+66600035625">+66 6000 35 625 <i class="fa fa-phone" aria-hidden="true"></i></a></div>
            <?php if ( qtrans_getLanguage() == 'en' ) {?>
            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
            <?php } ?>
            <div class="ls-call">
                <?php if(is_user_logged_in()): ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <a href="#" class="btn btn-orange az-btn" data-user-id="<?=$userID?>" data-user-login="<?=$user_login?>" data-user-phone="<?=$az_phone?1:0?>" data-user-mobile="<?=$az_mobile?1:0?>">Request a call</a>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <a href="#" class="btn btn-orange az-btn az-reg" data-user-id="<?=$userID?>" data-user-login="<?=$user_login?>" data-user-phone="<?=$az_phone?1:0?>" data-user-mobile="<?=$az_mobile?1:0?>">Заказать звонок</a>
                    <?php } ?>
                <?php else: ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <a href="#" class="btn btn-orange az-btn">Request a call</a>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <a href="#" class="btn btn-orange az-btn az-reg">Заказать звонок</a>
                    <?php } ?>
                <?php endif; ?>
            </div>

            <!-- <nav class="navi main-nav ls-lg-menu">
                <?php
                // Pages Menu
                if ( has_nav_menu( 'main-menu' ) ) :
                    wp_nav_menu( array (
                        'theme_location' => 'main-menu',
                        'container' => '',
                        'container_class' => '',
                        'menu_class' => '',
                        'menu_id' => 'main-nav',
                        'depth' => 4
                    ));
                endif;
                ?>
            </nav> -->
            <?php if(0/*is_front_page()*/): ?>
                <div class="ls-search">
                    <form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                        <div class="az-rel">
                            <input value="" name="s" id="s" type="text">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                            <div class="az-azsearch"></div>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>

        <?php if( class_exists('Houzez_login_register') ): ?>
            <?php if( houzez_option('header_login') != 'no' || houzez_option('create_lisiting_enable') != 0 ): ?>
                <div class="header-right">
                    
                    <div class="ls-lang az-margin-right15">
                        <?php the_widget('qTranslateXWidget', array('type' => 'image', 'hide-title' => true, 'widget-css-off' => true) ); ?>
                    </div>
                    <?php if(1/*!is_user_logged_in()*/): ?>
                    <div class="ls-favorites az-margin-right15">
                        <a href="/favorite/"><i class="fa fa-star-o" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></a>
                    </div>
                    <?php endif; ?>
                    <?php get_template_part('inc/header/login', 'nav'); ?>
                    <!--  az-margin-right15 -->
                    <nav class="navi main-nav ls-lg-menu">
                        <?php
                        // Pages Menu
                        if ( has_nav_menu( 'main-menu' ) ) :
                            wp_nav_menu( array (
                                'theme_location' => 'main-menu',
                                'container' => '',
                                'container_class' => '',
                                'menu_class' => '',
                                'menu_id' => 'main-nav',
                                'depth' => 4
                            ));
                        endif;
                        ?>
                    </nav>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>

</header>
<!--end section header-->

<?php get_template_part( 'inc/header/mobile-header' ); ?>

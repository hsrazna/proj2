<?php
/**
 * Created by PhpStorm.
 * User: waqasriaz
 * Date: 13/01/16
 * Time: 2:24 PM
 */
global $current_user;
wp_get_current_user();
$userID                 =   $current_user->ID;
$user_login             =   $current_user->user_login;
?>
<div class="page-title">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-left">
                <?php if(is_user_logged_in()){ ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <h1 class="title-head"><?php esc_html_e('Welcome back, ','houzez'); echo esc_attr( $user_login );?></h1>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <h1 class="title-head az-title1"><?php esc_html_e('Добро пожаловать, ','houzez'); echo esc_attr( $user_login );?></h1>
                    <?php } ?>
                <?php }else{ ?>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <h1 class="title-head"><?php esc_html_e('Welcome back, ','houzez'); echo esc_attr( 'guest' );?></h1>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <h1 class="title-head az-title1"><?php esc_html_e('Добро пожаловать, ','houzez'); echo esc_attr( 'гость' );?></h1>
                    <?php } ?>
                <?php } ?>
            </div>
            <div class="page-title-right">
                <?php get_template_part( 'inc/breadcrumb' ); ?>
            </div>
        </div>
    </div>
</div>
<?php
global $current_user;
wp_get_current_user();
$userID  =  $current_user->ID;
$user_custom_picture =  get_the_author_meta( 'fave_author_custom_picture' , $userID );
$header_type = houzez_option('header_style');

if( empty( $user_custom_picture )) {
    $user_custom_picture = get_template_directory_uri().'/images/profile-avatar.png';
}

$dash_profile_link = houzez_get_dashboard_profile_link();
$dashboard_listings = houzez_dashboard_listings();
$dashboard_add_listing = houzez_dashboard_add_listing();
$dashboard_favorites = houzez_dashboard_favorites_link();
$dashboard_search = houzez_dashboard_saved_search_link();
$dashboard_invoices = houzez_dashboard_invoices_link();

$header_create_listing_template = houzez_get_template_link('template/submit_property.php');
$create_listing_button_required_login = houzez_option('create_listing_button');
$create_lisiting_enable = houzez_option('create_lisiting_enable');

$home_link = home_url('/');

$ac_profile = $ac_props = $ac_add_prop = $ac_fav = $ac_search = $ac_invoices = '';
if( is_page_template( 'template/user_dashboard_profile.php' ) ) {
    $ac_profile = 'class=active';
} elseif ( is_page_template( 'template/user_dashboard_properties.php' ) ) {
    $ac_props = 'class=active';
} elseif ( is_page_template( 'template/submit_property.php' ) ) {
    $ac_add_prop = 'class=active';
} elseif ( 0/*is_page_template( 'template/user_dashboard_saved_search.php' )*/ ) {
    $ac_search = 'class=active';
} elseif ( is_page_template( 'template/user_dashboard_saved_search_favorites.php' ) ) { //is_page_template( 'template/user_dashboard_favorites.php' )
    $ac_fav = 'class=active';
} elseif ( is_page_template( 'template/user_dashboard_invoices.php' ) ) {
    $ac_invoices = 'class=active';
}

?>

<?php if( is_user_logged_in() ) { ?>
    <ul class="account-action">
        <li>
            <span class="hidden-sm hidden-xs az-login"><?php echo esc_attr( $current_user->display_name ); ?> <i class="fa fa-angle-down"></i></span>
            <img src="<?php echo esc_url( $user_custom_picture ); ?>" width="36" height="36" class="user-image" alt="profile image">

            <div class="account-dropdown">
                <ul>
                    <?php if ( qtrans_getLanguage() == 'en' ) {?>
                    <?php
                        if( $home_link != $dash_profile_link ) {
                            echo '<li ' . esc_attr( $ac_profile ) . '> <a href="' . esc_url($dash_profile_link) . '"> <i class="fa fa-user"></i>' . esc_html__('My profile', 'houzez') . '</a></li>';
                        }
                        if( $home_link != $dashboard_listings && houzez_check_role() ) {
                            echo '<li ' . esc_attr( $ac_props ) . '> <a href="' . esc_url($dashboard_listings) . '"> <i class="fa fa-building"></i>' . esc_html__('My Properties', 'houzez') . '</a></li>';
                        }
                        if( $home_link != $dashboard_add_listing && houzez_check_role() ) {
                            echo '<li ' . esc_attr( $ac_add_prop ) . '> <a href="' . esc_url($dashboard_add_listing) . '"> <i class="fa fa-plus-circle"></i>' . esc_html__('Add new property', 'houzez') . '</a></li>';
                        }
                        // <i class="fa fa-heart"></i>
                        if( $home_link != $dashboard_favorites ) {
                            echo '<li ' . esc_attr( $ac_fav ) . '> <a href="' . esc_url($dashboard_favorites) . '"> <i class="fa fa-star" aria-hidden="true"></i>' . esc_html__('Favourite properties', 'houzez') . '</a></li>';
                        }
                        if( 0/*$home_link != $dashboard_search*/ ) {
                            echo '<li ' . esc_attr( $ac_search ) . '> <a href="' . esc_url($dashboard_search) . '"> <i class="fa fa-search-plus"></i>' . esc_html__('Saved searches', 'houzez') . '</a></li>';
                        }
                        if( $home_link != $dashboard_invoices && houzez_check_role() ) {
                            echo '<li ' . esc_attr( $ac_invoices ) . '> <a href="' . esc_url($dashboard_invoices) . '"> <i class="fa fa-file"></i>' . esc_html__('Invoices', 'houzez') . '</a></li>';
                        }

                        echo '<li><a href="'.wp_logout_url( home_url('/') ).'"> <i class="fa fa-unlock"></i>'.esc_html__( 'Log out', 'houzez' ).'</a></li>';
                    ?>
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                    <?php
                        if( $home_link != $dash_profile_link ) {
                            echo '<li ' . esc_attr( $ac_profile ) . '> <a href="' . esc_url($dash_profile_link) . '" class="az-text3"> <i class="fa fa-user"></i>' . esc_html__('Профиль', 'houzez') . '</a></li>';
                        }
                        if( $home_link != $dashboard_listings && houzez_check_role() ) {
                            echo '<li ' . esc_attr( $ac_props ) . '> <a href="' . esc_url($dashboard_listings) . '" class="az-text3"> <i class="fa fa-building"></i>' . esc_html__('Недвижимость', 'houzez') . '</a></li>';
                        }
                        if( $home_link != $dashboard_add_listing && houzez_check_role() ) {
                            echo '<li ' . esc_attr( $ac_add_prop ) . '> <a href="' . esc_url($dashboard_add_listing) . '" class="az-text3"> <i class="fa fa-plus-circle"></i>' . esc_html__('Добавить нов. недв.', 'houzez') . '</a></li>';
                        }
                        //<i class="fa fa-heart">
                        if( $home_link != $dashboard_favorites ) {
                            echo '<li ' . esc_attr( $ac_fav ) . '> <a href="' . esc_url($dashboard_favorites) . '" class="az-text3"> <i class="fa fa-star" aria-hidden="true"></i></i>' . esc_html__('Избранное', 'houzez') . '</a></li>';
                        }
                        if( 0/*$home_link != $dashboard_search*/ ) {
                            echo '<li ' . esc_attr( $ac_search ) . '> <a href="' . esc_url($dashboard_search) . '" class="az-text3"> <i class="fa fa-search-plus"></i>' . esc_html__('Сохр. поиск', 'houzez') . '</a></li>';
                        }
                        if( $home_link != $dashboard_invoices && houzez_check_role() ) {
                            echo '<li ' . esc_attr( $ac_invoices ) . '> <a href="' . esc_url($dashboard_invoices) . '" class="az-text3"> <i class="fa fa-file"></i>' . esc_html__('Счета', 'houzez') . '</a></li>';
                        }

                        echo '<li><a href="'.wp_logout_url( home_url('/') ).'" class="az-text3"> <i class="fa fa-unlock"></i>'.esc_html__( 'Выход', 'houzez' ).'</a></li>';
                    ?>
                    <?php } ?>
                </ul>
            </div>

        </li>
    </ul>
<?php } else { ?>
    <div class="user">

            <?php
            if( houzez_option('header_login') != 'no' ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo '<a href="#" data-toggle="modal" data-target="#pop-login"><i class="fa fa-user-o" aria-hidden="true"></i><i class="fa fa-user"></i></a>';
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo '<a href="#" data-toggle="modal" data-target="#pop-login"><i class="fa fa-user-o" aria-hidden="true"></i><i class="fa fa-user"></i></a>';
                }
            }
            if( 0/*houzez_option('header_login') != 'no'*/ ) {
                if ( qtrans_getLanguage() == 'en' ) {
                    echo '<a href="#" data-toggle="modal" data-target="#pop-login"><i class="fa fa-user hidden-md hidden-lg"></i> <span class="hidden-sm hidden-xs az-margin-right15">'.esc_html__( 'Sign In / Register', 'houzez' ).'</span></a>';
                } elseif ( qtrans_getLanguage() == 'ru' ) {
                    echo '<a href="#" data-toggle="modal" data-target="#pop-login"><i class="fa fa-user hidden-md hidden-lg"></i> <span class="hidden-sm hidden-xs az-title1 az-margin-right15">'.esc_html__( 'Вход / Регистрация', 'houzez' ).'</span></a>';
                }
            }
            if(0):
                if( $create_lisiting_enable != 0 ) {
                    if( $create_listing_button_required_login == 'yes' ) {
                        echo '<a href="#" data-toggle="modal" data-target="#pop-login" class="btn btn-default hidden-xs hidden-sm">'.esc_html__( 'Create Listing', 'houzez' ).'</a>';

                    } else {
                        if( !empty($header_create_listing_template) && $header_create_listing_template != $home_link ) {
                            echo '<a href="'.esc_url( $header_create_listing_template ).'" class="btn btn-default hidden-xs hidden-sm">'.esc_html__( 'Create Listing', 'houzez' ).'</a>';
                        }
                    }
                
                }
            endif;
            ?>
    </div>
<?php } ?>

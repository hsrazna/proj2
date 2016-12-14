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
    $table_name     = $wpdb->prefix . 'houzez_search';
    $results        = $wpdb->get_results( 'SELECT * FROM ' . $table_name . ' WHERE auther_id = ' . $userID, OBJECT );

    $userID         = $current_user->ID;
    $user_login     = $current_user->user_login;
    $fav_ids = 'houzez_favorites-'.$userID;
    $fav_ids = get_option( $fav_ids );
} else {
    $results = unserialize(base64_decode($_COOKIE['az_saved_search']));

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
			        <div class="property-listing list-view">
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
			                    echo $houzez_local['favorite_not_found'];
			                    echo '</div>';
			                }
			                ?>

			            </div>
			        </div>
			        <!--end property items-->
			    </div>
			    <hr>

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

			                if ( sizeof( $results ) !== 0 ) :

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
			<div class="az-request-form">
				<div class="col-sm-6 col-xs-12">
	                <div class="form-group">
	                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <input class="form-control az-name" name="az-name"
                   placeholder="<?php esc_html_e('Your Name', 'houzez'); ?>" type="text">
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <input class="form-control az-name" style="font-family: 'OpenSans-Regular';" name="az-name" placeholder="<?php esc_html_e('Имя', 'houzez'); ?>" type="text">
                    <?php } ?>
	                    
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-sm-6 col-xs-12">
	                <div class="form-group">
	                    <input class="form-control az-email" name="az-email" placeholder="<?php esc_html_e('Email', 'houzez'); ?>" type="text">
	                </div>
	            </div>
	            <div class="col-sm-6 col-xs-12">
		            <div class="form-group pull-left">
	                    <div class="checkbox">
	                        <label style="display: none;">
	                            <input style="display: none;" name="az-reg" id="az-reg" type="checkbox" checked="checked">
	                            <?php if ( qtrans_getLanguage() == 'en' ) {?>
	                                <?php esc_html_e( 'Register', 'houzez' ); ?>
	                            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
	                                <?php esc_html_e( 'Зарегистрироваться', 'houzez' ); ?>
	                            <?php } ?>
	                        </label>
	                    </div>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-sm-6 col-xs-12">
	                <div class="form-group">
	                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <input class="form-control" name="az-phone" placeholder="<?php esc_html_e('Your phone', 'houzez'); ?>" type="text">
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-phone" placeholder="<?php esc_html_e('Телефон', 'houzez'); ?>" type="text">
                    <?php } ?>
	                </div>
	            </div>
	            <div class="col-sm-6 col-xs-12">
	                <div class="form-group">
	                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <input class="form-control" name="az-best-time" placeholder="<?php esc_html_e('Convenient time to call back', 'houzez'); ?>" type="text">
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-best-time" placeholder="<?php esc_html_e('Удобное время для связи', 'houzez'); ?>" type="text">
                    <?php } ?>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-sm-6 col-xs-12">
		            <div class="form-group">
		            	<input type="text" name="daterange" value="" id="as123"/>
	            	</div>
	            </div>
	            <div class="col-sm-6 col-xs-12">
		            <div class="form-group">
	                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <input class="form-control" name="az-call-me" placeholder="<?php esc_html_e('', 'houzez'); ?>" type="text">
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-phone" placeholder="<?php esc_html_e('Позвоните мне я расскажу детали', 'houzez'); ?>" type="text">
                    <?php } ?>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-sm-6 col-xs-12">
		            <div class="form-group pull-left">
	                    <div class="checkbox">
	                        <label>
	                            <input name="az-b-ticket" id="az-b-ticket" type="checkbox">
	                            <?php if ( qtrans_getLanguage() == 'en' ) {?>
	                                <?php esc_html_e( 'Have you already bought tickets?', 'houzez' ); ?>
	                            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
	                                <?php esc_html_e( 'Вы уже приобрели билеты?', 'houzez' ); ?>
	                            <?php } ?>
	                        </label>
	                    </div>
	                </div>
	            </div>
	            <div class="col-sm-6 col-xs-12">
		            <div class="form-group pull-left">
	                    <div class="checkbox">
	                        <label>
	                            <input name="az-choose-ticket" id="az-choose-ticket" type="checkbox">
	                            <?php if ( qtrans_getLanguage() == 'en' ) {?>
	                                <?php esc_html_e( '', 'houzez' ); ?>
	                            <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
	                                <?php esc_html_e( 'Подобрать билеты?', 'houzez' ); ?>
	                            <?php } ?>
	                        </label>
	                    </div>
	                </div>
	            </div>
	            <div class="clearfix"></div>
	            <div class="col-sm-6 col-xs-12">
		            <div class="form-group">
	                <?php if ( qtrans_getLanguage() == 'en' ) {?>
                        <input class="form-control" name="az-call-me" placeholder="<?php esc_html_e('', 'houzez'); ?>" type="text">
                    <?php } elseif ( qtrans_getLanguage() == 'ru' ) { ?>
                        <input class="form-control" style="font-family: 'OpenSans-Regular';" name="az-phone" placeholder="<?php esc_html_e('Предпочтения по району и типу жилья', 'houzez'); ?>" type="text">
                    <?php } ?>
	                </div>
	            </div>
	            <div class="col-sm-3 col-xs-6">
                    <select class="selectpicker" name="az-male" data-live-search="false" data-live-search-style="begins">
                        <option value>Количество <i class="fa fa-male" aria-hidden="true"></i></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="col-sm-3 col-xs-6">
                    <select class="selectpicker" name="az-child" data-live-search="false" data-live-search-style="begins">
                        <option value><i class="fa fa-child"></i></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>
                <div class="clearfix"></div>
                <div class="col-sm-12 col-xs-12">
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5"
                                  placeholder="<?php esc_html_e('Message', 'houzez'); ?>"><?php esc_html_e("Hello, I'm interested in", "houzez"); ?> [<?php echo get_the_title(); ?>]</textarea>
                    </div>
                </div>
                <button
                        class="agent_contact_form btn btn-orange"><?php esc_html_e('Request info', 'houzez'); ?></button>
            </div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
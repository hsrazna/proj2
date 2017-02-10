<?php
/**
 * Houzez functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Houzez
 * @since Houzez 1.0
 * @author Waqas Riaz
 */

include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
/**
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*	Define constants
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*/
define( 'HOUZEZ_THEME_NAME', 'Houzez' );
define( 'HOUZEZ_THEME_SLUG', 'houzez' );
define( 'HOUZEZ_THEME_VERSION', '1.4.5' );

/**
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*	Set up theme default and register various supported features.
*	----------------------------------------------------------------------------------------------------------------------------------------------------
*/
if ( ! function_exists( 'houzez_setup' ) ) {
	function houzez_setup() {

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		//Let WordPress manage the document title.
		add_theme_support( 'title-tag' );

		//Add support for post thumbnails.
		add_theme_support( 'post-thumbnails' );

		set_post_thumbnail_size( 150, 150 );
		add_image_size( 'houzez-single-big-size', 1170, 600, true ); // toparea-v1.php , single-property.php
		add_image_size( 'houzez-property-thumb-image', 385, 258, true ); // List, grid view. Include VC modules grid view, content-grid-1.php
		add_image_size( 'houzez-property-thumb-image-v2', 380, 280, true ); // List, grid view. Include VC modules grid view, content-grid-1.php
		add_image_size( 'houzez-image570_340', 570, 340, true ); // for property carousels and property grids
		add_image_size( 'houzez-property-detail-gallery', 810, 430, true ); // Slideshow.php , blog-function.php
		add_image_size( 'houzez-imageSize1170_738', 1170, 738, true ); // lightbox.php , toparea-v2.php
		add_image_size( 'houzez-prop_image1440_610', 1440, 610, true ); // property-slider.php
		add_image_size( 'houzez-image350_350', 350, 350, true ); // author.php , content-grid-2.php , single-houzez_agent.php , template-agent.php
		add_image_size( 'houzez-widget-prop', 150, 110, true ); // slideshow.php , dashboard_property_unit.php
		add_image_size( 'houzez-image_masonry', 350, 9999, false ); // blog-masonry.php
		

		/**
		*	Register nav menus. 
		*/
		register_nav_menus(
			array(
				'main-menu' => esc_html__( 'Main Menu', 'houzez' ),
				'top-menu' => esc_html__( 'Top Menu', 'houzez' ),
				'footer-menu' => esc_html__( 'Footer Menu', 'houzez' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*
		 * Enable support for Post Formats.
		 * See https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array(

		) );

		//remove gallery style css
		add_filter( 'use_default_gallery_style', '__return_false' );
		
	}

	add_action( 'after_setup_theme', 'houzez_setup' );
}

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Make the theme available for translation.
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
load_theme_textdomain( 'houzez', get_template_directory() . '/languages' );

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Set up the content width value based on the theme's design.
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
if( !function_exists('houzez_content_width') ) {
	function houzez_content_width()
	{
		$GLOBALS['content_width'] = apply_filters('houzez_content_width', 1170);
	}

	add_action('after_setup_theme', 'houzez_content_width', 0);
}


/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Enqueue scripts and styles.
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/inc/register-scripts.php' );

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	TMG plugin activation
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
	require_once( get_template_directory() . '/framework/class-tgm-plugin-activation.php' );
	require_once( get_template_directory() . '/framework/register-plugins.php' );

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Visual Composer
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
if (is_plugin_active('js_composer/js_composer.php') && is_plugin_active('houzez-theme-functionality/houzez-theme-functionality.php') ) {

	if( !function_exists('houzez_include_composer') ) {
		function houzez_include_composer()
		{
			require_once(get_template_directory() . '/framework/vc_extend.php');
		}

		add_action('init', 'houzez_include_composer', 9999);
	}

	// Filter to replace default css class names for vc_row shortcode and vc_column
	if( !function_exists('houzez_custom_css_classes_for_vc_row_and_vc_column') ) {
		add_filter('vc_shortcodes_css_class', 'houzez_custom_css_classes_for_vc_row_and_vc_column', 10, 2);
		function houzez_custom_css_classes_for_vc_row_and_vc_column($class_string, $tag)
		{
			if ($tag == 'vc_row' || $tag == 'vc_row_inner') {
				$class_string = str_replace('vc_row-fluid', 'row-fluid', $class_string); // This will replace "vc_row-fluid" with "my_row-fluid"
				$class_string = str_replace('vc_row', 'row', $class_string); // This will replace "vc_row-fluid" with "my_row-fluid"
				$class_string = str_replace('wpb_row', '', $class_string); // This will replace "vc_row-fluid" with "my_row-fluid"
			}
			if ($tag == 'vc_column' || $tag == 'vc_column_inner') {
				$class_string = preg_replace('/vc_col-sm-(\d{1,2})/', 'col-sm-$1', $class_string); // This will replace "vc_col-sm-%" with "my_col-sm-%"
				$class_string = str_replace('wpb_column', '', $class_string);
				$class_string = str_replace('vc_column_container', '', $class_string);
			}
			return $class_string; // Important: you should always return modified or original $class_string
		}
	}

}

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Functions
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/functions/price_functions.php' );
require_once( get_template_directory() . '/framework/functions/currency_switcher_functions.php' );
require_once( get_template_directory() . '/framework/functions/helper_functions.php' );
require_once( get_template_directory() . '/framework/functions/profile_functions.php' );
require_once( get_template_directory() . '/framework/functions/property_functions.php' );
require_once( get_template_directory() . '/framework/functions/emails-functions.php' );
require_once( get_template_directory() . '/framework/functions/blog-functions.php' );
require_once( get_template_directory() . '/framework/functions/membership-functions.php' );
require_once( get_template_directory() . '/framework/functions/cron-functions.php' );
require_once( get_template_directory() . '/framework/functions/houzez-localization.php' );
require_once( get_template_directory() . '/framework/functions/db-update.php' );
require_once( get_template_directory() . '/inc/header/favicon-apple-icons.php' );
require_once( get_template_directory() . '/inc/yelpauth/yelpoauth.php' );

if ( class_exists( 'ReduxFramework' ) ) {
	require_once( get_template_directory() . '/inc/styling-options.php' );
	require_once( get_template_directory() . '/framework/functions/demo-importer.php' );
}

/**
 *	---------------------------------------------------------------------------------------
 *	Widgets
 *	---------------------------------------------------------------------------------------
 */
require_once ( get_template_directory() . '/inc/widgets/houzez-featured-properties.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-properties.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-property-taxonomies.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-advanced-search.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-about.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-contact.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-latest-posts.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-code-banner.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-facebook.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-flickr-photos.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-image-banner-300-250.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-mortgage-calculator.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-instagram.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-twitter.php' );
require_once ( get_template_directory() . '/inc/widgets/houzez-properties-viewed.php' );

if( class_exists('Houzez_login_register') ) {
	require_once( get_template_directory() . '/inc/widgets/houzez-login-widget.php');
}

/**
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 *	Twitter Oauth
 *	----------------------------------------------------------------------------------------------------------------------------------------------------
 */
if(!class_exists('TwitterOAuth',false)) {
	require_once( get_template_directory() . '/inc/twitteroauth/twitteroauth.php' );
}


/**
 *	---------------------------------------------------------------------------------------
 *	Classes
 *	---------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/classes/houzez_data_source.php' );
require_once( get_template_directory() . '/framework/classes/Houzez_Compare_Properties.php' );

/**
 *	---------------------------------------------------------------------------------------
 *	Meta Boxes
 *	---------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/metaboxes/metaboxes.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-status-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-label-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-area-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-cities-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/property-state-meta.php' );
require_once( get_template_directory() . '/framework/metaboxes/houzez-meta-boxes.php' );

/**
 *	---------------------------------------------------------------------------------------
 *	Options Admin Panel
 *	---------------------------------------------------------------------------------------
 */
require_once( get_template_directory() . '/framework/options/remove-tracking-class.php' ); // Remove tracking
require_once( get_template_directory() . '/framework/options/fave-options.php' );
require_once( get_template_directory() . '/framework/options/fave-option.php' );



/*-----------------------------------------------------------------------------------*/
/*	Register blog sidebar, footer and custom sidebar
/*-----------------------------------------------------------------------------------*/
if( !function_exists('houzez_widgets_init') ) {
	add_action('widgets_init', 'houzez_widgets_init');
	function houzez_widgets_init()
	{
		register_sidebar(array(
			'name' => esc_html__('Default Sidebar', 'houzez'),
			'id' => 'default-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in the blog sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Property Listings', 'houzez'),
			'id' => 'property-listing',
			'description' => esc_html__('Widgets in this area will be shown in property listings sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Single Property', 'houzez'),
			'id' => 'single-property',
			'description' => esc_html__('Widgets in this area will be shown in single property sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Agency Sidebar', 'houzez'),
			'id' => 'agency-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in agencies template and agency detail page.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Agent Sidebar', 'houzez'),
			'id' => 'agent-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in agents template and angent detail page.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Search Sidebar', 'houzez'),
			'id' => 'search-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in search result page.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Page Sidebar', 'houzez'),
			'id' => 'page-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in page sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('IDX Sidebar', 'houzez'),
			'id' => 'idx-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in idx template sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Create Listing Sidebar', 'houzez'),
			'id' => 'create-listing-sidebar',
			'description' => esc_html__('Widgets in this area will be shown in create listing sidebar.', 'houzez'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 1', 'houzez'),
			'id' => 'footer-sidebar-1',
			'description' => esc_html__('Widgets in this area will be show in footer column one', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 2', 'houzez'),
			'id' => 'footer-sidebar-2',
			'description' => esc_html__('Widgets in this area will be show in footer column two', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 3', 'houzez'),
			'id' => 'footer-sidebar-3',
			'description' => esc_html__('Widgets in this area will be show in footer column three', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
		register_sidebar(array(
			'name' => esc_html__('Footer Area 4', 'houzez'),
			'id' => 'footer-sidebar-4',
			'description' => esc_html__('Widgets in this area will be show in footer column four', 'houzez'),
			'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<div class="widget-top"><h3 class="widget-title">',
			'after_title' => '</h3></div>',
		));
	}
}

if ( ! current_user_can( 'manage_options' ) ) {
	show_admin_bar( false );
}

if( !function_exists('houzez_vcSetAsTheme') ) {
	add_action('vc_before_init', 'houzez_vcSetAsTheme');
	function houzez_vcSetAsTheme()
	{
		vc_set_as_theme($disable_updater = false);
	}
}

if ( !function_exists( 'houzez_block_users' ) ) :

	add_action( 'init', 'houzez_block_users' );

	function houzez_block_users() {
		$users_admin_access = houzez_option('users_admin_access');

		if( is_user_logged_in() ) {
			if ($users_admin_access != 0) {
				if (is_admin() && !current_user_can('administrator') && !(defined('DOING_AJAX') && DOING_AJAX)) {
					wp_die(esc_html("You don't have permission to access this page.", "Houzez"));
					exit;
				}
			}
		}

	}

endif;

if( class_exists('iHomefinderAutoloader') ) {
	function remove_bb_bootstrap() {
		wp_dequeue_script('bootstrap.min');
	}

	add_action('wp_enqueue_scripts', 'remove_bb_bootstrap', 1000);
}

/*
 * Функция создает дубликат поста в виде черновика и редиректит на его страницу редактирования
 */
function true_duplicate_post_as_draft(){
	global $wpdb;
	if (! ( isset( $_GET['post']) || isset( $_POST['post'])  || ( isset($_REQUEST['action']) && 'true_duplicate_post_as_draft' == $_REQUEST['action'] ) ) ) {
		wp_die('Нечего дублировать!');
	}
 
	/*
	 * получаем ID оригинального поста
	 */
	$post_id = (isset($_GET['post']) ? $_GET['post'] : $_POST['post']);
	/*
	 * а затем и все его данные
	 */
	$post = get_post( $post_id );
 
	/*
	 * если вы не хотите, чтобы текущий автор был автором нового поста
	 * тогда замените следующие две строчки на: $new_post_author = $post->post_author;
	 * при замене этих строк автор будет копироваться из оригинального поста
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;
 
	/*
	 * если пост существует, создаем его дубликат
	 */
	if (isset( $post ) && $post != null) {
 
		/*
		 * массив данных нового поста
		 */
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft', // черновик, если хотите сразу публиковать - замените на publish
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);
 
		/*
		 * создаем пост при помощи функции wp_insert_post()
		 */
		$new_post_id = wp_insert_post( $args );
 
		/*
		 * присваиваем новому посту все элементы таксономий (рубрики, метки и т.д.) старого
		 */
		$taxonomies = get_object_taxonomies($post->post_type); // возвращает массив названий таксономий, используемых для указанного типа поста, например array("category", "post_tag");
		foreach ($taxonomies as $taxonomy) {
			$post_terms = wp_get_object_terms($post_id, $taxonomy, array('fields' => 'slugs'));
			wp_set_object_terms($new_post_id, $post_terms, $taxonomy, false);
		}
 
		/*
		 * дублируем все произвольные поля
		 */
		$post_meta_infos = $wpdb->get_results("SELECT meta_key, meta_value FROM $wpdb->postmeta WHERE post_id=$post_id");
		if (count($post_meta_infos)!=0) {
			$sql_query = "INSERT INTO $wpdb->postmeta (post_id, meta_key, meta_value) ";
			foreach ($post_meta_infos as $meta_info) {
				$meta_key = $meta_info->meta_key;
				$meta_value = addslashes($meta_info->meta_value);
				$sql_query_sel[]= "SELECT $new_post_id, '$meta_key', '$meta_value'";
			}
			$sql_query.= implode(" UNION ALL ", $sql_query_sel);
			$wpdb->query($sql_query);
		}
 
 
		/*
		 * и наконец, перенаправляем пользователя на страницу редактирования нового поста
		 */
		wp_redirect( admin_url( 'post.php?action=edit&post=' . $new_post_id ) );
		exit;
	} else {
		wp_die('Ошибка создания поста, не могу найти оригинальный пост с ID=: ' . $post_id);
	}
}
add_action( 'admin_action_true_duplicate_post_as_draft', 'true_duplicate_post_as_draft' );
 
/*
 * Добавляем ссылку дублирования поста для post_row_actions
 */
function true_duplicate_post_link( $actions, $post ) {
	if (current_user_can('edit_posts')) {
		$actions['duplicate'] = '<a href="admin.php?action=true_duplicate_post_as_draft&amp;post=' . $post->ID . '" title="Дублировать этот пост" rel="permalink">Дублировать</a>';
	}
	return $actions;
}
 
add_filter( 'post_row_actions', 'true_duplicate_post_link', 10, 2);
add_filter( 'page_row_actions', 'true_duplicate_post_link', 10, 2);



add_action( 'init', 'register_services_post_type' );
function register_services_post_type() {
	// Раздел вопроса - faqcat
	register_taxonomy('servicescat', array('services'), array(
		'label'                 => 'Раздел услуг', // определяется параметром $labels->name
		'labels'                => array(
			'name'              => 'Разделы услуг',
			'singular_name'     => 'Раздел услуг',
			'search_items'      => 'Искать Раздел услуг',
			'all_items'         => 'Все Разделы услуг',
			'parent_item'       => 'Родит. раздел услуги',
			'parent_item_colon' => 'Родит. раздел услуги:',
			'edit_item'         => 'Ред. Раздел услуги',
			'update_item'       => 'Обновить Раздел услуги',
			'add_new_item'      => 'Добавить Раздел услуги',
			'new_item_name'     => 'Новый Раздел услуги',
			'menu_name'         => 'Раздел услуги',
		),
		'description'           => 'Рубрики для раздела услуг', // описание таксономии
		'public'                => true,
		'show_in_nav_menus'     => true, // равен аргументу public
		'show_ui'               => true, // равен аргументу public
		'show_tagcloud'         => false, // равен аргументу show_ui
		'hierarchical'          => true,
		// 'rewrite'               => array('slug'=>'services', 'hierarchical'=>false, 'with_front'=>false, 'feed'=>false ),
		'show_admin_column'     => true, // Позволить или нет авто-создание колонки таксономии в таблице ассоциированного типа записи. (с версии 3.5)
	) );

	// тип записи - вопросы - faq
	register_post_type('services', array(
		'label'               => 'Услуги',
		'labels'              => array(
			'name'          => 'Услуги',
			'singular_name' => 'Услуга',
			'menu_name'     => 'Услуги',
			'all_items'     => 'Все услуги',
			'add_new'       => 'Добавить услугу',
			'add_new_item'  => 'Добавить новую услугу',
			'edit'          => 'Редактировать',
			'edit_item'     => 'Редактировать услугу',
			'new_item'      => 'Новая услуга',
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => true,
		'show_ui'             => true,
		'show_in_rest'        => true,
		'rest_base'           => '',
		'show_in_menu'        => true,
		'exclude_from_search' => false,
		'capability_type'     => 'post',
		'map_meta_cap'        => true,
		'hierarchical'        => false,
		// 'rewrite'             => array( 'slug'=>'services/%servicescat%', 'with_front'=>false, 'pages'=>false, 'feeds'=>false, 'feed'=>false ),
		'has_archive'         => 'services',
		'query_var'           => true,
		'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
		'taxonomies'          => array( 'servicescat' ),
	) );

}

//flush_rewrite_rules();

// qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage

add_filter( 'get_terms', 'az_get_terms', 10, 4 );
function az_get_terms( $terms, $taxonomies, $args, $term_query ){

	foreach($terms as &$term){
		if(is_object($term)){
			$term->description = qtranxf_useCurrentLanguageIfNotFoundUseDefaultLanguage($term->description);
		}
	}

	return $terms;
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/**
 * Руссифицирует месяца и недели в дате.
 * Функция для фильтра date_i18n.
 * @param строка $date        Дата в принятом формате
 * @param строка $req_format  Формат передаваемой даты
 * @return Дату в русском формате
 */
function kama_drussify_months( $date, $req_format ){
	// в формате есть "строковые" неделя или месяц
	if( ! preg_match('~[FMlS]~', $req_format ) ) return $date;

	$replace = array ( 
		"январь" => "января", "Февраль" => "февраля", "Март" => "марта", "Апрель" => "апреля", "Май" => "мая", "Июнь" => "июня", "Июль" => "июля", "Август" => "августа", "Сентябрь" => "сентября", "Октябрь" => "октября", "Ноябрь" => "ноября", "Декабрь" => "декабря", 

		"January" => "января", "February" => "февраля", "March" => "марта", "April" => "апреля", "May" => "мая", "June" => "июня", "July" => "июля", "August" => "августа", "September" => "сентября", "October" => "октября", "November" => "ноября", "December" => "декабря", 

		"Jan" => "янв.", "Feb" => "фев.", "Mar" => "март.", "Apr" => "апр.", "May" => "мая", "Jun" => "июня", "Jul" => "июля", "Aug" => "авг.", "Sep" => "сен.", "Oct" => "окт.", "Nov" => "нояб.", "Dec" => "дек.",    

		"Sunday" => "воскресенье", "Monday" => "понедельник", "Tuesday" => "вторник", "Wednesday" => "среда", "Thursday" => "четверг", "Friday" => "пятница", "Saturday" => "суббота",

		"Sun" => "вос.", "Mon" => "пон.", "Tue" => "вт.", "Wed" => "ср.", "Thu" => "чет.", "Fri" => "пят.", "Sat" => "суб.", "th" => "", "st" => "", "nd" => "", "rd" => "",       
	);

	return strtr( $date, $replace );
}
add_filter('date_i18n', 'kama_drussify_months', 11, 2);


?>
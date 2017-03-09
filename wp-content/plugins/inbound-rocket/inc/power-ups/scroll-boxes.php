<?php
/**
	* Power-up Name: Scroll Boxes
	* Power-up Class: WPScrollBoxes
	* Power-up Menu Text:
	* Power-up Menu Link: settings
	* Power-up Slug: scroll_boxes
	* Power-up URI: http://inboundrocket.co/features/scroll-boxes/
	* Power-up Description: Scroll Boxes: a polite way to ask your visitors for their email address as they finish reading your latest blog post or learning about your product.
	* Power-up Icon: power-up-icon-scroll-boxes
	* Power-up Icon Small: power-up-icon-scroll-boxes
	* First Introduced: 1.2
	* Power-up Tags: Lead Converting
	* Auto Activate: No
	* Permanently Enabled: No
	* Hidden: No
	* cURL Required: No
	* Premium: No
	* Options Name: inboundrocket_sb_options
	
*/

if(!defined('ABSPATH') || !defined('INBOUNDROCKET_PATH')) die('Security');

//=============================================
// Define Constants
//=============================================

if ( !defined('INBOUNDROCKET_SCROLL_BOXES_PATH') )
    define('INBOUNDROCKET_SCROLL_BOXES_PATH', INBOUNDROCKET_PATH . '/inc/power-ups/scroll-boxes');

if ( !defined('INBOUNDROCKET_SCROLL_BOXES_PLUGIN_DIR') )
	define('INBOUNDROCKET_SCROLL_BOXES_PLUGIN_DIR', INBOUNDROCKET_PLUGIN_DIR . '/inc/power-ups/scroll-boxes');

if ( !defined('INBOUNDROCKET_SCROLL_BOXES_PLUGIN_SLUG') )
	define('INBOUNDROCKET_SCROLL_BOXES_PLUGIN_SLUG', basename(dirname(__FILE__)));

if (!defined('INBOUNDROCKET_SCROLL_BOXES_META_KEY')){
	define('INBOUNDROCKET_SCROLL_BOXES_META_KEY', 'inboundrocket_sb_options');
}

//=============================================
// Include Needed Files
//=============================================

require_once(INBOUNDROCKET_SCROLL_BOXES_PLUGIN_DIR . '/admin/scroll-boxes-admin.php');
require_once(INBOUNDROCKET_SCROLL_BOXES_PLUGIN_DIR . '/admin/scroll-boxes-admin-functions.php');

require_once(INBOUNDROCKET_SCROLL_BOXES_PLUGIN_DIR . '/scroll-box-class.php');

//=============================================
// WPInboundRocketScrollBoxes Class
//=============================================
class WPScrollBoxes extends WPInboundRocket {
	
	var $admin;
	var $options;

	/**
	 * Class constructor
	 */
	function __construct ( $activated )
	{
		//=============================================
		// Hooks & Filters
		//=============================================

		if ( ! $activated )
			return false;

		global $inboundrocket_scrollboxes;
		$inboundrocket_scrollboxes = $this;
		
		//add_filter( 'wp_footer', array($this,'inboundrocket_sb_scripts'));
		
		// Register stylesheets
		add_action( 'wp_enqueue_scripts', array( $this, 'inboundrocket_sb_styles' ) );
				
		add_action( 'wp_loaded', array( $this, 'irsb_load_boxes' ) );		
		
		$this->admin = WPScrollBoxesAdmin::init();
		
	}

	public function admin_init ( )
	{	
		// Register power up settings
		register_setting('inboundrocket_sb_options', 'inboundrocket_sb_options', array($this->admin, 'sanitize'));
		add_settings_section('ir_sb_section', '', '', 'inboundrocket_sb_options');
		add_settings_field('ir_sb_settings', __('Scroll Boxes Settings','inbound-rocket'), array($this->admin, 'ir_sb_input_fields'), 'inboundrocket_sb_options', 'ir_sb_section');
		
		//add_settings_field( $id, $title, $callback, $page, $section, $args );
	}

	function power_up_setup_callback ( )
	{
		$this->admin->power_up_setup_callback();
	}
		
	function irsb_get_all_boxes( $matched_ids )
	{
		// query on ir-scroll-box post type for matched ids
		$all_boxes = get_posts(
			array(
				'post_type' 		=> 'ir-scroll-box',
				'post_status' 		=> 'publish',
				'post__in' 			=> $matched_ids,
				'posts_per_page' 	=> -1
			)
		);	
		return $all_boxes;
	}
	
	function irsb_get_filter_rules()
	{
		$rules = get_option('inboundrocket_sb_options');
			
		if( ! is_array( $rules ) ) {
			return array();
		}
		return $rules;
	}
	
	function irsb_compare_condition( $condition, $value )
	{
		$matched = false;
		$value = trim( $value );
		$value = array_map( 'trim', explode( ',', rtrim( trim( $value ), ',' ) ) );
		
		switch ( $condition ) {
			case 'everywhere';
				$matched = true;
				break;
	
			/*case 'is_url':
				$matched = match_patterns( $_SERVER['REQUEST_URI'], $value ); //@TODO
				break;
	
			case 'is_referer':
				if( ! empty( $_SERVER['HTTP_REFERER'] ) ) {
					$referer = $_SERVER['HTTP_REFERER'];
					$matched = match_patterns( $referer, $value );
				}
				break;*/
	
			case 'is_post_type':
				$post_type =  get_post_type();
				if($post_type && is_array($value)) $matched = in_array( $post_type, $value ); else $matched = false;
				break;
	
			case 'is_single':
			case 'is_post':
				$matched = is_single( $value );
				break;
	
			case 'is_post_in_category':
				$matched = is_singular( 'post' ) && has_category( $value );
				break;
	
			case 'is_page':
				$matched = is_page( $value );				
				break;
		}
		return $matched;
	}
	
	function irsb_filter_boxes()
	{
		$matched_ids = array();
		$rules = $this->irsb_get_filter_rules();
		
		foreach( $rules as $box_id => $box_rules ) {
			$matched = false;
			$comparison = !empty( $box_rules['comparison'] ) ? $box_rules['comparison'] : 'any';
			
			if(!empty($box_rules['comparison'])) unset( $box_rules['comparison'] );
						
			if(!empty($box_rules)){
				foreach ( $box_rules as $rule ) {
					if( empty( $rule['condition'] ) ) {
						continue;
					}
					
					$matched = $this->irsb_compare_condition( $rule['condition'], $rule['value'] );
		
					// break out of loop if we've already matched
					if( $comparison === 'any' && $matched ) {
						break;
					}
					if( $comparison === 'all' && ! $matched ) {
						break;
					}
				}
			}
			if ( $matched ) {
				$matched_ids[] = $box_id;
			}		
		}
		return $matched_ids;
	}
	
	function irsb_load_boxes()
	{	
		$matched_ids = $this->irsb_filter_boxes();	
		
		if (INBOUNDROCKET_ENABLE_DEBUG==true) {
			wp_enqueue_script( 'inboundrocket_sb_script', INBOUNDROCKET_SCROLL_BOXES_PATH . '/js/scroll-boxes.js', array( 'jquery' ), false, true );
		} else {
			wp_enqueue_script( 'inboundrocket_sb_script', INBOUNDROCKET_SCROLL_BOXES_PATH . '/js/scroll-boxes.min.js', array( 'jquery' ), false, true );
		}
	
		// query on ir-scroll-box post type for matched ids
		$all_boxes = $this->irsb_get_all_boxes($matched_ids);
		
		if(!empty($all_boxes)){
				
			$boxes_options = array();
			
			foreach( $all_boxes as $box ){
				
				$ir_sb_global_option = get_option('inboundrocket_sb_options');
				$test_mode_global 	 = !empty($ir_sb_global_option['ir_sb_test_mode']) ? $ir_sb_global_option['ir_sb_test_mode'] : 0;
								
				$box_options = get_post_meta($box->ID, INBOUNDROCKET_SCROLL_BOXES_META_KEY, true);		
				
				$box_test_mode = ( $test_mode_global == 1 ) ? 1 : $box_options['test_mode'];
				// array with box options
				$options = array(
					'id' 				 => $box->ID,
					'animation' 		 => $box_options['animation'],
					'autoShow' 			 => $box_options['auto_show'],
					'autoShowPercentage' => $box_options['auto_show_percentage'],
					'autoShowElement' 	 => $box_options['auto_show_element'],
					'autoHide' 			 => $box_options['auto_hide'],
					'hideScreenSize'   	 => $box_options['hide_on_screen_size'],
					'cookie_exp' 		 => $box_options['cookie_exp'],
					'test_mode'   	 	 => $box_test_mode,
				);
				$boxes_options[ $box->ID ] = $options;

				new Scroll_Box($box);
			}
			wp_localize_script( 'inboundrocket_sb_script', 'ir_sb_box_js_options', $boxes_options );		
		}
	}
    
    function inboundrocket_sb_styles()
    {
		if (INBOUNDROCKET_ENABLE_DEBUG==true) {
			wp_register_style('inboundrocket_sb_style', INBOUNDROCKET_SCROLL_BOXES_PATH . '/css/scroll-boxes.css', false, '0.1');			
		} else {
			wp_register_style('inboundrocket_sb_style', INBOUNDROCKET_SCROLL_BOXES_PATH . '/css/scroll-boxes.min.css', false, '0.1');			
		}
		wp_enqueue_style('inboundrocket_sb_style');
		wp_enqueue_script('jquery-ui-core');
		wp_enqueue_script('jquery-effects-bounce');
	}
}

//=============================================
// InboundRocket Init
//=============================================

global $inboundrocket_scrollboxes;
?>
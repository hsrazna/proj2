<?php
if(!defined('ABSPATH') || !defined('INBOUNDROCKET_PATH')) die('Security');

require_once(INBOUNDROCKET_SCROLL_BOXES_PLUGIN_DIR . '/admin/scroll-box-list-table.php');

//=============================================
// WPInboundRocketAdmin Class
//=============================================
class WPScrollBoxesAdmin extends WPInboundRocketAdmin {
    
    var $power_up_settings_section = 'inboundrocket_sb_options_section';
    var $power_option_name = 'inboundrocket_sb_options';
    var $options;
	var $nonce;
    
    private static $_instance = null;
    
    // Scroll Box WP_List_Table object
	public $scroll_boxes_obj;
    
    protected function __clone()
    {
        //Me not like clones! Me smash clones!
    }
    
    
    /**
     * Class constructor
     */
    function __construct( )
    {
	    //=============================================
        // Hooks & Filters
        //=============================================
		if ( is_admin() ){
			$this->options = get_option('inboundrocket_sb_options');
			
			add_action( "admin_enqueue_scripts", array($this,'inboundrocket_sb_admin_scripts') );
			add_filter( "redirect_post_location", array($this,'inboundrocket_sb_redirect_after_save') );

			add_action( "load-inbound-rocket_page_inboundrocket_settings", array( $this, 'screen_option' ) );
			add_filter( "set-screen-option", array( $this, 'set_screen' ) );
			
			$post_type = '';
			
			if(isset($_GET['post_type'])){
		    	$post_type = esc_attr($_GET['post_type']);
	    	} elseif(isset($_GET['post'])) {
		    	$post = get_post(absint($_GET['post']));
		    	$post_type = $post->post_type;
	    	}
			
			if($post_type == 'ir-scroll-box') {
				add_action( "in_admin_header", array( $this, 'inboundrocket_sb_admin_header' ) );
				add_action( "in_admin_footer", array( $this, 'inboundrocket_sb_admin_footer' ) );
			}
		}
	}
	
    public static function init(){
	    
	    if(self::$_instance == null){
	        self::$_instance = new self();
	    }
	    return self::$_instance;            
	}
	
	function inboundrocket_sb_admin_header() {
		$this->inboundrocket_header();
	}

	function inboundrocket_sb_admin_footer() {
		$this->inboundrocket_footer();
	}

	function inboundrocket_sb_redirect_after_save() {
		
		global $post_id;
		
		if ( 'ir-scroll-box' == get_post_type( $post_id ) ) {
            $location = admin_url('admin.php?page=inboundrocket_settings&tab=inboundrocket_sb_options');
        } else {
	        $location = admin_url();
        }
        
        return $location;
    }

	function inboundrocket_sb_admin_scripts(){
		
		$this->inboundrocket_sb_admin_styles();
		
		if (INBOUNDROCKET_ENABLE_DEBUG==true) {					
			wp_enqueue_script( "inboundrocket_sb_admin_script", INBOUNDROCKET_SCROLL_BOXES_PATH . '/js/scroll-boxes-admin.js', array( 'jquery', 'wp-color-picker' ), true );
		} else {					
			wp_enqueue_script( "inboundrocket_sb_admin_script", INBOUNDROCKET_SCROLL_BOXES_PATH . '/js/scroll-boxes-admin.min.js', array( 'jquery', 'wp-color-picker' ), true );
		}
	}
	
	function inboundrocket_sb_admin_styles(){
		
		if (INBOUNDROCKET_ENABLE_DEBUG==true) {
			wp_register_style( 'inboundrocket_sb_admin_style', INBOUNDROCKET_SCROLL_BOXES_PATH . '/css/scroll-boxes-admin.css', false, '0.1' );
		} else {			
			wp_register_style( 'inboundrocket_sb_admin_style', INBOUNDROCKET_SCROLL_BOXES_PATH . '/css/scroll-boxes-admin.min.css', false, '0.1' );
		}
		
		wp_register_style('inboundrocket-admin-css', INBOUNDROCKET_PATH . '/admin/inc/css/inboundrocket-admin.min.css');
		wp_enqueue_style('inboundrocket-admin-css');
		
		/* CSS rules for Color Picker */ 
		wp_enqueue_style( 'wp-color-picker' );		
		
		wp_enqueue_style('inboundrocket_sb_admin_style');
	}

	//=============================================
    // Settings Page
    //=============================================

    /**
     * Creates settings options
     */
	public static function set_screen( $status, $option, $value ) {
		return $value;
	}
	
	public function screen_option() {

		$args   = array(
			'label'   => 'Scroll Boxes',
			'default' => 10,
			'option'  => 'scroll_boxes_per_page'
		);
	
		add_screen_option( 'per_page', $args );
	
		$this->scroll_boxes_obj = new Scroll_Boxes_List_Table();
		
	}
	
	/**
     * Prints input form for settings page
     */	
	public function ir_sb_input_fields () {
		
		$ir_sb_test_mode = isset($this->options['ir_sb_test_mode']) ? esc_attr( $this->options['ir_sb_test_mode'] ) : 0;
?>	
		<tr valign="top">
		  <th><label><?php _e( 'Enable test mode?', 'inbound-rocket' ); ?></label></th>
		  <td>
			<label><input type="radio" name="inboundrocket_sb_options[ir_sb_test_mode]" value="1" <?php checked( $ir_sb_test_mode, 1 ); ?> /> <?php _e( 'Yes', 'inbound-rocket' ); ?></label> &nbsp;            
			<label><input type="radio" name="inboundrocket_sb_options[ir_sb_test_mode]" value="0" <?php checked( $ir_sb_test_mode, 0 ); ?> /> <?php _e( 'No', 'inbound-rocket' ); ?></label> &nbsp;
			<p class="help"><?php _e( 'If test mode is enabled, all boxes will show up regardless of whether a cookie has been set.', 'inbound-rocket' ); ?></p>
		  </td>
	  	</tr>
	  	</table>
	  	</form>
	  	<br class="clear">
	  	<?php if(!empty($_GET['deleted']) && $_GET['deleted'] == 1): ?>
	  	<div class="notice notice-success is-dismissible">
        	<p><?php _e( 'Scroll box was deleted successfully.', 'inbound-rocket' ); ?></p>
    	</div>
    	<?php elseif(!empty($_GET['deleted']) && $_GET['deleted'] > 1): ?>
    	<div class="notice notice-success is-dismissible">
        	<p><?php _e( absint($_GET['deleted']).'Scroll boxes were deleted successfully.', 'inbound-rocket' ); ?></p>
    	</div>
	  	<?php endif; ?>
	  	<table class="form-table">
		<tr valign="top">
          <td colspan="2">
	        <h2><?php _e( 'Scroll Boxes', 'inbound-rocket' ); ?></h2>
	        
			<a href="<?php echo admin_url('edit.php?post_status=trash&post_type=ir-scroll-box'); ?>" class="page-title-action"><?php _e('Deleted Boxes','inbound-rocket'); ?></a>
			<a href="<?php echo admin_url('post-new.php?post_type=ir-scroll-box'); ?>" class="page-title-action"><?php _e('Add New','inbound-rocket'); ?></a>
			
			<div id="post-body" class="metabox-holder columns-2">
				<div id="post-body-content">
					<div class="meta-box-sortables ui-sortable">
						
						<form action="<?=admin_url('admin.php?page=inboundrocket_settings&tab=inboundrocket_sb_options');?>" method="post">
							<?php
							$this->scroll_boxes_obj->prepare_items();
							$this->scroll_boxes_obj->display(); ?>
						</form>
					</div>
				</div>
			</div>
		  </td>
		</tr>
<?php
	}
}
?>
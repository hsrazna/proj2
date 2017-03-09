<?php
/**
    * Power-up Name: MailChimp Connector
    * Power-up Class: WPMailChimpConnector
    * Power-up Menu Text: 
    * Power-up Menu Link: settings
	* Power-up Slug: mailchimp_connector
    * Power-up URI: http://inboundrocket.co/features/email-service-provider-connectors/
    * Power-up Description: Push your contacts to your MailChimp email lists.
    * Power-up Icon: power-up-icon-mailchimp-connector
    * Power-up Icon Small: power-up-icon-mailchimp-connector_small
    * First Introduced: 1.1
    * Power-up Tags: Newsletter, Connector, Email
    * Auto Activate: No
    * Permanently Enabled: No
    * Hidden: No
    * cURL Required: Yes
    * Premium: No
    * Options Name: inboundrocket_mc_options
*/
if(!defined('ABSPATH') || !defined('INBOUNDROCKET_PATH')) die('Security');

//=============================================
// Define Constants
//=============================================

if ( !defined('INBOUNDROCKET_MAILCHIMP_CONNECTOR_PATH') )
    define('INBOUNDROCKET_MAILCHIMP_CONNECTOR_PATH', INBOUNDROCKET_PATH . '/inc/power-ups/mailchimp-connector');

if ( !defined('INBOUNDROCKET_MAILCHIMP_CONNECTOR_PLUGIN_DIR') )
    define('INBOUNDROCKET_MAILCHIMP_CONNECTOR_PLUGIN_DIR', INBOUNDROCKET_PLUGIN_DIR . '/inc/power-ups/mailchimp-connector');

if ( !defined('INBOUNDROCKET_MAILCHIMP_CONNECTOR_PLUGIN_SLUG') )
    define('INBOUNDROCKET_MAILCHIMP_CONNECTOR_SLUG', basename(dirname(__FILE__)));

//=============================================
// Include Needed Files
//=============================================
require_once(INBOUNDROCKET_MAILCHIMP_CONNECTOR_PLUGIN_DIR . '/admin/mailchimp-connector-admin.php');
require_once(INBOUNDROCKET_MAILCHIMP_CONNECTOR_PLUGIN_DIR . '/inc/MailChimp-API.php');

//=============================================
// WPMailChimpConnector Class
//=============================================
class WPMailChimpConnector extends WPInboundRocket {
    
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
		
		global $inboundrocket_mailchimp_connector_wp;
	    $inboundrocket_mailchimp_connector_wp = $this;
	    
	    $this->admin = WPMailChimpConnectorAdmin::init();
        
        add_action( 'admin_footer', array( $this->admin, 'ir_mc_action_javascript' ) );
	    add_action( 'wp_ajax_mc_delete_api_key', array( $this->admin, 'ir_mc_delete_api_key' ) );
	    
    }

    public function admin_init ( )
    {
        // Register power up settings
		register_setting('inboundrocket_mc_options', 'inboundrocket_mc_options', array($this->admin, 'sanitize'));
		add_settings_section('ir_mc_section', '', '', 'inboundrocket_mc_options');
		add_settings_field('ir_mc_settings', __('MailChimp API Key','inbound-rocket'), array($this->admin,'ir_mc_input_fields'), 'inboundrocket_mc_options', 'ir_mc_section');							
    }

    function power_up_setup_callback ( )
    {
        $this->admin->power_up_setup_callback();
    }

    /**
     * Adds a subcsriber to a specific list
     *
     * @param   string
     * @param   string
     * @param   string
     * @param   string
     * @param   string
     * @return  int/bool        API status code OR false if api key not set
     */
    function push_contact_to_list ( $list_parameters = array() ) 
    {
	    $this->options = get_option('inboundrocket_mc_options');
	    
        if ( isset($this->options['ir_mc_api_key']) && $this->options['ir_mc_api_key'] && $list_parameters['list_id'] )
        {
            $MailChimp = new IR_MailChimp($this->options['ir_mc_api_key']);
            $status = $MailChimp->call("lists/subscribe", array(
                "id" => $list_parameters['list_id'],
                "email" => array('email' => $list_parameters['email']),
                "send_welcome" => FALSE,
                "double_optin" => FALSE,
                "update_existing " => TRUE,
                "merge_vars" => array(
                    'EMAIL' => $list_parameters['email'],
                    'FNAME' => $list_parameters['first_name'],
                    'LNAME' => $list_parameters['last_name'],
                    'PHONE' => $list_parameters['phone']
                )
            ));
            
            if($status['status']=="error") {
	            inboundrocket_track_plugin_activity('Contact NOT Pushed to List: '.$list_parameters['list_id'], array('esp_connector' => 'mailchimp', 'debug' => $status['name'].' '.$status['error']));
	            
	            return FALSE;
            }
            
            inboundrocket_track_plugin_activity('Contact Pushed to List: '.$list_parameters['list_id'], array('esp_connector' => 'mailchimp'));

            return TRUE;
        }

        return FALSE;
    }

    /**
     * Adds a subcsriber to a specific list
     *
     * @param   string
     * @param   array
     * @return  int/bool        API status code OR false if api key not set
     */
    function bulk_push_contact_to_list ( $list_id = '', $contacts = '' ) 
    {
	    $this->options = get_option('inboundrocket_mc_options');
	    
        if ( isset($this->options['ir_mc_api_key']) && $this->options['ir_mc_api_key'] && $list_id )
        {
            $MailChimp = new IR_MailChimp($this->options['ir_mc_api_key']);

			$batch_contacts = array();
            if ( count($contacts) )
            {
                foreach ( $contacts as $contact )
                {
                    array_push($batch_contacts, array(
                        'email' => array('email' => $contact->lead_email),
                        'email_type' => 'html',
                        'merge_vars' => array(
                            'EMAIL' => $contact->lead_email,
                            'FNAME' => $contact->lead_first_name,
                            'LNAME' => $contact->lead_last_name
                        ))
                    );
                }
            }
            
            $list_updated = $MailChimp->call("lists/batch-subscribe", array(
                "id" => $list_id,
                "update_existing" => TRUE,
                'replace_interests' => FALSE,
                'double_optin' => FALSE,
                "batch" => $batch_contacts,
            ));
            
            if($list_updated['error_count']>0){
	
				inboundrocket_track_plugin_activity('Bulk Contacts NOT Pushed to List: '.$list_id, array('esp_connector' => 'mailchimp','debug'=>$list_updated['errors']));
	            return FALSE;
	            
            } else {
            
	            inboundrocket_track_plugin_activity('Bulk Contacts Pushed to List: '.$list_id, array('esp_connector' => 'mailchimp','debug'=>$list_updated['errors']));
	            return $list_updated['add_count'];
			
			}

            
        }

        return FALSE;
    }
}

//=============================================
// MailChimp Connector Init
//=============================================

global $inboundrocket_mailchimp_connector_wp;

?>
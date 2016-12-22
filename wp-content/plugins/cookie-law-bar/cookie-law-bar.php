<?php
/*
Plugin Name: Cookie Law Bar
Plugin URI: https://widgetpack.com
Description: Cookie Law Bar inform visitors that your website uses cookies according to EU cookie law. Adaptive design, flexible setting, smooth slide, changeable position, color, text, button.
Author: WidgetPack <contact@widgetpack.com>
Version: 1.0
Author URI: https://widgetpack.com
*/

define('CLB_VERSION', '1.0');

function clb_options() {
    return array(
        'clb_bar_msg',
        'clb_bar_pos',
        'clb_bar_color',
        'clb_bar_text_color',
        'clb_btn_msg',
        'clb_btn_color',
        'clb_btn_text_color',
        'clb_version'
    );
}

/*-------------------------------- Default Setting --------------------------------*/
function clb_default_setting() {
    $clb_bar_msg         =  get_option('clb_bar_msg');
    $clb_bar_pos         =  get_option('clb_bar_pos');
    $clb_bar_color       =  get_option('clb_bar_color');
    $clb_bar_text_color  =  get_option('clb_bar_text_color');
    $clb_btn_msg         =  get_option('clb_btn_msg');
    $clb_btn_color       =  get_option('clb_btn_color');
    $clb_btn_text_color  =  get_option('clb_btn_text_color');

    if (!$clb_bar_msg) {
        add_option('clb_bar_msg', clb_i('This website uses cookies. By continuing to browse the site, you are agreeing to our <a href="http://www.aboutcookies.org/" target="_blank">use of cookies</a>'));
    }
    if (!$clb_bar_pos) {
        add_option('clb_bar_pos', 'bottom');
    }
    if (!$clb_bar_color) {
        add_option('clb_bar_color', '#363d4d');
    }
    if (!$clb_bar_text_color) {
        add_option('clb_bar_text_color', '#fff');
    }
    if (!$clb_btn_msg) {
        add_option('clb_btn_msg', 'Agree');
    }
    if (!$clb_btn_color) {
        add_option('clb_btn_color', '#4caf50');
    }
    if (!$clb_btn_text_color) {
        add_option('clb_btn_text_color', '#fff');
    }
    add_option('clb_version', CLB_VERSION);
}
add_action('activate_cookie-law-bar/cookie-law-bar.php', 'clb_default_setting');

/*-------------------------------- Menu --------------------------------*/
function clb_setting_menu() {
     add_submenu_page(
         'options-general.php',
         'Cookie Law Bar Setting',
         'Cookie Law Bar',
         'moderate_comments',
         'clb',
         'clb_setting'
     );
}
add_action('admin_menu', 'clb_setting_menu');

function clb_setting() {
    include_once(dirname(__FILE__) . '/cookie-law-bar-setting.php');
}

/*-------------------------------- Links --------------------------------*/
function clb_plugin_action_links($links, $file) {
    $plugin_file = basename(__FILE__);
    if (basename($file) == $plugin_file) {
        $settings_link = '<a href="' . admin_url('options-general.php?page=clb') . '">'.clb_i('Settings').'</a>';
        array_unshift($links, $settings_link);
    }
    return $links;
}
add_filter('plugin_action_links', 'clb_plugin_action_links', 10, 2);

function clb_deactivation() {
    clb_delete_all_options();
}
register_deactivation_hook( __FILE__, 'clb_deactivation');

/*-------------------------------- Footer --------------------------------*/
function clb_static() {
    wp_register_script('cookie-law-bar-js', plugins_url('static/js/cookie-law-bar.js', __FILE__), array('jquery'), '', false);
    wp_enqueue_script('cookie-law-bar-js');
    wp_register_style('cookie-law-bar-css', plugins_url('static/css/cookie-law-bar.css', __FILE__));
    wp_enqueue_style('cookie-law-bar-css');
}
add_action('wp_enqueue_scripts', 'clb_static' );

function clb_output_footer() {
    $bar_style = get_option('clb_bar_pos') . ':0;background:' . get_option('clb_bar_color') . ';color:' . get_option('clb_bar_text_color') . ';';
    $btn_style = 'background:' . get_option('clb_btn_color') . ';color:' . get_option('clb_btn_text_color') . ';';


?><!-- Cookie Bar -->
<?php

$continent = [
    "AD" => "Europe",
    "AE" => "Asia",
    "AF" => "Asia",
    "AG" => "North America",
    "AI" => "North America",
    "AL" => "Europe",
    "AM" => "Asia",
    "AN" => "North America",
    "AO" => "Africa",
    "AQ" => "Antarctica",
    "AR" => "South America",
    "AS" => "Australia",
    "AT" => "Europe",
    "AU" => "Australia",
    "AW" => "North America",
    "AZ" => "Asia",
    "BA" => "Europe",
    "BB" => "North America",
    "BD" => "Asia",
    "BE" => "Europe",
    "BF" => "Africa",
    "BG" => "Europe",
    "BH" => "Asia",
    "BI" => "Africa",
    "BJ" => "Africa",
    "BM" => "North America",
    "BN" => "Asia",
    "BO" => "South America",
    "BR" => "South America",
    "BS" => "North America",
    "BT" => "Asia",
    "BW" => "Africa",
    "BY" => "Europe",
    "BZ" => "North America",
    "CA" => "North America",
    "CC" => "Asia",
    "CD" => "Africa",
    "CF" => "Africa",
    "CG" => "Africa",
    "CH" => "Europe",
    "CI" => "Africa",
    "CK" => "Australia",
    "CL" => "South America",
    "CM" => "Africa",
    "CN" => "Asia",
    "CO" => "South America",
    "CR" => "North America",
    "CU" => "North America",
    "CV" => "Africa",
    "CX" => "Asia",
    "CY" => "Asia",
    "CZ" => "Europe",
    "DE" => "Europe",
    "DJ" => "Africa",
    "DK" => "Europe",
    "DM" => "North America",
    "DO" => "North America",
    "DZ" => "Africa",
    "EC" => "South America",
    "EE" => "Europe",
    "EG" => "Africa",
    "EH" => "Africa",
    "ER" => "Africa",
    "ES" => "Europe",
    "ET" => "Africa",
    "FI" => "Europe",
    "FJ" => "Australia",
    "FK" => "South America",
    "FM" => "Australia",
    "FO" => "Europe",
    "FR" => "Europe",
    "GA" => "Africa",
    "GB" => "Europe",
    "GD" => "North America",
    "GE" => "Asia",
    "GF" => "South America",
    "GG" => "Europe",
    "GH" => "Africa",
    "GI" => "Europe",
    "GL" => "North America",
    "GM" => "Africa",
    "GN" => "Africa",
    "GP" => "North America",
    "GQ" => "Africa",
    "GR" => "Europe",
    "GS" => "Antarctica",
    "GT" => "North America",
    "GU" => "Australia",
    "GW" => "Africa",
    "GY" => "South America",
    "HK" => "Asia",
    "HN" => "North America",
    "HR" => "Europe",
    "HT" => "North America",
    "HU" => "Europe",
    "ID" => "Asia",
    "IE" => "Europe",
    "IL" => "Asia",
    "IM" => "Europe",
    "IN" => "Asia",
    "IO" => "Asia",
    "IQ" => "Asia",
    "IR" => "Asia",
    "IS" => "Europe",
    "IT" => "Europe",
    "JE" => "Europe",
    "JM" => "North America",
    "JO" => "Asia",
    "JP" => "Asia",
    "KE" => "Africa",
    "KG" => "Asia",
    "KH" => "Asia",
    "KI" => "Australia",
    "KM" => "Africa",
    "KN" => "North America",
    "KP" => "Asia",
    "KR" => "Asia",
    "KW" => "Asia",
    "KY" => "North America",
    "KZ" => "Asia",
    "LA" => "Asia",
    "LB" => "Asia",
    "LC" => "North America",
    "LI" => "Europe",
    "LK" => "Asia",
    "LR" => "Africa",
    "LS" => "Africa",
    "LT" => "Europe",
    "LU" => "Europe",
    "LV" => "Europe",
    "LY" => "Africa",
    "MA" => "Africa",
    "MC" => "Europe",
    "MD" => "Europe",
    "ME" => "Europe",
    "MG" => "Africa",
    "MH" => "Australia",
    "MK" => "Europe",
    "ML" => "Africa",
    "MM" => "Asia",
    "MN" => "Asia",
    "MO" => "Asia",
    "MP" => "Australia",
    "MQ" => "North America",
    "MR" => "Africa",
    "MS" => "North America",
    "MT" => "Europe",
    "MU" => "Africa",
    "MV" => "Asia",
    "MW" => "Africa",
    "MX" => "North America",
    "MY" => "Asia",
    "MZ" => "Africa",
    "NA" => "Africa",
    "NC" => "Australia",
    "NE" => "Africa",
    "NF" => "Australia",
    "NG" => "Africa",
    "NI" => "North America",
    "NL" => "Europe",
    "NO" => "Europe",
    "NP" => "Asia",
    "NR" => "Australia",
    "NU" => "Australia",
    "NZ" => "Australia",
    "OM" => "Asia",
    "PA" => "North America",
    "PE" => "South America",
    "PF" => "Australia",
    "PG" => "Australia",
    "PH" => "Asia",
    "PK" => "Asia",
    "PL" => "Europe",
    "PM" => "North America",
    "PN" => "Australia",
    "PR" => "North America",
    "PS" => "Asia",
    "PT" => "Europe",
    "PW" => "Australia",
    "PY" => "South America",
    "QA" => "Asia",
    "RE" => "Africa",
    "RO" => "Europe",
    "RS" => "Europe",
    "RU" => "Europe",
    "RW" => "Africa",
    "SA" => "Asia",
    "SB" => "Australia",
    "SC" => "Africa",
    "SD" => "Africa",
    "SE" => "Europe",
    "SG" => "Asia",
    "SH" => "Africa",
    "SI" => "Europe",
    "SJ" => "Europe",
    "SK" => "Europe",
    "SL" => "Africa",
    "SM" => "Europe",
    "SN" => "Africa",
    "SO" => "Africa",
    "SR" => "South America",
    "ST" => "Africa",
    "SV" => "North America",
    "SY" => "Asia",
    "SZ" => "Africa",
    "TC" => "North America",
    "TD" => "Africa",
    "TF" => "Antarctica",
    "TG" => "Africa",
    "TH" => "Asia",
    "TJ" => "Asia",
    "TK" => "Australia",
    "TM" => "Asia",
    "TN" => "Africa",
    "TO" => "Australia",
    "TR" => "Asia",
    "TT" => "North America",
    "TV" => "Australia",
    "TW" => "Asia",
    "TZ" => "Africa",
    "UA" => "Europe",
    "UG" => "Africa",
    "US" => "North America",
    "UY" => "South America",
    "UZ" => "Asia",
    "VC" => "North America",
    "VE" => "South America",
    "VG" => "North America",
    "VI" => "North America",
    "VN" => "Asia",
    "VU" => "Australia",
    "WF" => "Australia",
    "WS" => "Australia",
    "YE" => "Asia",
    "YT" => "Africa",
    "ZA" => "Africa",
    "ZM" => "Africa",
    "ZW" => "Africa"
];

    $geoip = geoip_detect2_get_info_from_ip('8.8.8.8');
    $country = $geoip->raw[ 'country' ][ 'iso_code' ];
    // if ( 'US' !== $country ) {
        
        // $title = str_replace( 'soccer', 'football', $country );
    // }

?>


<div id="cookie-law-bar" style="<?php echo $bar_style; ?>"><?php echo $continent[$country]; ?><?php echo stripslashes_deep(get_option("clb_bar_msg")); ?><button id="cookie-law-btn" style="<?php echo $btn_style; ?>" onclick="clb_accept();"><?php echo esc_attr(get_option("clb_btn_msg")); ?></button></div>
<!-- End Cookie Bar --><?php

}
add_action('wp_footer', 'clb_output_footer');

/*-------------------------------- Helpers --------------------------------*/
function clb_delete_all_options() {
    foreach (clb_options() as $opt) {
        delete_option($opt);
    }
}

function clb_i($text, $params=null) {
    if (!is_array($params)) {
        $params = func_get_args();
        $params = array_slice($params, 1);
    }
    return vsprintf(__($text, 'clb'), $params);
}

if (!function_exists('esc_html')) {
function esc_html( $text ) {
    $safe_text = wp_check_invalid_utf8( $text );
    $safe_text = _wp_specialchars( $safe_text, ENT_QUOTES );
    return apply_filters( 'esc_html', $safe_text, $text );
}
}

if (!function_exists('esc_attr')) {
function esc_attr( $text ) {
    $safe_text = wp_check_invalid_utf8( $text );
    $safe_text = _wp_specialchars( $safe_text, ENT_QUOTES );
    return apply_filters( 'attribute_escape', $safe_text, $text );
}
}

?>
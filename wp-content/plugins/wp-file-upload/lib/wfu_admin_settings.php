<?php

/**
 * Settings Page in Dashboard Area of Plugin
 *
 * This file contains functions related to Settings page of plugin's Dashboard
 * area.
 *
 * @link /lib/wfu_admin_settings.php
 *
 * @package Iptanus File Upload Plugin
 * @subpackage Core Components
 * @since 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Initialize Plugin's Settings.
 *
 * This function initializes the plugin's settings.
 *
 * @since 4.1.0
 *
 * @return array Array containing plugin settings and their default values.
 */
function wfu_settings_definitions() {
	$settings = array(
		"version" => array("number", "1.0"),
		"shortcode" => array("string", ""),
		"hashfiles" => array("number", ""),
		"basedir" => array("string", ""),
		"personaldata" => array("number", ""),
		"postmethod" => array("number", ""),
		"modsecurity" => array("number", ""),
		"userstatehandler" => array("number", "dboption"),
		"relaxcss" => array("number", ""),
		"admindomain" => array("number", ""),
		"mediacustom" => array("number", ""),
		"createthumbnails" => array("number", ""),
		"includeotherfiles" => array("number", ""),
		"altserver" => array("number", ""),
		"captcha_sitekey" => array("string", ""),
		"captcha_secretkey" => array("string", ""),
		"browser_permissions" => array("array", "")
	);
	/**
	 * Customize settings definitions.
	 *
	 * This filter allows extensions to add their own settings.
	 *
	 * @since 4.1.0
	 *
	 * @param array $settings Array containing plugin settings and their
	 *        default values.
	*/
	$settings = apply_filters("_wfu_settings_definitions", $settings);
	
	return $settings;
}

/**
 * Encode Plugin Settings.
 *
 * This function encodes the plugin settings array into a string.
 *
 * @since 2.1.3
 *
 * @param array $plugin_options The plugin settings.
 *
 * @return string The encoded plugin settings.
 */
function wfu_encode_plugin_options($plugin_options) {
	$settings = wfu_settings_definitions();
	$encoded_options = array();
	foreach ( $settings as $setting => $data ) {
		$encoded = $setting."=";
		if ( !isset($plugin_options[$setting]) ) $encoded .= $data[1];
		elseif ( $data[0] == "string" ) $encoded .= wfu_plugin_encode_string($plugin_options[$setting]);
		elseif ( $data[0] == "array" ) $encoded .= wfu_encode_array_to_string($plugin_options[$setting]);
		else $encoded .= $plugin_options[$setting];
		array_push($encoded_options, $encoded);
	}
	
	return implode(";", $encoded_options);
}

/**
 * Decode Plugin Settings.
 *
 * This function decodes the plugin settings string into an array.
 *
 * @since 2.1.3
 *
 * @global array $wordpress_file_upload_options Holds the plugin settings so
 *         that they do not need to be recalculated whenever
 *         wfu_decode_plugin_options() is called.
 *
 * @param string $encoded_options The encoded plugin settings.
 *
 * @return array The decoded plugin settings.
 */
function wfu_decode_plugin_options($encoded_options) {
	global $wordpress_file_upload_options;
	if ( !isset($wordpress_file_upload_options) || !is_array($wordpress_file_upload_options) ) {
		$plugin_options = array();
		$settings = wfu_settings_definitions();
		foreach ( $settings as $setting => $data )
			$plugin_options[$setting] = $data[1];

		$decoded_array = explode(';', $encoded_options);
		foreach ($decoded_array as $decoded_item) {
			if ( trim($decoded_item) != "" ) {
				list($item_key, $item_value) = explode("=", $decoded_item, 2);
				if ( isset($settings[$item_key]) ) {
					if ( $settings[$item_key][0] == "string" ) $plugin_options[$item_key] = wfu_plugin_decode_string($item_value);
					elseif ( $settings[$item_key][0] == "array" ) $plugin_options[$item_key] = wfu_decode_array_from_string($item_value);
					else $plugin_options[$item_key] = $item_value;
				}
			}
		}
		$wordpress_file_upload_options = $plugin_options;
	}
	else {
		$plugin_options = $wordpress_file_upload_options;
	}

	return $plugin_options;
}

/**
 * Display the Settings Page.
 *
 * This function displays the Settings page of the plugin's Dashboard area.
 *
 * @since 2.1.2
 *
 * @param string $message Optional. A message to display on top of the page.
 *
 * @return string The HTML output of the plugin's Settings Dashboard page.
 */
function wfu_manage_settings($message = '') {
	if ( !current_user_can( 'manage_options' ) ) return;

	/**
	 * Render The Current Value.
	 *
	 * Renders the current value of a setting.
	 *
	 * @param mixed $value The current value of the setting.
	 * @return string The HTML code of the rendered current value.
	 */
	$render_current_value = function($value) {
		$echo_str = '';
		if ( is_bool($value) ) {
			$echo_str = '<p style="cursor: text; font-size:9px; padding: 0px; margin: 0px; width: 95%; color: #AAAAAA;">'.esc_html__('Current value:', 'wp-file-upload').' <strong>'.($value ? esc_html__('Yes', 'wp-file-upload') : esc_html__('No', 'wp-file-upload') ).'</strong></p>';
		}
		else {
			$echo_str = '<p style="cursor: text; font-size:9px; padding: 0px; margin: 0px; width: 95%; color: #AAAAAA;">'.esc_html__('Current value:', 'wp-file-upload').' <strong>'.esc_html($value).'</strong></p>';
		}
		return $echo_str;
	};

	$siteurl = site_url();
	$plugin_options = wfu_decode_plugin_options(get_option( "wordpress_file_upload_options" ));
	$admin_nonce = wp_create_nonce('wfu_admin_nonce');
	
	// correctly escape text settings to avoid XSS
	$plugin_options['basedir'] = esc_attr($plugin_options['basedir']);
	
	$echo_str = '<div class="wrap">';
	$echo_str .= wfu_generate_dashboard_menu_title("\n\t");
	$echo_str .= "\n\t".'<div style="margin-top:20px;">';
	$echo_str .= wfu_generate_dashboard_menu("\n\t\t", "Settings");
	$echo_str .= "\n\t\t".'<form enctype="multipart/form-data" name="editsettings" id="editsettings" method="post" action="'.esc_url($siteurl.'/wp-admin/options-general.php?page=wordpress_file_upload&amp;action=edit_settings').'" class="validate">';
	$nonce = wp_nonce_field('wfu_edit_admin_settings', '_wpnonce', false, false);
	$nonce_ref = wp_referer_field(false);
	$echo_str .= "\n\t\t\t".$nonce;
	$echo_str .= "\n\t\t\t".$nonce_ref;
	$echo_str .= "\n\t\t\t".'<input type="hidden" name="c" value="'.$admin_nonce.'" />';
	$echo_str .= "\n\t\t\t".'<input type="hidden" name="action" value="edit_settings">';
	$echo_str .= "\n\t\t\t".'<table class="form-table">';
	$echo_str .= "\n\t\t\t\t".'<tbody>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<h3>'.esc_html__('General Settings', 'wp-file-upload').'</h3>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_hashfiles">'.esc_html__('Hash Files', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_hashfiles" id="wfu_hashfiles" type="checkbox"'.($plugin_options['hashfiles'] == '1' ? ' checked="checked"' : '' ).' style="width:auto;" /> '.esc_html__('Enables better control of uploaded files, but slows down performance when uploaded files are larger than 100MBytes', 'wp-file-upload');
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['hashfiles'] == '1');
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_basedir">'.esc_html__('Base Directory', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_basedir" id="wfu_basedir" type="text" value="'.esc_attr($plugin_options['basedir']).'" />';
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['basedir']);
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_personaldata">'.esc_html__('Personal Data', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_personaldata" id="wfu_personaldata" type="checkbox"'.($plugin_options['personaldata'] == '1' ? ' checked="checked"' : '' ).' style="width:auto;" /> '.esc_html__('Enable this option if your website is subject to EU GDPR regulation and you want to define how to handle personal data', 'wp-file-upload');
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['personaldata'] == '1');
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_userstatehandler">'.esc_html__('User State Handler', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<select name="wfu_userstatehandler" id="wfu_userstatehandler" value="'.esc_attr($plugin_options['userstatehandler']).'">';
	$echo_str .= "\n\t\t\t\t\t\t\t\t".'<option value="dboption"'.( $plugin_options['userstatehandler'] == 'dboption' ? ' selected="selected"' : '' ).'>'.esc_html__('Cookies/DB (default)', 'wp-file-upload').'</option>';
	$echo_str .= "\n\t\t\t\t\t\t\t\t".'<option value="session"'.( $plugin_options['userstatehandler'] == 'session' || $plugin_options['userstatehandler'] == '' ? ' selected="selected"' : '' ).'>'.esc_html__('Session', 'wp-file-upload').'</option>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'</select>';
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['userstatehandler'] == 'session' || $plugin_options['userstatehandler'] == '' ? __('Session', 'wp-file-upload') : ( $plugin_options['userstatehandler'] == 'dboption' ? __('Cookies/DB', 'wp-file-upload') : __('Session', 'wp-file-upload') ));
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_relaxcss">'.esc_html__('Relax CSS Rules', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_relaxcss" id="wfu_relaxcss" type="checkbox"'.($plugin_options['relaxcss'] == '1' ? ' checked="checked"' : '' ).' style="width:auto;" /> '.esc_html__('If enabled then the textboxes and the buttons of the plugin will inherit the theme\'s styling', 'wp-file-upload');
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['relaxcss'] == '1');
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_admindomain">'.esc_html__('Admin Domain', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<select name="wfu_admindomain" id="wfu_admindomain" value="'.esc_attr($plugin_options['admindomain']).'">';
	$echo_str .= "\n\t\t\t\t\t\t\t\t".'<option value="siteurl"'.( $plugin_options['admindomain'] == 'siteurl' || $plugin_options['admindomain'] == '' ? ' selected="selected"' : '' ).'>'.esc_html__('Using site_url (default)', 'wp-file-upload').'</option>';
	$echo_str .= "\n\t\t\t\t\t\t\t\t".'<option value="adminurl"'.( $plugin_options['admindomain'] == 'adminurl' ? ' selected="selected"' : '' ).'>'.esc_html__('Using admin_url', 'wp-file-upload').'</option>';
	$echo_str .= "\n\t\t\t\t\t\t\t\t".'<option value="homeurl"'.( $plugin_options['admindomain'] == 'homeurl' ? ' selected="selected"' : '' ).'>'.esc_html__('Using home_url', 'wp-file-upload').'</option>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'</select>';
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['admindomain'] == 'siteurl' || $plugin_options['admindomain'] == '' ? __('Using site_url', 'wp-file-upload') : ( $plugin_options['admindomain'] == 'adminurl' ? __('Using admin_url', 'wp-file-upload') : __('Using home_url', 'wp-file-upload') ));
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_mediacustom">'.esc_html__('Show Custom Fields in Media Library', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_mediacustom" id="wfu_mediacustom" type="checkbox"'.($plugin_options['mediacustom'] == '1' ? ' checked="checked"' : '' ).' style="width:auto;" /> '.esc_html__('If enabled and the uploaded files are added to Media Library then any user fields submitted together with the files will be shown in Media Library', 'wp-file-upload');
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['mediacustom'] == '1');
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_includeotherfiles">'.esc_html__('Include Other Files in Plugin\'s Database', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_includeotherfiles" id="wfu_includeotherfiles" type="checkbox"'.($plugin_options['includeotherfiles'] == '1' ? ' checked="checked"' : '' ).' style="width:auto;" /> '.esc_html__('If enabled administrators can include in the plugin\'s database additional files through the File Browser', 'wp-file-upload');
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['includeotherfiles'] == '1');
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t\t".'<tr>';
	$echo_str .= "\n\t\t\t\t\t\t".'<th scope="row">';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<label for="wfu_altserver">'.esc_html__('Use Alternative Iptanus Server', 'wp-file-upload').'</label>';
	$echo_str .= "\n\t\t\t\t\t\t".'</th>';
	$echo_str .= "\n\t\t\t\t\t\t".'<td>';
	$echo_str .= "\n\t\t\t\t\t\t\t".'<input name="wfu_altserver" id="wfu_altserver" type="checkbox"'.($plugin_options['altserver'] == '1' ? ' checked="checked"' : '' ).' style="width:auto;" /> '.esc_html__('Switches to the alternative Iptanus server, residing on Google Cloud, for getting information such as latest version number.', 'wp-file-upload');
	$echo_str .= "\n\t\t\t\t\t\t\t".$render_current_value($plugin_options['altserver'] == '1');
	$echo_str .= "\n\t\t\t\t\t\t".'</td>';
	$echo_str .= "\n\t\t\t\t\t".'</tr>';
	$echo_str .= "\n\t\t\t\t".'</tbody>';
	$echo_str .= "\n\t\t\t".'</table>';
	$echo_str .= "\n\t\t\t".'<p class="submit">';
	$echo_str .= "\n\t\t\t\t".'<button class="button-primary" name="submitform" value="Update">'.esc_html__('Update', 'wp-file-upload').'</button>';
	$echo_str .= "\n\t\t\t".'</p>';
	$echo_str .= "\n\t\t".'</form>';
	$echo_str .= "\n\t".'</div>';
	$echo_str .= "\n".'</div>';
	
	echo $echo_str;
}


/**
 * Update Settings.
 *
 * This function updates plugin's settings.
 *
 * @since 2.1.2
 *
 * @global array $wordpress_file_upload_options Holds the plugin settings.
 *
 * @return bool Always true.
 */
function wfu_update_settings() {
	global $wordpress_file_upload_options;
	
	if ( !current_user_can( 'manage_options' ) ) return;
	if ( !check_admin_referer('wfu_edit_admin_settings') ) return;
	$plugin_options = wfu_decode_plugin_options(get_option( "wordpress_file_upload_options" ));
	$new_plugin_options = array();

//	$enabled = ( isset($_POST['wfu_enabled']) ? ( $_POST['wfu_enabled'] == "on" ? 1 : 0 ) : 0 ); 
	$hashfiles = ( isset($_POST['wfu_hashfiles']) ? ( $_POST['wfu_hashfiles'] == "on" ? 1 : 0 ) : 0 );
	$personaldata = ( isset($_POST['wfu_personaldata']) ? ( $_POST['wfu_personaldata'] == "on" ? 1 : 0 ) : 0 );
	$relaxcss = ( isset($_POST['wfu_relaxcss']) ? ( $_POST['wfu_relaxcss'] == "on" ? 1 : 0 ) : 0 ); 
	$mediacustom = ( isset($_POST['wfu_mediacustom']) ? ( $_POST['wfu_mediacustom'] == "on" ? 1 : 0 ) : 0 ); 
	$includeotherfiles = ( isset($_POST['wfu_includeotherfiles']) ? ( $_POST['wfu_includeotherfiles'] == "on" ? 1 : 0 ) : 0 ); 
	$altserver = ( isset($_POST['wfu_altserver']) ? ( $_POST['wfu_altserver'] == "on" ? 1 : 0 ) : 0 ); 
	if ( isset($_POST['wfu_basedir']) && isset($_POST['wfu_userstatehandler']) && isset($_POST['wfu_admindomain']) && isset($_POST['submitform']) ) {
		if ( $_POST['submitform'] == "Update" ) {
			$new_plugin_options['version'] = '1.0';
			$new_plugin_options['shortcode'] = $plugin_options['shortcode'];
			$new_plugin_options['hashfiles'] = $hashfiles;
			$new_plugin_options['basedir'] = sanitize_url($_POST['wfu_basedir']);
			$new_plugin_options['personaldata'] = $personaldata;
			$new_plugin_options['userstatehandler'] = sanitize_key($_POST['wfu_userstatehandler']);
			$new_plugin_options['relaxcss'] = $relaxcss;
			$new_plugin_options['admindomain'] = sanitize_text_field($_POST['wfu_admindomain']);
			$new_plugin_options['mediacustom'] = $mediacustom;
			$new_plugin_options['includeotherfiles'] = $includeotherfiles;
			$new_plugin_options['altserver'] = $altserver;
			$wordpress_file_upload_options = $new_plugin_options;
			$encoded_options = wfu_encode_plugin_options($new_plugin_options);
			wfu_update_option( "wordpress_file_upload_options", $encoded_options );
			if ( $new_plugin_options['hashfiles'] == '1' && $plugin_options['hashfiles'] != '1' )
				wfu_reassign_hashes();
		}
	}

	return true;
}

/**
 * Update a Plugin Setting.
 *
 * This function updates an individual plugin setting.
 *
 * @since 4.12.0
 *
 * @global array $wordpress_file_upload_options Holds the plugin settings.
 *
 * @param string $option The plugin option to change.
 * @param mixed $value The new value of the option.
 */
function wfu_update_setting($option, $value) {
	global $wordpress_file_upload_options;
	
	$plugin_options = wfu_decode_plugin_options(get_option( "wordpress_file_upload_options" ));
	$plugin_options[$option] = $value;
	
	$wordpress_file_upload_options = $plugin_options;
	$encoded_options = wfu_encode_plugin_options($plugin_options);
	wfu_update_option( "wordpress_file_upload_options", $encoded_options );
}


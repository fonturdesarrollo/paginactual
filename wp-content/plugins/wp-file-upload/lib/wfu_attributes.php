<?php

/**
 * Definition of Various Attributes of the Plugin
 *
 * This file contains definition of shortcode and formfield attributes of the
 * plugin.
 *
 * @link /lib/wfu_attributes.php
 *
 * @package Iptanus File Upload Plugin
 * @subpackage Core Components
 * @since 2.1.2
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Definition of Uploader Form Elements
 *
 * This function defines the elements of the plugin upload form.
 *
 * @since 2.1.2
 *
 * @return array The list of uploader form elements (components).
 */
function wfu_component_definitions() {
	$components = array(
		array(
			"id"				=> "title",
			"name"				=> __('Title', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> array("plugin/".__('Plugin', 'wp-file-upload'), "title/".__('Title', 'wp-file-upload')),
			"multiplacements"	=> false,
			"help"				=> __('A title text for the plugin', 'wp-file-upload')
		),
		array(
			"id"				=> "filename",
			"name"				=> __('Filename', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> null,
			"multiplacements"	=> false,
			"help"				=> __('It shows the name of the selected file (useful only for single file uploads).', 'wp-file-upload')
		),
		array(
			"id"				=> "selectbutton",
			"name"				=> __('Select Button', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> null,
			"multiplacements"	=> false,
			"help"				=> __('Represents the button to select the files for upload.', 'wp-file-upload')
		),
		array(
			"id"				=> "uploadbutton",
			"name"				=> __('Upload Button', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> null,
			"multiplacements"	=> false,
			"help"				=> __('Represents the button to execute the upload after some files have been selected.', 'wp-file-upload')
		),
		array(
			"id"				=> "subfolders",
			"name"				=> __('Subfolders', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> array("uploadfolder_label/".__('Upload Folder Label', 'wp-file-upload'), "subfolders/".__('Subfolders', 'wp-file-upload'), "subfolders_label/".__('Subfolders Label', 'wp-file-upload'), "subfolders_select/".__('Subfolders List', 'wp-file-upload')),
			"multiplacements"	=> false,
			"help"				=> __('Allows the user to select the upload folder from a dropdown list.', 'wp-file-upload')
		),
		array(
			"id"				=> "webcam",
			"name"				=> __('Webcam', 'wp-file-upload'),
			"mode"				=> "commercial",
			"dimensions"		=> array("webcam/".__('Webcam Box', 'wp-file-upload')),
			"multiplacements"	=> false,
			"help"				=> __('Displays video from the device\'s webcam. The user can capture and upload screenshots or video streams.', 'wp-file-upload')
		),
		array(
			"id"				=> "progressbar",
			"name"				=> __('Progressbar', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> null,
			"multiplacements"	=> false,
			"help"				=> __('Displays a simple progress bar, showing total progress of upload.', 'wp-file-upload')
		),
		array(
			"id"				=> "userdata",
			"name"				=> __('User Fields', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> array("userdata/".__('User Fields', 'wp-file-upload'), "userdata_label/".__('User Fields Label', 'wp-file-upload'), "userdata_value/".__('User Fields Value', 'wp-file-upload')),
			"multiplacements"	=> true,
			"help"				=> __('Displays additional fields that the user must fill-in together with the uploaded files.', 'wp-file-upload')
		),
		array(
			"id"				=> "consent",
			"name"				=> __('Consent', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> array("consent/".__('Consent Block', 'wp-file-upload')),
			"multiplacements"	=> false,
			"help"				=> __('Displays a checkbox asking user\'s consent for storing personal data.', 'wp-file-upload')
		),
		array(
			"id"				=> "message",
			"name"				=> __('Message', 'wp-file-upload'),
			"mode"				=> "free",
			"dimensions"		=> null,
			"multiplacements"	=> false,
			"help"				=> __('Displays a message block with information about the upload, together with any warnings or errors.', 'wp-file-upload')
		)
	);
	
	wfu_array_remove_nulls($components);
	$components = array_values($components);

	return $components;
}

/**
 * Definition of Uploader Form Attribute Categories
 *
 * This function defines the categories of the plugin uploader shortcode 
 * attributes. These categories show up as different tabs of the shortcode
 * composer.
 *
 * @since 2.1.2
 *
 * @return array The list of uploader form attribute categories.
 */
function wfu_category_definitions() {
	$cats = array(
		"general"			=> array(
			"title"				=> __('General', 'wp-file-upload'),
			"subcategories"		=> array(
				"basic_functionalities"		=> __('Basic Functionalities', 'wp-file-upload')
			) +
			array(
				"filters"					=> __('Filters', 'wp-file-upload'),
				"upload_path_files"			=> __('Upload Path and Files', 'wp-file-upload'),
				"redirection"				=> __('Redirection', 'wp-file-upload'),
				"other_admin_options"		=> __('Other Administrator Options', 'wp-file-upload')
			)
		),
		"placements"		=> array(
			"title"				=> __('Placements', 'wp-file-upload'),
			"subcategories"		=> array(
				"component_positions"		=> __('Plugin Component Positions', 'wp-file-upload')
			)
		),
		"labels"			=> array(
			"title"				=> __('Labels', 'wp-file-upload'),
			"subcategories"		=> array(
				"plugin_title"				=> __('Title', 'wp-file-upload'),
				"button_labels"				=> __('Buttons', 'wp-file-upload'),
				"upload_folder_labels"		=> __('Upload Folder', 'wp-file-upload')
			) +
			array(
				"upload_messages"			=> __('Upload Messages', 'wp-file-upload'),
				"webcam_labels"				=> __('Webcam Labels', 'wp-file-upload'),
				"other_labels"				=> __('Other Labels', 'wp-file-upload')
			)
		),
		"notifications"		=> array(
			"title"				=> __('Notifications', 'wp-file-upload'),
			"subcategories"		=> array(
				"email_notifications"		=> __('Email Notifications', 'wp-file-upload')
			)
		),
		"personaldata"		=> array(
			"title"				=> __('Personal Data', 'wp-file-upload'),
			"subcategories"		=> array(
				"general_pd_options"		=> __('General Personal Data Options', 'wp-file-upload'),
				"consent_behaviour"			=> __('Consent Behaviour', 'wp-file-upload'),
				"consent_appearance"		=> __('Consent Appearance', 'wp-file-upload')
			)
		),
		"themes" 			=> array(
			"title"				=> __('Themes', 'wp-file-upload'),
			"subcategories"		=> array(
				"mui_settings"				=> __('Material UI Settings', 'wp-file-upload')
			)
		),
		"colors"			=> array(
			"title"				=> __('Colors', 'wp-file-upload'),
			"subcategories"		=> array(
				"upload_message_colors"		=> __('Upload Message Colors', 'wp-file-upload')
			)
		),
		"dimensions"		=> array(
			"title"				=> __('Dimensions', 'wp-file-upload'),
			"subcategories"		=> array(
				"component_widths"			=> __('Plugin Component Widths', 'wp-file-upload'),
				"component_heights"			=> __('Plugin Component Heights', 'wp-file-upload')
			)
		),
		"userdata"			=> array(
			"title"				=> __('Additional Fields', 'wp-file-upload'),
			"subcategories"		=> array(
				"additional_data_fields"	=> __('Additional Data Fields', 'wp-file-upload')
			)
		),
		"interoperability"	=> array(
			"title"				=> __('Interoperability', 'wp-file-upload'),
			"subcategories"		=> array(
				"with_other_plugins"		=> __('Connection With Other Plugins', 'wp-file-upload'),
				"with_other_wp_features"	=> __('Connection With Other Wordpress Features', 'wp-file-upload'),
				"with_cloud_services"		=> __('Connection With Cloud Services', 'wp-file-upload')
			)
		),
		"webcam"			=> array(
			"title"				=> __('Webcam', 'wp-file-upload'),
			"subcategories"		=> array(
				"capture_from_webcam"		=> __('Capture from Webcam', 'wp-file-upload')
			)
		)
	);

	return $cats;
}

/**
 * Definition of Uploader Form Custom Fields
 *
 * This function defines the plugin upload form custom fields and their
 * attributes.
 *
 * @since 3.3.0
 *
 * @return array The list of upload form custom fields.
 */
function wfu_formfield_definitions() {
	//field properties have 2 parts separated by "/"; the first part determines if the property will be shown to the user (show or hide); the second part determines default value)
	//when making changes in the structure of formfield definitions, the following are affected:
	//  - wfu_admin_composer.php function wfu_shortcode_composer
	//      variable $fieldprops_basic
	//      variable $fieldprops_default
	//      variable $template
	//      variable wfu_attribute_..._typeprops
	//      variable $from_template
	//  - wfu_functions.php function wfu_parse_userdata_attribute
	//      variable $default
	//      variable $fieldprops
	//  - wfu_blocks.php function wfu_userdata_apply_template
	//      return variable
	//  - wordpress_file_upload_adminfuctions.js function wfu_formdata_type_changed
	//      variable field
	//  - wordpress_file_upload_adminfuctions.js function wfu_formdata_add_field
	//      variable field
	//  - wordpress_file_upload_adminfuctions.js function wfu_formdata_prepare_template
	//      variable fieldprops_basic
	//      variable template
	//  - wordpress_file_upload_adminfuctions.js function wfu_update_formfield_value
	//      variable part
	//  - wordpress_file_upload_adminfuctions.js function wfu_apply_value
	//      variable def
	//      variable fieldprops
	$formfields = array(
		array(
			"type"						=> "text",
			"type_description"			=> __('Simple Text', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "show/false",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('if a value is set, then all fields having the same value will belong to the same group', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		),
		array(
			"type"						=> "multitext",
			"type_description"			=> __('Multiple Lines Text', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "hide/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "hide/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('if a value is set, then all fields having the same value will belong to the same group', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		),
		array(
			"type"						=> "number",
			"type_description"			=> __('Number', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "show/true",
			"validate_hint"				=> __('if checked, then the number entered by the user will be checked if it is a valid number, based on the format defined, before file upload', 'wp-file-upload'),
			"typehook"					=> "show/false",
			"typehook_hint"				=> __('if checked, then only valid characters will be allowed during typing', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('if a non-empty group value is set, then another email confirmation field belonging to the same group must have the same email value', 'wp-file-upload'),
			"format"					=> "show/d",
			"format_hint"				=> __('enter a format for the number:&#10;  d for integers&#10;  f for floating point numbers&#10;the dot (.) symbol is used as a decimal separator', 'wp-file-upload')
		),
		array(
			"type"						=> "email",
			"type_description"			=> __('Email', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "show/true",
			"validate_hint"				=> __('if checked, then the email entered by the user will be checked if it is valid before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "show/0",
			"group_hint"				=> __('if a non-empty group value is set, then another email confirmation field belonging to the same group must have the same email value', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		),
		array(
			"type"						=> "confirmemail",
			"type_description"			=> __('Confirmation Email', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/true",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "hide/true",
			"validate_hint"				=> __('if checked, then the confirmation email entered by the user will be checked if it is the same with the email belonging to the same group', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "hide/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "show/0",
			"group_hint"				=> __('enter a non-empty value to match this email confirmation field with another email field', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		),
		array(
			"type"						=> "password",
			"type_description"			=> __('Password', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/true",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "false/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the value entered by the user will be validated', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "hide/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "show/0",
			"group_hint"				=> __('if a non-empty group value is set, then another password confirmation field belonging to the same group must have the same password', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		),
		array(
			"type"						=> "confirmpassword",
			"type_description"			=> __('Confirmation Password', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/true",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "false/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "hide/true",
			"validate_hint"				=> __('if checked, then the value entered by the user will be validated', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "hide/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "show/0",
			"group_hint"				=> __('if a non-empty group value is set, then another password confirmation field belonging to the same group must have the same password', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		),
		array(
			"type"						=> "checkbox",
			"type_description"			=> __('Checkbox', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then this checkbox field must be checked before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/none",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/false",
			"default_hint"				=> __('enter a default value (true or false) for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "show/",
			"data_label"				=> __('Description', 'wp-file-upload'),
			"data_hint"					=> __('enter a description for the checkbox', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('if a value is set, then all fields having the same value will belong to the same group', 'wp-file-upload'),
			"format"					=> "show/right",
			"format_hint"				=> __('define the location of the description in relation to the check box&#10;possible values are: top, right, bottom, left', 'wp-file-upload')
		),
		array(
			"type"						=> "radiobutton",
			"type_description"			=> __('Radio button', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then a radio button must be selected before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "show/",
			"data_label"				=> __('Items', 'wp-file-upload'),
			"data_hint"					=> __('enter a comma delimited list of radio button items', 'wp-file-upload'),
			"group"						=> "show/0",
			"group_hint"				=> __('all radio buttons having the same group id belong to the same group', 'wp-file-upload'),
			"format"					=> "show/",
			"format_hint"				=> __('define the location of the radio labels in relation to their radio buttons (top, right, bottom, left)&#10;and the placement of the radio buttons (horizontal, vertical)', 'wp-file-upload')
		),
		array(
			"type"						=> "date",
			"type_description"			=> __('Date', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then a date must be entered before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default date for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('enter data items', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('enter a group value', 'wp-file-upload'),
			"format"					=> "show/",
			"format_hint"				=> __('define the format of the date field as follows:&#10;  d - day of month (no leading zero)&#10;  dd - day of month (two digit)&#10;  o - day of the year (no leading zeros)&#10;  oo - day of the year (three digit)&#10;  D - day name short&#10;  DD - day name long&#10;  m - month of year (no leading zero)&#10;  mm - month of year (two digit)&#10;  M - month name short&#10;  MM - month name long&#10;  y - year (two digit)&#10;  yy - year (four digit)&#10;  @ - Unix timestamp (ms since 01/01/1970)&#10;  ! - Windows ticks (100ns since 01/01/0001)&#10;  &#39;...&#39; - literal text&#10;  &#39;&#39; - single quote&#10;  anything else - literal text&#10;the format must be in parenthesis ()', 'wp-file-upload')
		),
		array(
			"type"						=> "time",
			"type_description"			=> __('Time', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then a time must be entered before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default time for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('enter data items', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('enter a group value', 'wp-file-upload'),
			"format"					=> "show/",
			"format_hint"				=> __('define the format of the time field as follows:&#10;  H - hour with no leading 0 (24 hour)&#10;  HH - hour with leading 0 (24 hour)&#10;  h - hour with no leading 0 (12 hour)&#10;  hh - hour with leading 0 (12 hour)&#10;  m - minute with no leading 0&#10;  mm - minute with leading 0&#10;  s - second with no leading 0&#10;  ss - second with leading 0&#10;  l - milliseconds always with leading 0&#10;  c - microseconds always with leading 0&#10;  t - a or p for AM/PM&#10;  T - A or P for AM/PM&#10;  tt - am or pm for AM/PM&#10;  TT - AM or PM for AM/PM&#10;  z - timezone as defined by timezoneList&#10;  Z - timezone in Iso 8601 format (+04:45)&#10;  &#39;...&#39; - literal text&#10;the format must be in parenthesis ()', 'wp-file-upload')
		),
		array(
			"type"						=> "datetime",
			"type_description"			=> __('DateTime', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then a date and time must be entered before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default date and time for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('enter data items', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('enter a group value', 'wp-file-upload'),
			"format"					=> "show/",
			"format_hint"				=> __('define the format of the datetime field as follows:&#10;  date(dateformat) where dateformat is:&#10;    d - day of month (no leading zero)&#10;    dd - day of month (two digit)&#10;    o - day of the year (no leading zeros)&#10;    oo - day of the year (three digit)&#10;    D - day name short&#10;    DD - day name long&#10;    m - month of year (no leading zero)&#10;    mm - month of year (two digit)&#10;    M - month name short&#10;    MM - month name long&#10;    y - year (two digit)&#10;    yy - year (four digit)&#10;    @ - Unix timestamp (ms since 01/01/1970)&#10;    ! - Windows ticks (100ns since 01/01/0001)&#10;    &#39;...&#39; - literal text&#10;    &#39;&#39; - single quote&#10;    anything else - literal text&#10;  time(timeformat) where timeformat is:&#10;    H - hour with no leading 0 (24 hour)&#10;    HH - hour with leading 0 (24 hour)&#10;    h - hour with no leading 0 (12 hour)&#10;    hh - hour with leading 0 (12 hour)&#10;    m - minute with no leading 0&#10;    mm - minute with leading 0&#10;    s - second with no leading 0&#10;    ss - second with leading 0&#10;    l - milliseconds always with leading 0&#10;    c - microseconds always with leading 0&#10;    t - a or p for AM/PM&#10;    T - A or P for AM/PM&#10;    tt - am or pm for AM/PM&#10;    TT - AM or PM for AM/PM&#10;    z - timezone as defined by timezoneList&#10;    Z - timezone in Iso 8601 format (+04:45)&#10;    &#39;...&#39; - literal text', 'wp-file-upload')
		),
		array(
			"type"						=> "list",
			"type_description"			=> __('Listbox', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then a list item must be selected before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "show/",
			"data_label"				=> __('List Items', 'wp-file-upload'),
			"data_hint"					=> __('enter a comma delimited list of items', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('all items having the same group id belong to the same group', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter the format of the list', 'wp-file-upload')
		),
		array(
			"type"						=> "dropdown",
			"type_description"			=> __('Dropdown', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then an item from the dropdown list must be selected before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "show/",
			"data_label"				=> __('List Items', 'wp-file-upload'),
			"data_hint"					=> __('enter a comma delimited list of items', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('all items having the same group id belong to the same group', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter the format of the list', 'wp-file-upload')
		),
		array(
			"type"						=> "countrylist",
			"type_description"			=> __('Country List', 'wp-file-upload'),
			//label properties
			"label"						=> "",
			"label_label"				=> __('Label', 'wp-file-upload'),
			"label_hint"				=> __('enter the label that will be shown next to the field', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "show/false",
			"required_hint"				=> __('if checked, then an item from the dropdown list must be selected before file upload', 'wp-file-upload'),
			"donotautocomplete"			=> "show/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will not be autocompleted by browsers', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "show/left",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "show/right",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "show/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "show/",
			"data_label"				=> __('Suggested Items', 'wp-file-upload'),
			"data_hint"					=> __('enter a comma delimited list of suggested countries that will be shown on top', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('all items having the same group id belong to the same group', 'wp-file-upload'),
			"format"					=> "show/",
			"format_hint"				=> __('format how each country will be shown in the list&#10;the attributes &#39;code&#39;, &#39;label&#39; and &#39;phone&#39; can be used&#10;if format starts with &#39;flag&#39; then the flag of the country will also be shown when Material UI theme is active', 'wp-file-upload')
		),
		array(
			"type"						=> "honeypot",
			"type_description"			=> __('Hidden Honeypot', 'wp-file-upload'),
			//label properties
			"label"						=> "website",
			"label_label"				=> __('Name', 'wp-file-upload'),
			"label_hint"				=> __('enter the name of the honeypot field; it must be a value that bots can easily recognize, like \'website\' or \'URL\'', 'wp-file-upload'),
			//checkbox properties
			"required"					=> "hide/false",
			"required_hint"				=> __('if checked, then this field must have a non-empty value for the file to be uploaded', 'wp-file-upload'),
			"donotautocomplete"			=> "hide/true",
			"donotautocomplete_hint"	=> __('if checked, then the field will notify the browsers not to fill it with autocomplete data when the plugin is reloaded', 'wp-file-upload'),
			"validate"					=> "hide/false",
			"validate_hint"				=> __('if checked, then the field value entered by the user will be validated before file upload', 'wp-file-upload'),
			"typehook"					=> "hide/false",
			"typehook_hint"				=> __('if checked, then text suggestions will be shown below the field as the user types more text inside', 'wp-file-upload'),
			//dropdown properties
			"labelposition"				=> "hide/none",
			"labelposition_hint"		=> __('select the position of the field&#39;s label; the position is relative to the field', 'wp-file-upload'),
			"hintposition"				=> "hide/none",
			"hintposition_hint"			=> __('select the position of the hint that will be shown to notify the user that something is wrong&#10;the position is relative to the field', 'wp-file-upload'),
			//text properties
			"default"					=> "hide/",
			"default_hint"				=> __('enter a default value for the field or leave it empty if you do not want a default value', 'wp-file-upload'),
			"data"						=> "hide/",
			"data_label"				=> __('Data', 'wp-file-upload'),
			"data_hint"					=> __('complete a list of values to be shown to the user', 'wp-file-upload'),
			"group"						=> "hide/",
			"group_hint"				=> __('if a value is set, then all fields having the same value will belong to the same group', 'wp-file-upload'),
			"format"					=> "hide/",
			"format_hint"				=> __('enter a format to format user selection', 'wp-file-upload')
		)
	);
	
	return $formfields;
}

/**
 * Definition of Uploader Form Attributes
 *
 * This function defines the plugin uploader shortcode attributes.
 *
 * @since 2.1.2
 *
 * @return array The list of uploader form attributes.
 */
function wfu_attribute_definitions() {
	$defs = array(
		array(
			"name"		=> __('Widget ID', 'wp-file-upload'),
			"attribute"	=> "widgetid",
			"type"		=> "hidden",
			"validator"	=> "widgetid",
			"listitems"	=> null,
			"value"		=> "",
			"mode"		=> "free",
			"category"	=> "",
			"subcategory"	=> "basic",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> ""
		),
		array(
			"name"		=> __('Plugin ID', 'wp-file-upload'),
			"attribute"	=> "uploadid",
			"type"		=> "integer",
			"validator"	=> "integer+",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_UPLOADID"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "basic_functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The unique id of each shortcode. When you have many shortcodes of this plugin in the same page, then you must use different id for each one.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Single Button Operation', 'wp-file-upload'),
			"attribute"	=> "singlebutton",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_SINGLEBUTTON"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "basic_functionalities",
			"parent"	=> "",
			"dependencies"	=> array("!uploadbutton"),
			"variables"	=> null,
			"help"		=> __('When it is activated, no Upload button will be shown, but upload will start automatically as soon as files are selected.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Upload Path', 'wp-file-upload'),
			"attribute"	=> "uploadpath",
			"type"		=> "ltext",
			"validator"	=> "path",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_UPLOADPATH"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "basic_functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%userid%", "%username%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%"),
			"help"		=> __('This is the folder where the files will be uploaded. The path is relative to wp-contents folder of your Wordpress website. The path can be dynamic by including variables such as %%username%% or %%blogid%%. Please check Documentation on how to use variables inside uploadpath.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Plugin Fit Mode', 'wp-file-upload'),
			"attribute"	=> "fitmode",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("fixed/".__('Fixed', 'wp-file-upload'), "responsive/".__('Responsive', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_FITMODE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "basic_functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('This defines how the plugin\'s elements will fit inside the page/post. If it is set to fixed, then the plugin\'s element positions will remain fixed no matter the width of the container page/post. If it is set to responsive, then the plugin\'s elements will wrap to fit the width of the container page/post.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Allow No File', 'wp-file-upload'),
			"attribute"	=> "allownofile",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_ALLOWNOFILE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "basic_functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('When it is activated a user can submit the upload form even if a file is not selected.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Reset Form Mode', 'wp-file-upload'),
			"attribute"	=> "resetmode",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("always/".__('Always', 'wp-file-upload'), "onsuccess/".__('On Success', 'wp-file-upload'), "never/".__('Never', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_RESETMODE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "basic_functionalities",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines whether the form will be reset after upload; \'always\' means that it will be reset in any case, \'onsuccess\' means that it will be reset only if upload was successful, \'never\' means that it will never be reset.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Upload Roles', 'wp-file-upload'),
			"attribute"	=> "uploadrole",
			"type"		=> "rolelist",
			"validator"	=> "text",
			"listitems"	=> array("default_administrator"),
			"value"		=> WFU_VAR("WFU_UPLOADROLE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "filters",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Defines the categories (roles) of users allowed to upload files. Multiple selections can be made. If \'Select All\' is checked, then all logged users can upload files. If \'Include Guests\' is checked, then guests (not logged users) can also upload files. Default value is \'all,guests\'.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Allowed File Extensions', 'wp-file-upload'),
			"attribute"	=> "uploadpatterns",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_UPLOADPATTERNS"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "filters",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Defines the allowed file extensions. Multiple extentions can be defined, separated with comma (,).', 'wp-file-upload')
		),
		array(
			"name"		=> __('Allowed File Size', 'wp-file-upload'),
			"attribute"	=> "maxsize",
			"type"		=> "float",
			"validator"	=> "float",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MAXSIZE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "filters",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Defines the allowed file size in MBytes. Files larger than maxsize will not be uploaded. Floating point numbers can be used (e.g. \'2.5\').', 'wp-file-upload')
		),
		array(
			"name"		=> __('Create Upload Path', 'wp-file-upload'),
			"attribute"	=> "createpath",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_CREATEPATH"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If activated then the plugin will attempt to create the upload path, if it does not exist.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Do Not Change Filename', 'wp-file-upload'),
			"attribute"	=> "forcefilename",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FORCEFILENAME"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The plugin by default will modify the filename if it contains invalid or non-english characters. By enabling this attribute the plugin will not change the filename.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Folder Access Method', 'wp-file-upload'),
			"attribute"	=> "accessmethod",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("normal/".__('Normal', 'wp-file-upload'), "*ftp/".__('FTP', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_ACCESSMETHOD"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "",
			"dependencies"	=> array("ftpinfo", "userftpdomain", "ftppassivemode", "ftpfilepermissions"),
			"variables"	=> null,
			"help"		=> __('Some times files cannot be uploaded to the upload folder because of read/write permissions. A workaround is to use ftp to transfer the files, however ftp credentials must be declared, so use carefully and only if necessary.', 'wp-file-upload')
		),
		array(
			"name"		=> __('FTP Access Credentials', 'wp-file-upload'),
			"attribute"	=> "ftpinfo",
			"type"		=> "ftpinfo",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FTPINFO"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If FTP access method is selected, then FTP credentials must be declared here, in the form username:password@ftpdomain:port, e.g. myusername:mypass@ftpdomain.com:80. Port can be ommitted. The user can select Secure FTP (SFTP) by putting the prefix \'s\' before the port number, e.g. myusername:mypass@ftpdomain.com:s22, or FTP over TLS (FTPS) by putting the suffix \'s\' after the port number, e.g. myusername:mypass@ftpdomain.com:21s (in this case a port number must be defined).', 'wp-file-upload')
		),
		array(
			"name"		=> __('Use FTP Domain', 'wp-file-upload'),
			"attribute"	=> "useftpdomain",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_USEFTPDOMAIN"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If FTP access method is selected, then sometimes the FTP domain is different than the domain of your Wordpress installation. In this case, enable this attribute if upload of files is not successful.', 'wp-file-upload')
		),
		array(
			"name"		=> __('FTP Passive Mode', 'wp-file-upload'),
			"attribute"	=> "ftppassivemode",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FTPPASSIVEMODE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If files fail to upload to the ftp domain then switching to passive FTP mode may solve the problem.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Permissions of Uploaded File', 'wp-file-upload'),
			"attribute"	=> "ftpfilepermissions",
			"type"		=> "text",
			"validator"	=> "integer",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FTPFILEPERMISSIONS"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "accessmethod",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Force the uploaded files to have specific permissions. This is a 4-digit octal number, e.g. 0777. If left empty, then the ftp server will define the permissions.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Show Upload Folder Path', 'wp-file-upload'),
			"attribute"	=> "showtargetfolder",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_SHOWTARGETFOLDER"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "",
			"dependencies"	=> array("targetfolderlabel"),
			"variables"	=> null,
			"help"		=> __('It defines if a label with the upload directory will be shown.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Select Subfolder', 'wp-file-upload'),
			"attribute"	=> "askforsubfolders",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_ASKFORSUBFOLDERS"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "",
			"dependencies"	=> array("subfoldertree", "subfolderlabel"),
			"variables"	=> null,
			"help"		=> __('If enabled then user can select the upload folder from a drop down list. The list is defined in subfoldertree attribute. The folder paths are relative to the path defined in uploadpath.', 'wp-file-upload')
		),
		array(
			"name"		=> __('List of Subfolders', 'wp-file-upload'),
			"attribute"	=> "subfoldertree",
			"type"		=> "folderlist",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_SUBFOLDERTREE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "askforsubfolders",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The list of folders a user can select. Please see documentation on how to create the list of folders. If \'Auto-populate list\' is selected, then the list will be filled automatically with the first-level subfolders inside the directory defined by uploadpath. If \'List is editable\' is selected, then the user will have the capability to type the subfolder and filter the subfolder list and/or define a new subfolder.', 'wp-file-upload')
		),
		array(
			"name"		=> __('File Duplicates Policy', 'wp-file-upload'),
			"attribute"	=> "duplicatespolicy",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("overwrite/".__('Overwrite', 'wp-file-upload'), "reject/".__('Reject', 'wp-file-upload'), "*maintain both/".__('Maintain Both', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_DUBLICATESPOLICY"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "",
			"dependencies"	=> array("uniquepattern"),
			"variables"	=> null,
			"help"		=> __('It determines what happens when an uploaded file has the same name with an existing file. The uploaded file can overwrite the existing one, be rejected or both can be kept by renaming the uploaded file according to a rule defined in uniquepattern attribute.', 'wp-file-upload')
		),
		array(
			"name"		=> __('File Rename Rule', 'wp-file-upload'),
			"attribute"	=> "uniquepattern",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("index/".__('Index', 'wp-file-upload'), "datetimestamp/".__('Datetime Stamp', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_UNIQUEPATTERN"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "upload_path_files",
			"parent"	=> "duplicatespolicy",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If duplicatespolicy is set to \'maintain both\', then this rule defines how the uploaded file will be renamed, in order not to match an existing file. An incremental index number or a datetime stamp can be included in the uploaded file name to make it unique.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Redirect after Upload', 'wp-file-upload'),
			"attribute"	=> "redirect",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_REDIRECT"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "redirection",
			"parent"	=> "",
			"dependencies"	=> array("redirectlink"),
			"variables"	=> null,
			"help"		=> __('If enabled, the user will be redirected to a url defined in redirectlink attribute upon successful upload of all the files.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Redirection URL', 'wp-file-upload'),
			"attribute"	=> "redirectlink",
			"type"		=> "ltext",
			"validator"	=> "link",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_REDIRECTLINK"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "redirection",
			"parent"	=> "redirect",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%username%"),
			"help"		=> __('This is the redirect URL. The URL can be dynamic by using variables. Please see Documentation on how to use variables inside attributes.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Show Detailed Admin Messages', 'wp-file-upload'),
			"attribute"	=> "adminmessages",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_ADMINMESSAGES"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "other_admin_options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled then more detailed messages about upload operations will be shown to administrators for debugging or error detection.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Block Themes Compatibility Mode', 'wp-file-upload'),
			"attribute"	=> "blockcompatibility",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("auto/".__('Auto', 'wp-file-upload'), "on/".__('ON', 'wp-file-upload'), "off/".__('OFF', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_BLOCKCOMPATIBILITY"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "other_admin_options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It determines the compatibility mode for block themes. If \'auto\' is selected the plugin will auto-detect if the theme is block based and will adapt its output accordingly. If \'on\' is selected the plugin will always consider that the theme is block based. If \'off\' is selected there will be no adaptation for block based themes.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Disable AJAX', 'wp-file-upload'),
			"attribute"	=> "forceclassic",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FORCECLASSIC"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "other_admin_options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If AJAX is disabled, then upload of files will be performed using HTML forms, meaning that page will refresh to complete the upload. Use it in case that AJAX is causing problems with your page (although the plugin has an auto-detection feature for checking if user\'s browser supports AJAX or not).', 'wp-file-upload')
		),
		array(
			"name"		=> __('Test Mode', 'wp-file-upload'),
			"attribute"	=> "testmode",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_TESTMODE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "other_admin_options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled then the plugin will be shown in test mode, meaning that all selected features will be shown but no upload will be possible. Use it to review how the plugin looks like and style it according to your needs.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Debug Mode', 'wp-file-upload'),
			"attribute"	=> "debugmode",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_DEBUGMODE"),
			"mode"		=> "free",
			"category"	=> "general",
			"subcategory"	=> "other_admin_options",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled then the plugin will show to administrators any internal PHP warnings and errors generated during the upload process inside the message box.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Plugin Component Positions', 'wp-file-upload'),
			"attribute"	=> "placements",
			"type"		=> "placements",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_PLACEMENTS"),
			"mode"		=> "free",
			"category"	=> "placements",
			"subcategory"	=> "component_positions",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the positions of the selected plugin components. Drag the components from the right pane and drop them to the left one to define your own component positions.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Plugin Title', 'wp-file-upload'),
			"attribute"	=> "uploadtitle",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADTITLE,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "plugin_title",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('A text representing the title of the plugin.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Select Button Caption', 'wp-file-upload'),
			"attribute"	=> "selectbutton",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_SELECTBUTTON,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "button_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The caption of the button that selects the files for upload.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Upload Button Caption', 'wp-file-upload'),
			"attribute"	=> "uploadbutton",
			"type"		=> "text",
			"validator"	=> "htmltext",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADBUTTON,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "button_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The caption of the button that starts the upload.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Upload Folder Label', 'wp-file-upload'),
			"attribute"	=> "targetfolderlabel",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_TARGETFOLDERLABEL"),
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "upload_folder_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('This is the label before the upload folder path, if the path is selected to be shown using the showtargetfolder attribute.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Select Subfolder Label', 'wp-file-upload'),
			"attribute"	=> "subfolderlabel",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_SUBFOLDERLABEL"),
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "upload_folder_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('This is the label of the subfolder dropdown list. It is active when askforsubfolders attribute is on.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Success Upload Message', 'wp-file-upload'),
			"attribute"	=> "successmessage",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> wfu_unesc_percent(WFU_SUCCESSMESSAGE),
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "upload_messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> __('This is the message that will be shown for every file that has been uploaded successfully.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Warning Upload Message', 'wp-file-upload'),
			"attribute"	=> "warningmessage",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> wfu_unesc_percent(WFU_WARNINGMESSAGE),
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "upload_messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> __('This is the message that will be shown for every file that has been uploaded with warnings.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Error Upload Message', 'wp-file-upload'),
			"attribute"	=> "errormessage",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> wfu_unesc_percent(WFU_ERRORMESSAGE),
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "upload_messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> __('This is the message that will be shown for every file that has failed to upload.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Wait Upload Message', 'wp-file-upload'),
			"attribute"	=> "waitmessage",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> wfu_unesc_percent(WFU_WAITMESSAGE),
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "upload_messages",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%filename%", "%filepath%"),
			"help"		=> __('This is the message that will be shown while file is uploading.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Upload Media Button Caption', 'wp-file-upload'),
			"attribute"	=> "uploadmediabutton",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_UPLOADMEDIABUTTON,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "webcam_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The caption of the button that starts the upload when media capture from the webcam has been activated.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Video Filename', 'wp-file-upload'),
			"attribute"	=> "videoname",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VIDEONAME,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "webcam_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%userid%", "%username%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%"),
			"help"		=> __('This is the file name of the captured video file.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Image Filename', 'wp-file-upload'),
			"attribute"	=> "imagename",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_IMAGENAME,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "webcam_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> array("%userid%", "%username%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%"),
			"help"		=> __('This is the file name of the captured image file.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Required Fields Suffix', 'wp-file-upload'),
			"attribute"	=> "requiredlabel",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_USERDATA_REQUIREDLABEL,
			"mode"		=> "free",
			"category"	=> "labels",
			"subcategory"	=> "other_labels",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('This is the keyword that shows up next to user field labels in order to denote that they are required.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Notify by Email', 'wp-file-upload'),
			"attribute"	=> "notify",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_NOTIFY"),
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "email_notifications",
			"parent"	=> "",
			"dependencies"	=> array("notifyrecipients", "notifysubject", "notifymessage", "notifyheaders", "attachfile"),
			"variables"	=> null,
			"help"		=> __('If activated then email will be sent to inform about successful file uploads.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Email Recipients', 'wp-file-upload'),
			"attribute"	=> "notifyrecipients",
			"type"		=> "mtext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_NOTIFYRECIPIENTS"),
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "email_notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%useremail%", "%userdataXXX%", "%n%", "%dq%"),
			"help"		=> __('Defines the recipients of the email notification. Can be dynamic by using variables. Please check Documentation on how to use variables in atributes.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Email Headers', 'wp-file-upload'),
			"attribute"	=> "notifyheaders",
			"type"		=> "mtext",
			"validator"	=> "emailheaders",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_NOTIFYHEADERS"),
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "email_notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%n%", "%dq%"),
			"help"		=> __('Defines additional email headers, in case you want to sent an HTML message, or use Bcc list, or use a different From address and name or other more advanced email options.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Email Subject', 'wp-file-upload'),
			"attribute"	=> "notifysubject",
			"type"		=> "ltext",
			"validator"	=> "emailsubject",
			"listitems"	=> null,
			"value"		=> WFU_NOTIFYSUBJECT,
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "email_notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%username%", "%useremail%", "%filename%", "%filepath%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%", "%dq%"),
			"help"		=> __('Defines the email subject. Can be dynamic by using variables. Please check Documentation on how to use variables in atributes.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Email Body', 'wp-file-upload'),
			"attribute"	=> "notifymessage",
			"type"		=> "mtext",
			"validator"	=> "emailbody",
			"listitems"	=> null,
			"value"		=> wfu_unesc_percent(WFU_NOTIFYMESSAGE),
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "email_notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> array("%username%", "%useremail%", "%filename%", "%filepath%", "%blogid%", "%pageid%", "%pagetitle%", "%userdataXXX%", "%n%", "%dq%"),
			"help"		=> __('Defines the email body. Can be dynamic by using variables. Please check Documentation on how to use variables in atributes.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Attach Uploaded Files', 'wp-file-upload'),
			"attribute"	=> "attachfile",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_ATTACHFILE"),
			"mode"		=> "free",
			"category"	=> "notifications",
			"subcategory"	=> "email_notifications",
			"parent"	=> "notify",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If activated, then uploaded files will be included in the notification email as attachments. Please use carefully.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Ask for Consent', 'wp-file-upload'),
			"attribute"	=> "askconsent",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_ASKCONSENT"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "general_pd_options",
			"parent"	=> "",
			"dependencies"	=> array("personaldatatypes"),
			"variables"	=> null,
			"help"		=> __('If activated, then consent from users will be asked for storing their personal data. If users do not give consent, then their data will not be stored in the database, they will only be included in the notification email, if email notifications are active.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Personal Data Types', 'wp-file-upload'),
			"attribute"	=> "personaldatatypes",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("userdata/".__('Userdata', 'wp-file-upload'), "userdata and files/".__('Userdata and files', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_PERSONALDATATYPES"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "general_pd_options",
			"parent"	=> "askconsent",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Determines which data are considered as personal data. By default only userdata are considered as personal data. If the 2nd option is selected, then files will also be considered as personal data. This means that if the users do not give their consent, then the files will not be uploaded on the website, they will only be inluded in the notification email as attachments, if email notifications are active.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Do Not Remember Consent Answer', 'wp-file-upload'),
			"attribute"	=> "notrememberconsent",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_NOTREMEMBERCONSENT"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_behaviour",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If activated the plugin will not remember the consent answer provided by the user and the consent question will always show.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Consent Denial Rejects Upload', 'wp-file-upload'),
			"attribute"	=> "consentrejectupload",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_CONSENTREJECTUPLOAD"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_behaviour",
			"parent"	=> "",
			"dependencies"	=> array("consentrejectmessage"),
			"variables"	=> null,
			"help"		=> __('If activated and user has denied consent then the upload will be rejected. If deactivated, then the upload will continue regardless of consent answer.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Reject Message', 'wp-file-upload'),
			"attribute"	=> "consentrejectmessage",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_CONSENTREJECTMESSAGE,
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_behaviour",
			"parent"	=> "consentrejectupload",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the message that will appear to the user if upload cannot continue due to consent denial.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Consent Format', 'wp-file-upload'),
			"attribute"	=> "consentformat",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("checkbox/".__('Checkbox', 'wp-file-upload'), "radio/".__('Radio', 'wp-file-upload'), "prompt/".__('Prompt', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_CONSENTFORMAT"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_appearance",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Determines how consent question will appear to the user. If \'checkbox\' is selected then a checkbox will appear inside the upload form which the user needs to tick. If \'radio\' is selected then a radio button with \'Yes\' and \'No\' answers will appear inside the form (this makes sure that the user will select something after all. If \'prompt\' is selected then a dialog will appear on the user when pressing the upload button asking for consent.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Preselected Answer', 'wp-file-upload'),
			"attribute"	=> "consentpreselect",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("none/".__('None', 'wp-file-upload'), "yes/".__('Yes', 'wp-file-upload'), "no/".__('No', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_CONSENTPRESELECT"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_appearance",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Determines whether a default answer will be selected.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Consent Question for Checkbox', 'wp-file-upload'),
			"attribute"	=> "consentquestion",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_CONSENTQUESTION,
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_appearance",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Defines the question that will appear to the user next to the checkbox, or radio buttons or inside the prompt dialog. If a word starting and ending with semicolon (:) is added in the question, e.g. :link:, then it will be replaced by a link defined in \'Consent Disclaimer Link\' attribute. This way a link to a disclaimer can be added.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Consent Disclaimer Link', 'wp-file-upload'),
			"attribute"	=> "consentdisclaimer",
			"type"		=> "ltext",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_CONSENTDISCLAIMER"),
			"mode"		=> "free",
			"category"	=> "personaldata",
			"subcategory"	=> "consent_appearance",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('Defines a link that displays a disclaimer to the user if the user presses the relevant link that is included inside the consent question.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Enable Material UI', 'wp-file-upload'),
			"attribute"	=> "materialui",
			"type"		=> "onoff",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MATERIALUI"),
			"mode"		=> "free",
			"category"	=> "themes",
			"subcategory"	=> "mui_settings",
			"parent"	=> "",
			"dependencies"	=> array( "muiprimarycolor", "muisecondarycolor", "muierrorcolor", "muioverridecssmethod" ),
			"variables"	=> null,
			"help"		=> __('If enabled the upload form will use Material UI components. Default is false.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Material UI Primary Color', 'wp-file-upload'),
			"attribute"	=> "muiprimarycolor",
			"type"		=> "coloralpha",
			"validator"	=> "rgbacolors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MUIPRIMARYCOLOR"),
			"mode"		=> "free",
			"category"	=> "themes",
			"subcategory"	=> "mui_settings",
			"parent"	=> "materialui",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The Material UI theme primary color.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Material UI Text Color', 'wp-file-upload'),
			"attribute"	=> "muitextcolor",
			"type"		=> "coloralpha",
			"validator"	=> "rgbacolors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MUITEXTCOLOR"),
			"mode"		=> "free",
			"category"	=> "themes",
			"subcategory"	=> "mui_settings",
			"parent"	=> "materialui",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The Material UI theme text primary color.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Material UI Error Color', 'wp-file-upload'),
			"attribute"	=> "muierrorcolor",
			"type"		=> "coloralpha",
			"validator"	=> "rgbacolors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MUIERRORCOLOR"),
			"mode"		=> "free",
			"category"	=> "themes",
			"subcategory"	=> "mui_settings",
			"parent"	=> "materialui",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The Material UI theme error color.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Material UI Dark Mode', 'wp-file-upload'),
			"attribute"	=> "muidarkmode",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MUIDARKMODE"),
			"mode"		=> "free",
			"category"	=> "themes",
			"subcategory"	=> "mui_settings",
			"parent"	=> "materialui",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled Material UI will turn to dark theme.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Override CSS Method', 'wp-file-upload'),
			"attribute"	=> "muioverridecssmethod",
			"type"		=> "hidden",
			"validator"	=> "listitem",
			"listitems"	=> array("strongstyles-selected/".__('Strong Styles To Selected', 'wp-file-upload'), "strongstyles-all/".__('Strong Styles To All', 'wp-file-upload'), "layers/".__('Layers', 'wp-file-upload'), "shadow-dom/".__('Shadow DOM', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_MUIOVERRIDECSSMETHOD"),
			"mode"		=> "free",
			"category"	=> "themes",
			"subcategory"	=> "mui_settings",
			"parent"	=> "materialui",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('The Material UI components require specific CSS. However the theme\'s and other loaded styles may override them, causing the components not to show correctly. The plugin uses some methods to override the loaded styles. The first method, \'strongstyles-selected\', makes the CSS selectors of some Material UI styles more specific. The second method, \'strongstyles-all\', makes the CSS selectors of all Material UI styles more specific. The third method, \'layers\' uses CSS cascading layers to increase the precendence of Material UI styles. The fourth method puts all Material UI components and their styles in Shadow DOM.', 'wp-file-upload')
		),
		array(
			"name"		=> "Success Upload Message Color",
			"attribute"	=> "successmessagecolor",
			"type"		=> "hidden",
			"validator"	=> "colors",
			"listitems"	=> null,
			"value"		=> WFU_SUCCESSMESSAGECOLOR,
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "upload_message_colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the color of the success message. This attribute has been replaced by successmessagecolors, however it is kept here for backward compatibility."
		),
		array(
			"name"		=> __('Success Message Colors', 'wp-file-upload'),
			"attribute"	=> "successmessagecolors",
			"type"		=> "color-triplet",
			"validator"	=> "colors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_SUCCESSMESSAGECOLORS"),
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "upload_message_colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the text, background and border color of the success message.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Warning Message Colors', 'wp-file-upload'),
			"attribute"	=> "warningmessagecolors",
			"type"		=> "color-triplet",
			"validator"	=> "colors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WARNINGMESSAGECOLORS"),
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "upload_message_colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the text, background and border color of the warning message.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Fail Message Colors', 'wp-file-upload'),
			"attribute"	=> "failmessagecolors",
			"type"		=> "color-triplet",
			"validator"	=> "colors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FAILMESSAGECOLORS"),
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "upload_message_colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the text, background and border color of the fail (error) message.', 'wp-file-upload')
		),
		array(
			"name"		=> "Wait Message Colors",
			"attribute"	=> "waitmessagecolors",
			"type"		=> "hidden",
			"validator"	=> "colors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WAITMESSAGECOLORS"),
			"mode"		=> "free",
			"category"	=> "colors",
			"subcategory"	=> "upload_message_colors",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> "It defines the text, background and border color of the wait message."
		),
		array(
			"name"		=> __('Plugin Component Widths', 'wp-file-upload'),
			"attribute"	=> "widths",
			"type"		=> "dimensions",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WIDTHS"),
			"mode"		=> "free",
			"category"	=> "dimensions",
			"subcategory"	=> "component_widths",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the widths of the selected plugin components.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Plugin Component Heights', 'wp-file-upload'),
			"attribute"	=> "heights",
			"type"		=> "dimensions",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_HEIGHTS"),
			"mode"		=> "free",
			"category"	=> "dimensions",
			"subcategory"	=> "component_heights",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the heights of the selected plugin components.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Include Additional Data Fields', 'wp-file-upload'),
			"attribute"	=> "userdata",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_USERDATA"),
			"mode"		=> "free",
			"category"	=> "userdata",
			"subcategory"	=> "additional_data_fields",
			"parent"	=> "",
			"dependencies"	=> array("userdatalabel"),
			"variables"	=> null,
			"help"		=> __('If enabled, then user can send additional information together with uploaded files (e.g. name, email etc), defined in userdatalabel attribute.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Additional Data Fields', 'wp-file-upload'),
			"attribute"	=> "userdatalabel",
			"type"		=> "formfields",
			"validator"	=> "text",
			"listitems"	=> wfu_formfield_definitions(),
			"value"		=> WFU_USERDATALABEL,
			"mode"		=> "free",
			"category"	=> "userdata",
			"subcategory"	=> "additional_data_fields",
			"parent"	=> "userdata",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the labels of the additional data fields and whether they are required or not.', 'wp-file-upload')
		),
		array(
			"name"		=> __('WP Filebase Plugin Connection', 'wp-file-upload'),
			"attribute"	=> "filebaselink",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_FILEBASELINK"),
			"mode"		=> "free",
			"category"	=> "interoperability",
			"subcategory"	=> "with_other_plugins",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled then the WP Filebase Plugin will be informed about new file uploads.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Add Uploaded Files To Media', 'wp-file-upload'),
			"attribute"	=> "medialink",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MEDIALINK"),
			"mode"		=> "free",
			"category"	=> "interoperability",
			"subcategory"	=> "with_other_wp_features",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled then the uploaded files will be added to the Media library of your Wordpress website. Please note that the upload path must be inside the wp-content/uploads directory (which is the default upload path).', 'wp-file-upload')
		),
		array(
			"name"		=> __('Attach Uploaded Files To Post', 'wp-file-upload'),
			"attribute"	=> "postlink",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_POSTLINK"),
			"mode"		=> "free",
			"category"	=> "interoperability",
			"subcategory"	=> "with_other_wp_features",
			"parent"	=> "",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled then the uploaded files will be added to the current post as attachments. Please note that the upload path must be inside the wp-content/uploads directory (which is the default upload path).', 'wp-file-upload')
		),
		array(
			"name"		=> __('Enable Webcam', 'wp-file-upload'),
			"attribute"	=> "webcam",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WEBCAM"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "",
			"dependencies"	=> array("webcamselfile", "webcammode", "audiocapture", "videowidth", "videoheight", "videoaspectratio", "videoframerate", "camerafacing", "webcamstartoff", "webcamswitch", "maxrecordtime", "uploadmediabutton", "videoname", "imagename", "webcambg"),
			"variables"	=> null,
			"help"		=> __('This enables capturing of video or still pictures from the computer\'s webcam. It is not supported by all browsers yet.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Allow File Selection', 'wp-file-upload'),
			"attribute"	=> "webcamselfile",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WEBCAMSELFILE"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('When webcam mode is enabled, the user can only capture video or images from the webcam. If this attribute is enabled, the user can also select an image file using the Select File button. The selected file will be previewed in the capture box.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Capture Mode', 'wp-file-upload'),
			"attribute"	=> "webcammode",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("capture video/".__('Capture Video', 'wp-file-upload'), "take photos/".__('Take Photos', 'wp-file-upload'), "both/".__('Both', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_WEBCAMMODE"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the webcam capture mode. The webcam can either capture video, still photos or both.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Capture Audio', 'wp-file-upload'),
			"attribute"	=> "audiocapture",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_AUDIOCAPTURE"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines whether audio will be captured together with video from the webcam.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Video Width', 'wp-file-upload'),
			"attribute"	=> "videowidth",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_VIDEOWIDTH"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It requests a preferable video width for the webcam. The plugin will try to match this setting as close as possible depending on webcam capabilities.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Video Height', 'wp-file-upload'),
			"attribute"	=> "videoheight",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_VIDEOHEIGHT"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It requests a preferable video height for the webcam. The plugin will try to match this setting as close as possible depending on webcam capabilities.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Video Aspect Ratio', 'wp-file-upload'),
			"attribute"	=> "videoaspectratio",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_VIDEOASPECTRATIO"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It requests a preferable video aspect ratio for the webcam. The plugin will try to match this setting as close as possible depending on webcam capabilities.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Video Frame Rate', 'wp-file-upload'),
			"attribute"	=> "videoframerate",
			"type"		=> "text",
			"validator"	=> "text",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_VIDEOFRAMERATE"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It requests a preferable video frame rate for video recording. The plugin will try to match this setting as close as possible depending on webcam capabilities.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Camera Facing Mode', 'wp-file-upload'),
			"attribute"	=> "camerafacing",
			"type"		=> "radio",
			"validator"	=> "listitem",
			"listitems"	=> array("any/".__('Any', 'wp-file-upload'), "front/".__('Front', 'wp-file-upload'), "back/".__('Back', 'wp-file-upload')),
			"value"		=> WFU_VAR("WFU_CAMERAFACING"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines if the front or back camera will be preferred (for mobile devices with 2 cameras). The plugin will try to match this setting depending on webcam capabilities.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Start Camera Off', 'wp-file-upload'),
			"attribute"	=> "webcamstartoff",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WEBCAMSTARTOFF"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled the camera will initially be off.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Switch Camera Button', 'wp-file-upload'),
			"attribute"	=> "webcamswitch",
			"type"		=> "onoff",
			"validator"	=> "onoff",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WEBCAMSWITCH"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('If enabled a button will show up at the top-left corner of the capture box, for switching between front and back camera.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Max Record Time', 'wp-file-upload'),
			"attribute"	=> "maxrecordtime",
			"type"		=> "integer",
			"validator"	=> "integer",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_MAXRECORDTIME"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the maximum time of video recording (in seconds). If it is set to -1, then there is no time limit.', 'wp-file-upload')
		),
		array(
			"name"		=> __('Background Color', 'wp-file-upload'),
			"attribute"	=> "webcambg",
			"type"		=> "color",
			"validator"	=> "colors",
			"listitems"	=> null,
			"value"		=> WFU_VAR("WFU_WEBCAMBG"),
			"mode"		=> "free",
			"category"	=> "webcam",
			"subcategory"	=> "capture_from_webcam",
			"parent"	=> "webcam",
			"dependencies"	=> null,
			"variables"	=> null,
			"help"		=> __('It defines the background color of the webcam capture box.', 'wp-file-upload')
		),
		null
	);
	
	wfu_array_remove_nulls($defs);
	$defs = array_values($defs);
	

	return $defs;
}


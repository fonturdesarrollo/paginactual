=== Iptanus File Upload ===
Contributors: nickboss
Donate link: http://www.iptanus.com/support/wordpress-file-upload
Tags: file, upload, ajax, form, page
Requires at least: 3.0
Tested up to: 7.0
Stable tag: 5.1.10
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

THIS IS FORMER WORDPRESS FILE UPLOAD PLUGIN.
Simple yet powerful plugin to allow users to upload files from any page, post or sidebar and manage them.

== Description ==

With this plugin you or other users can upload files to your site from any page, post or sidebar easily and securely.

Simply put the shortcode [wordpress_file_upload] to the contents of any WordPress page / post or add the plugin's widget in any sidebar and you will be able to upload files to any directory inside wp-contents of your WordPress site.

You can add custom fields to submit additional data together with the uploaded file.

You can use it to capture screenshots or video from your webcam and upload it to the website (for browsers that support this feature).

You can even use it as a simple contact (or any other type of) form to submit data without including a file.

The plugin displays the list of uploaded files in a separate top-level menu in Dashboard and includes a file browser to access and manage the uploaded files (only for admins currently).

Several filters and actions before and after file upload enable extension of its capabilities.

The characteristics of the plugin are:

* It uses the latest HTML5 technology, however it will also work with old browsers and mobile phones.
* It provides a nice upload form using Material UI React components.
* It is compliant with the General Data Protection Regulation (GDPR) of the European Union.
* It can be added in posts, pages or sidebars (as a widget).
* It can capture and upload screenshots or video from the device's camera.
* It supports additional form fields (like checkboxes, text fields, email fields, dropdown lists etc).
* It can be used as a simple contact form to submit data (a selection of file can be optional).
* It produces notification messages and e-mails.
* It supports selection of destination folder from a list of subfolders.
* Upload progress can be monitored with a progress bar.
* Upload process can be cancelled at any time.
* It supports redirection to another url after successful upload.
* There can be more than one instances of the shortcode in the same page or post.
* Uploaded files can be added to Media or be attached to the current page.
* Uploaded files can be saved to an FTP location (ftp and sftp protocols supported).
* It is highly customizable with many (more than 50) options.
* It supports filters and actions before and after file upload.
* It contains a visual editor for customizing the plugin easily without any knowledge of shortcodes or programming
* It supports logging of upload events or management of files, which can be viewed by admins through the Dashboard.
* It includes an Uploaded Files top-level menu item in the Dashboard, from where admins can view the uploaded files.
* It includes a file browser in the Dashboard, from where admins can manage the files.
* It supports multilingual characters and localization.

The plugin is translated in the following languages:

* Portuguese, kindly provided by Rui Alao
* German
* French, kindly provided by Thomas Bastide of http://www.omicronn.fr/ and improved by other contributors
* Serbian, kindly provided by Andrijana Nikolic of http://webhostinggeeks.com/
* Dutch, kindly provided by Ruben Heynderycx
* Chinese, kindly provided by Yingjun Li
* Spanish, kindly provided by Marton
* Italian, kindly provided by Enrico Marcolini https://www.marcuz.it/
* Polish
* Swedish, kindly provided by Leif Persson
* Persian, kindly provided by Shahriyar Modami http://chabokgroup.com
* Greek

Please note that the plugin contains minified CSS and Javascript files in order to reduce its size and speed-up performance. The unminified version of these files can be found [here](https://plugins.svn.wordpress.org/wp-file-upload/unminified/ "Unminified CSS and JS files of the plugin").
The source code of the compiled React files of the plugin can be found [here](https://sourceforge.net/p/wordpress-file-upload-react/code/ci/master/tree/ "React source code of the plugin").

Please also note that old desktop browsers or mobile browsers may not support all of the above functionalities. In order to get full functionality use the latest versions browsers, supporting HTML5, AJAX and CSS3.

For additional features, such as multiple file upload, very large file upload, drag and drop of files, captcha, detailed upload progress bars, list of uploaded files, image gallery and custom css please consider [Iptanus File Upload Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page").

Please visit the **Other Notes** section for customization options of this plugin.

== Installation ==

1. First install the plugin using Wordpress auto-installer or download the .zip file from wordpress.org and install it from the Plugins section of your Dashboard or copy wordpress_file_upload directory inside wp-contents/plugins directory of your wordpress site.
1. Activate the plugin from Plugins section of your Dashboard.
1. In order to use the plugin simply go to the Dashboard / Settings / Iptanus File Upload and follow the instructions in Plugin Instances or alternatively put the shortcode [wordpress_file_upload] in the contents of any page.
1. Open the page on your browser and you will see the upload form.
1. You can change the upload directory or any other settings easily by pressing the small edit button found at the left-top corner of the upload form. A new window (or tab) with pop up with plugin options. If you do not see the new window, adjust your browser settings to allow pop-up windows.
1. Full documentation about the plugin options can be found at https://wordpress.org/plugins/wp-file-upload/other_notes/ or at http://www.iptanus.com/wordpress-plugins/wordpress-file-upload/ (including the Pro version)

A getting started guide can be found at http://www.iptanus.com/getting-started-with-wordpress-file-upload-plugin/

== Frequently Asked Questions ==

= Will the plugin work in a mobile browser? =

Yes, the plugins will work in most mobile phones (has been tested in iOS, Android and Symbian browsers as well as Opera Mobile) 

= Do I need to have Flash to use then plugin? =

No, you do not need Flash to use the plugin.

= I get a SAFE MODE restriction error when I try to upload a file. Is there an alternative?  =

Your domain has probably turned SAFE MODE ON and you have restrictions uploading and accessing files. Iptanus File Upload includes an alternative way to upload files, using FTP access. Simply add the attribute **accessmethod="ftp"** inside the shortcode, together with FTP access information in **ftpinfo** attribute.

= Can I see the progress of the upload? =

Yes, you can see the progress of the upload. During uploading a progress bar will appear showing progress info, however this functionality functions only in browsers supporting HTML5 upload progress bar.

= Can I upload many files at the same time? =

Yes, but not in the free version. If you want to allow multiple file uploads, please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page") version.

= Where do files go after upload? =

Files by default are uploaded inside wp-content directory of your Wordpress website. To change it use attribute uploadpath.

= Can I see and download the uploaded files? =

Administrators can view all uploaded files together with associated field data from the plugin's Settings in Dashboard. The [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page") version of the plugin allows users to view their uploaded files, either from the Dashboard, or from a page or post.

= Are there filters to restrict uploaded content? =

Yes, you can control allowed file size and file extensions by using the appropriate attribute (see Other Notes section).

= Are there any upload file size limitations? =

Yes, there are file size limitations imposed by the web server or the host. If you want to upload very large files, please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page") version of the plugin, which surpasses size limitations.

= Who can upload files? =

By default all users can upload files. You can define which user roles are allowed to upload files. Even guests can be allowed to upload files. If you want to allow only specific users to upload files, then please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page") version of the plugin.

= What security is used for uploading files? =

The plugin is designed not to expose website sensitive information. It has been tested by experts and verified that protects against CSRF and XSS attacks. All parameters passing from server to client side are encoded and sanitized. For higher protection, like use of captcha, please consider the [Professional](http://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page") version of the plugin.

= What happens if connection is lost during a file upload? =

In the free version the upload will fail. However in the Pro version the upload will resume and will continue until the file is fully uploaded. This is especially useful when uploading very large files.

= The plugin does not look nice with my theme. What can I do? =

There is an option in plugin's settings in Dashboard to relax the CSS rules, so that buttons and text boxes inherit the theme's styles. If additional styling is required, this can be done using CSS. The Professional version of the plugin allows CSS rules to be embed in the shortcode.

== Screenshots ==

1. A screenshot of the plugin in its most simple form.
2. A screenshot of the plugin showing the progress bar.
3. A screenshot of the plugin showing the successful upload message.
4. A screenshot of the plugin with additional form fields.
5. A screenshot of the plugin with subfolder selection.
6. A screenshot of the plugin in a sidebar.
7. A screenshot of the shortcode composer.
8. A screenshot of the file browser.

== Changelog ==

= 5.1.10 =
* fixed bug where emails could not be sent after the release of the previous version

= 5.1.9 =
* verified compatibility with latest 7.0 Wordpress version
* added uploadid length check in wfu_ajax_action_send_email_notification()
* added wfu_params_*, wfu_gst_* and wfu_userstate_* in periodical cleanup
* added Transient Options section in Maintenance Actions tab

= 5.1.8 =
* fixed SQL injection issue CVSS 9.3 from Patchstack

= 5.1.7 =
* fixed File Overwrite Race Condition when uploading files with the same filename concurrently

= 5.1.6 =
* verified compatibility with latest 6.9 Wordpress version

= 5.1.5 =
* added support for FTP over TLS (FTPS) uploads

= 5.1.4 =
* fixed bug where the visual editor throwed warnings for not finding personaldata when Personal Data were deactivated from the plugin's Settings in Dashboard
* corrected bug where the upload form visual editor was not opening when Material UI theme was active
* corrected bug where notification emails were not sent when Material UI theme was active

= 5.1.3 =
* removed Post Method setting
* all GET and POST requests are now executed using the default Wordpress functions

= 5.1.2 =
* improvements on how AJAX endpoint is provided
* corrections to Requires at lease value
* replacement of eval() in minification function

= 5.1.1 =
* further security improvements for compliance with wordpress.org

= 5.1.0 =
* added translation for all backend of the plugin
* modified plugin code so that all echoed variables to HTML are escaped
* modified code so that all input is sanitized, including all $_SERVER, $_COOKIE and $_SESSION input

= 5.0.0 =
* changed the name of the plugin to Iptanus File Upload.

= 4.25.3 =
* added nonce in wfu_edit_filedetails() function in order to avoid CSRF attacks.

= 4.25.2 =
* corrected bug in file downloader where files having spaces could not be downloaded

= 4.25.1 =
* slight changes in some notifications shown in Remarks column of View Log page

= 4.25.0 =
* modified View Log Remarks column to have a better look
* fixed security issue that allowed directory traversals in wfu_downloader.php
* fixed security issue that allowed unauthorized read of directory contents through wfu_ajax_action_read_subfolders() function

= 4.24.15 =
* loading of plugin text domain moved to init hook to avoid Wordpress warnings
* added file_path in wfu_after_file_upload filter
* corrected bug "Call to undefined function wfu_update_option()" in wfu_licensing_functions.php

= 4.24.14 =
* verified compatibility with Wordpress version 6.7
* modified wfu_downloader.php to read the necessary data from a temporary file in order to avoid XSS attacks and directory traversals
* modified code so that the autoload value for all plugin options can be defined in wfu_get_all_plugin_options() function
* set autoload value for most plugin options to false to improve page loading performance
* added daily action to remove unnecessary wfu_queue_* options from the database
* added alt tags for plugin images

= 4.24.13 =
* extended rar mime types

= 4.24.12 =
* verified compatibility with Wordpress version 6.6.2
* fixed directory traversal security issue in wfu_file_downloader.php file
* extended csv, xml and m4a mime types

= 4.24.11 =
* corrected bug where files with extensions containing capital letters were rejected due to MIME check failure
* corrected bug in Elementor extension that generated a warning when $post global variable is null

= 4.24.10 =
* corrected bug where FTP uploads where all rejected after release of version 4.24.9 due to fail of MIME type check

= 4.24.9 =
* verified compatibility with Wordpress version 6.6.1
* limited the number of whitelisted extensions to those having an associated MIME type, in order to avoid XSS attacks
* added MIME type validation of uploaded files
* added advanced variable WFU_MIMETYPE_VAL_EXCEPTIONS that enables exceptions when validating the MIME type of uploaded files
* added scanning of textual uploaded file contents for detecting PHP and Javascript tags
* added scanning of textual uploaded file contents for heuristic analysis and detection of suspicious content
* added advanced variable WFU_FILESCAN_BUFFERSIZE that defines the size of the chunk when reading file contents sequencially
* added advanced variable WFU_FILESCAN_OVERLAPSIZE that defines the size of the overlapping of the chunks when reading file contents sequencially
* added advanced variable WFU_FILESCAN_SECURITY_LEVEL that defines the security level when scanning uploaded files

= 4.24.8 =
* verified compatibility with Wordpress version 6.5.5
* escaped userdata values in File Browser, File Details page and View Log, in order to avoid XSS attacks
* removed the ability to upload files outside /wp-content folder, in order to avoid directory traversal attacks
* removed the ability to edit the shortcode for authors and contributors, in order to avoid CSRF attacks
* stripped tags and escaped dir query param in File Browser in order to avoid reflected XSS attacks

= 4.24.7 =
* verified compatibility with Wordpress version 6.5.2
* fixed bug in Date, Time and DateTime user fields that were not working when Material UI theme was active
* added Country List user field that prompts the user to make a selection from a list of countries

= 4.24.6 =
* sanitized uploadbutton attribute input in order to protect against Stored XSS attacks
* fixed bug not showing RecaptchaV2 captcha in the upload form when MaterialUI theme was active

= 4.24.5 =
* added external customizable templates folder /uploads/wfu_templates

= 4.24.4 =
* verified compatibility with Wordpress version 6.4.3
* added upload form option webcamstartoff to start webcam deactivated

= 4.24.3 =
* verified compatibility with Wordpress version 6.4.2

= 4.24.2 =
* corrected bug where the plugin was generating a fatal PHP error during activation if allow_url_fopen was 0
* added debug log options in Maintenance Actions: activate/deactivate debug logging, download and reset debug log data

= 4.24.1 =
* verified compatibility with Wordpress version 6.4.1
* added nonce to visual editor and switched WFU_SHORTCODECOMPOSER_NOADMIN to false to avoid CSRF attacks through save_shortcode AJAX action

= 4.24.0 =
* verified compatibility with Wordpress version 6.3.2

= 4.23.3 =
* added response header information in wfu_get_request() and wfu_post_request() functions
* fixed security issue that could allow users with admin access to perform XSS attacks through the redirect link attribute

= 4.23.2 =
* verified compatibility with Wordpress version 6.3.1

= 4.23.1 =
* corrected compatibility issue with Divi Theme Builder

= 4.23.0 =
* added Home Domain information in Main tab of Dashboard area of the plugin
* corrected bug where <shadowdom_pre> and <shadowdom_post> templates were not placed correctly inside the shadow DOM
* added _wfu_file_upload_output_inner filter for customizing inner upload form HTML before it is processed by the templating system

= 4.22.2 =
* updated vendor libraries

= 4.22.1 =
* fixed bug in wfu_webcam_update_preview() function that was breaking upload form when uploadid was greater than 1

= 4.22.0 =
* added webcamselfile attribute in upload form shortcode so that webcam can work in parallel with file selection
* added webcamswitch attribute in upload form shortcode to enable/disable camera switch button in webcam
* added WFU_WEBCAMSWITCHMODE advanced variable attribute that defines the camera switch mode, 'side' for switching between front and rear cameras, 'device' for switching between available video devices
* added WFU_MEDIARECORDER_MIMETYPE advanced variable attribute that defines a specific MIME type for webcam MediaRecorder
* added webcambg attribute that defines the background color of the webcam capture box
* webcam video width and height changed so that they correspond to ideal resolution of the camera
* webcam capture feature improved so that screenshots have the camera's resolution
* webcam playback of recorded video is now working on iOS devices
* added extended support of webcam feature for mobile devices
* several other code improvements in webcam feature
* correction of bugs related to wfuca_update_option() function in alternative Iptanus server

= 4.21.7 =
* fixed bug in wfu_exclude_notifications_from_comments() which crashes the website when Woocommerce is present

= 4.21.6 =
* improved webcam operation on iOS devices
* code modifications to hide WFU admin notifications from Comments Dashboard menu page

= 4.21.5 =
* added Themes tab in upload form visual editor to select a theme
* added MaterialUI theme in upload form
* added upload form attributes to define basic colors and dark mode in Material UI theme
* added color picker with transparency in plugin's visual editor
* fixed small bug with time indication in webcam feature of the upload form

= 4.20.0 =
* added Notifications tab in Dashboard area of the plugin

= 4.19.2 =
* codes improvements in plugin settings to protect against XSS attacks
* code improvements in backend file browser to avoid directory traversal attacks
* permanent fix for compatibility with block themes

= 4.19.1 =
* updated vendor libraries to their latest version
* added logging of start and end time in uploader metrics
* added userdata in wfu_before_upload filter
* fixed bugs when uploading in classic HTML forms mode

= 4.19.0 =
* added compatibility with block themes
* added shortcode attribute blockcompatibility for controlling block theme compatibility

= 4.18.1 =
* fixed compatibility issues with PHP 8.1 or higher
* changed uploadform logic so that CSS pseudoselectors for Select File button work

= 4.18.0 =
* minor bug fixes

= 4.17.0 =
* minor bug fixes

= 4.16.4 =
* sanitized page title in all places where it is retrieved to avoid XSS attacks

= 4.16.3 =
* improved sanitization and escaping of shortcode attributes to avoid XSS attacks
* file type .svg moved to blacklist to avoid XSS attacks coming from scripts inside SVG files
* added security check to forbid uploads inside wp-content/plugin directory
* improved handling of videoname and imagename file uploader shortcode attributes to avoid directory traversal attacks
* improved /lib and /extensions loader to avoid arbitrary code execution through injected image files
* all wfu_blocks.php functions became redeclareable

= 4.16.2 =
* minor bug fixes in Pro version

= 4.16.1 =
* corrected $_SESSION variable problem in maintenance purge function

= 4.16.0 =
* visual editor edit button misalignment fixed
* corrected echo problem when recording from webcam with sound

= 4.15.0 =
* COOKIEHASH bug corrected
* credentials in FTP paths are stripped from the paths
* corrected File Detais to File Details
* regex "/<style>(.*)<\/style><script.*?>(.*)<\/script>(.*)/s" changed to "/<style>(.*)<\/style>.*?<script.*?>(.*)<\/script>(.*)/s" in functions.php
* corrected notice: Undefined index: post in wfu_admin.php when the website has no posts

= 4.14.4 =
* restored .po files in languages so that users can change translations

= 4.14.3 =
* slight change in wfu_get_filtered_recs to handle cases where b.date_from is null
* code improvements to increase loading speed of plugin's file browser
* added wfu_mime_content_type() function that uses several methods to get MIME type of a file

= 4.14.2 =
* code improved so that upload message colors correctly adjust to shortcode color settings
* slight modifications to upload message colors while upload is in progress
* plugin cookie names adjusted in case COOKIEHASH does not exist
* corrected bug of the new plugin updater causing a warning when there are plugins that do not have their own subdirectory
* closing tags removed from all PHP files to avoid "Headers already sent" errors
* corrected bug where the uploads counter was showing to non-administrators
* wfu_log_action and wfu_process_files functions became redeclarable
* removed debug_log from wfu_process_files_queue
* consent Yes/No question was added in translation
* corrected locale of Greek translation

= 4.14.1 =
* fix webcam play button bug
* corrected issue with implode() function of minifier library appearing in websites having PHP > 7.4.2
* wfu_admin.php modified to use wfu_ajaxurl() function

= 4.14.0 =
* minor fixes of bugs and code improvements.

= 4.13.1 =
* file checking of uploaded files hardened to better handle xss attacks coming through uploaded image files.

= 4.13.0 =
* corrected security vulnerability where remote code could be executed using directory traversal method. Credits to p4w security expert for identifying the vulnerability.
* improved user check algorithm during upload, related to upload parameters array
* corrected bug where Restricted Page Loading was working only for pages, all other post types were loading the plugin files as if there was no restriction

= 4.12.2 =
* corrected bug where files could not be downloaded in some server environments when dboption user state handler was enabled

= 4.12.1 =
* corrected bug where files could not be downloaded from Dashboard / Uploaded Files page

= 4.12.0 =
* corrected bug where export data file was not deleted after download
* corrected bug in FTP credentials configurator about double backslash (\\) issue
* added cookies user state handler that has been integrated with dboption as 'Cookies (DBOption)' to comply with Wordpress directives not to use session
* 'Cookies (DBOption)' user state handler has been set as the default one
* added advanced option WFU_US_DBOPTION_BASE so that dboption can also work with session
* added advanced option WFU_US_SESSION_LEGACY to use the old session functionality of the plugin, having session_start() in header
* added auto-adjustment of user state handler to 'dboption' during activation (or update) of the plugin
* bug "Error: [] cURL error 28" in Wordpress Site Health disappears when setting user state handler to 'Cookies (DBOption)' or when WFU_US_SESSION_LEGACY advanced option is false
* added the ability to run PHP processes in queue, which is necessary for correctly handling uploads when user state handler is dboption

= 4.11.2 =
* added easier configuration of FTP Credentials (ftpinfo) attribute of the uploader shortcode

= 4.11.1 =
* corrected bug in functions wfu_manage_mainmenu() and wfu_manage_mainmenu_editor() that were echoing and not returning the generated HTML
* added fix for compatibility with Fast Velocity Minify plugin

= 4.11.0 =
* code improved so that shortcode composer can be used by all users who can edit pages (and not only the admins)
* added environment variable 'Show Shortcode Composer to Non-Admins' to control whether non-admin users can edit the shortcodes
* added filtering of get_users() function in order to handle websites with many users more efficiently
* added notification in shortcode composer if user leaves page without saving
* corrected bug where restricted frontend loading of the plugin was not working for websites installed in localhost due to wrong calculation of request uri

= 4.10.3 =
* added the ability to move one or more files to another folder through the File Browser feature in Dashboard area of the plugin
* improved responsiveness of shortcode composer and Main Dashboard page of the plugin
* bug fix in wfu_revert_log_action

= 4.10.2 =
* added wordpress_file_upload_preload_check() function in main plugin file to avoid conflicts of variable names with Wordpress
* updated webcam code to address createObjectURL Javascript error that prevents webcam feature to work in latest versions of browsers

= 4.10.1 =
* code modified so that vendor libraries are loaded only when necessary
* improved process of deleting all plugin options
* added honeypot field to userdata fields; this is a security feature, in replacement of captchas, invisible to users that prevents bots from uploading files
* added attribute 'Consent Denial Rejects Upload' in uploader shortcode Personal Data tab to stop the upload if the consent answer is no, as well as 'Reject Message' attribute to customize the upload rejection message shown to the user
* added attribute 'Do Not Remember Consent Answer' in uploader shortcode Personal Data tab to show the consent question every time (and not only the first time)
* attribute 'Preselected Answer' in uploader shortcode Personal Data tab modified to be compatible with either checkbox or radio Consent Format
* upload result message adjusted to show the correct upload status in case that files were uploaded but were not saved due to Personal Data policy
* code improved for sftp uploads to handle PECL ssh2 bug #73597

= 4.10.0 =
* plugin code improved to support files containing single quote characters (') in their filename
* corrected bug where plugin was deactivated after update

= 4.9.1 =
* added Maintenance action 'Purge All Data' that entirely erases the plugin from the website and deactivates it
* added advanced option 'Hide Invalid Uploaded Files' so that Uploaded Files page in Dashboard can show only valid uploads
* added advanced option 'Restrict Front-End Loading' to load the plugin only on specific pages or posts in order to reduce unnecessary workload on pages not containing the plugin
* code improved for better operation of the plugin when the website works behind a proxy
* added option in Clean Log to erase the files together with plugin data

= 4.9.0 =
* code further improved to reduce "Iptanus Server unreachable..." errors
* checked Weglot Translate compatibility; /wp-admin/admin-ajax.php needs to be added to Exclusion URL list of Weglot configuration so that uploads can work
* several significant additions in the Pro version, including Microsoft OneDrive integration

= 4.8.0 =
* added item in Admin Bar that displays number of new uploads and redirects to Uploaded Files Dashboard page
* code improved in Uploaded Files Dashboard page so that download action directly downloads the file, instead of redirecting to File Browser
* added Advanced option 'WFU_UPLOADEDFILES_COLUMNS' that controls the order and visibility of Uploaded Files Dashboard page columns
* added Advanced option 'WFU_UPLOADEDFILES_ACTIONS' that controls the order and visibility of Uploaded Files Dashboard page file actions
* added several filters in Uploaded Files Dashboard page to make it more customizable
* PHP function redeclaration system significantly improved to support arguments by reference, execution after the original function and redeclaration of variables
* code improved to reduce "Iptanus Server unreachable..." errors (better operation of verify_peer http context property)
* added a link in Iptanus Unreachable Server error message to an Iptanus article describing how to resolve it

= 4.7.0 =
* added Uploaded Files top-level Dashboard menu item, showing all the uploaded files and highlighting the new ones
* added Portuguese translation from Rui Alao
* checked and verified compatibility with Gutenberg
* plugin initialization actions moved to plugins_loaded filter
* fixed bug clearing userdata fields when Select File is pressed
* File Browser and View Log tables modified to become more responsive especially for small screens

= 4.6.2 =
* corrected consent_status warning when updating user profile and Personal Data is off
* user fields code improved for better data autofill behaviour

= 4.6.1 =
* added uploader shortcode attribute 'resetmode' to control whether the upload form will be reset after an upload
* added pagination in File Browser tab in Dashboard area of the plugin

= 4.6.0 =
* corrected slash (/) parse Javascript error near 'fakepath' appearring on some situations
* added nonces in Maintenance Actions to increase security
* improved code in View Log so that no links appear to invalid files
* improved code in View Log so that when the admin opens a file link to view file details, 'go back' button will lead back to the View Log page and not to File Browser
* improved code in 'Clean Log' button in Maintenance Actions in Dashboard area of the plugin, so that the admin can select the period of clean-up

= 4.5.1 =
* code improved in wfu_js_decode_obj function for better compatibility with Safari browser
* code improved to sanitize all shortcode attributes before uploader form or file viewer is rendered
* removed external references to code.jquery.com and cdnjs.cloudflare.com for better compliance with GDPR

= 4.5.0 =
* added basic compliance with GDPR
* added several shortcode attributes to configure personal data consent appearance and behaviour
* added area in User Profile from where users can review and change their consent status
* added Personal Data option in Settings that enables personal data operations
* added Personal Data tab in plugin's area in Dashboard from where administrators can export and erase users' personal data
* corrected bug not accepting subfolder dimensions when subfolder element was active

= 4.4.0 =
* added alternative user state handler using DB Options table in order to overcome problems with session variables appearing on many web servers

= 4.3.4 =
* all Settings sanitized correctly to prevent XSS attacks - credits to ManhNho for mentioning this problem

= 4.3.3 =
* all shortcode attributes sanitized correctly to close a serious security hole - credits to ManhNho for mentioning this problem

= 4.3.2 =
* fixed bug in wfu_before_upload and wfu_after_upload filters that was breaking JS scripts if they contained a closing bracket ']' symbol

= 4.3.1 =
* added placeholder option in available label positions of additional fields; label will be the placeholder attribute of the field

= 4.3.0 =
* fixed bug where ftp credentials did not work when username or password contained (:) or (@) symbols
* RegExp fix for wfu_js_decode_obj function for improved compatibility with caching plugins
* corrected WFU_Original_Template::get_instance() method because it always returned the original class
* View Log page improved so that displayed additional user fields of an uploaded file are not cropped

= 4.2.0 =
* changed logic of file sanitizer; dots in filename are by default converted to dashes, in order to avoid upload failures caused when the plugin detects double extensions
* corrected bug where a Javascript error was generated when askforsubfolders was disabled and showtargetfolder was active
* added css and js minifier in inline code
* plugin modified so that the shortcodes render correctly either Javascript loads early (in header) or late (in footer)
* plugin modified so that Media record is deleted when the associated uploaded file is deleted from plugin's database
* corrected bug where some plugin images were not loaded while Relax CSS option was inactive

= 4.1.0 =
* changed logic of file sanitizer; dots in filename are by default converted to dashes, in order to avoid upload failures caused when the plugin detects double extensions
* added advanced option WFU_SANITIZE_FILENAME_DOTS that determines whether file sanitizer will sanitize dots or not
* timepicker script and style replaced by most recent version
* timepicker script and style files removed from plugin and loaded from cdn
* json2 script removed from plugin and loaded from Wordpress registered script
* JQuery UI style updated to latest 1.12.1 minified version
* added wfu_before_admin_scripts filter before loading admin scripts and styles in order to control incompatibilities
* removed getElementsByClassName-1.0.1.js file from plugin, getElementsByClassName function was replaced by DOM querySelectorAll
* corrected bug showing warning "Notice: Undefined variable: page_hook_suffix..." when a non-admin user opened Dashboard
* corrected fatal error "func_get_args(): Can't be used as a function parameter" appearing in websites with PHP lower than 5.3
* added _wfu_file_upload_hide_output filter that runs when plugin should not be shown (e.g. for users not inluded in uploadroles), in order to output custom HTML
* corrected bug where email fields were always validated, even if validate option was not activated
* corrected bug where number fields did not allow invalid characters, even if typehook option was not activated
* corrected bug where email fields were not allowed to be ampty when validate option was activated
* corrected error T_PAAMAYIM_NEKUDOTAYIM appearing when PHP version is lower than 5.3
* corrected bug with random upload fails caused when params_index corresponds to more than one params

= 4.0.1 =
* translation of the plugin in Persian, kindly provided by Shahriyar Modami http://chabokgroup.com
* corrected bug where notification email was not sending atachments
* corrected bug not cleaning log in Maintenance Actions

= 4.0.0 =
* huge renovation of the plugin, the UI code has been rewritten to render based on templates
* code modified so that it can correctly handle sites where content dir is explicitly defined
* corrected bug in Dashboard file editor so that it can work when the website is installed in a subdirectory
* corrected warnings showing when editing a file that was included in the plugin's database
* added filter in get_posts so that it does not cause problems when there are too many pages/posts
* bug fixes so that forcefilename works better and does not strip spaces in the filename
* code improved to protect from hackers trying to use the plugin as email spammer
* added advanced variable Force Email Notifications so that email can be sent even if no file was uploaded
* corrected bug not showing sanitized filanames correctly in email
* corrected bug so that dates show-up in local time and not in UTC in Log Viewer, File Browser and File Editor
* fixed bug showing "Warning: Missing argument 2 for wpdb::prepare()" when cleaning up the log in Maintenance Actions
* corrected bug where when configuring subfolders with visual editor the subfolder dialog showed unknown error
* corrected bug where the Select File button was not locked during upload in case of classical HTML (no-ajax) uploads
* added cancel button functionality for classic no-ajax uploads
* added support for Secure FTP (sftp) using SSH2 library
* successmessagecolor and waitmessagecolors attributes are hidden as they are no longer used

== Upgrade Notice ==

= 5.1.10 =
Minor update to fix some bugs.

= 5.1.9 =
Regular update to introduce some improvements.

= 5.1.8 =
Minor update to fix some security issues.

= 5.1.7 =
Regular update to fix some security issues.

= 5.1.6 =
Minor maintenance update.

= 5.1.5 =
Regular update to add some new features.

= 5.1.4 =
Minor update to fix some bugs.

= 5.1.3 =
Minor update to introduce improvements.

= 5.1.2 =
Minor update to introduce improvements.

= 5.1.1 =
Minor update to introduce improvements.

= 5.1.0 =
Major update to introduce new features and fix bugs.

= 5.0.0 =
Major update to change the plugin name.

= 4.25.3 =
Minor update to fix some security issues.

= 4.25.2 =
Minor update to fix some bugs.

= 4.25.1 =
Minor update to fix some bugs.

= 4.25.0 =
Regular update to fix some security issues and introduce some new features.

= 4.24.15 =
Regular update to fix some bugs.

= 4.24.14 =
Regular update to fix some security issues and introduce some improvements.

= 4.24.13 =
Minor update to fix some issues.

= 4.24.12 =
Minor update to fix some security issues.

= 4.24.11 =
Minor update to fix some bugs.

= 4.24.10 =
Minor update to fix some bugs.

= 4.24.9 =
Regular update to fix some security issues.

= 4.24.8 =
Regular update to fix some security issues.

= 4.24.7 =
Regular update to fix some bugs and introduce some new features.

= 4.24.6 =
Regular update to fix some bugs and security issues.

= 4.24.5 =
Regular update to introduce some new features.

= 4.24.4 =
Regular update to verify compatibility with the latest Wordpress version and introduce some new features.

= 4.24.3 =
Regular update to verify compatibility with the latest Wordpress version.

= 4.24.2 =
Regular update to fix some bugs and introduce new features.

= 4.24.1 =
Regular update to verify compatibility with the latest Wordpress version and fix some security issues.

= 4.24.0 =
Regular update to verify compatibility with the latest Wordpress version.

= 4.23.3 =
Regular update to introduce some code improvements and security fixes.

= 4.23.2 =
Regular update to verify compatibility with the latest Wordpress version.

= 4.23.1 =
Regular update to fix some bugs.

= 4.23.0 =
Regular update to introduce new features, code improvements and fix some bugs.

= 4.22.2 =
Regular update to update vendor libraries.

= 4.22.1 =
Regular update to fix some bugs.

= 4.22.0 =
Regular update to introduce new features, code improvements and fix some bugs.

= 4.21.7 =
Urgent update to address some bugs.

= 4.21.6 =
Regular update to introduce some code improvements.

= 4.21.5 =
Important update to introduce some new features.

= 4.20.0 =
Regular update to introduce some new features.

= 4.19.2 =
Urgent update to fix some security issues.

= 4.19.1 =
Minor update to fix some bugs and introduce some code improvements.

= 4.19.0 =
Regular update to fix some bugs and introduce some new features.

= 4.18.1 =
Minor update to fix some bugs and introduce some code improvements.

= 4.18.0 =
Minor update to fix some bugs.

= 4.17.0 =
Minor update to fix some bugs.

= 4.16.4 =
Minor update to address some security issues.

= 4.16.3 =
Regular update to fix some bugs and address some security issues.

= 4.16.2 =
Minor update to fix some bugs.

= 4.16.1 =
Regular update to fix some bugs and introduce some code improvements.

= 4.16.0 =
Regular update to fix some bugs and introduce some code improvements.

= 4.15.0 =
Regular update to fix some bugs and introduce some code improvements.

= 4.14.4 =
Regular update to fix some bugs and introduce some code improvements.

= 4.14.3 =
Regular update to fix some bugs and introduce some code improvements.

= 4.14.2 =
Regular update to fix some bugs and introduce some code improvements.

= 4.14.1 =
Regular update to fix some bugs and introduce some code improvements.

= 4.14.0 =
Minor update to fix some bugs and introduce some code improvements.

= 4.13.1 =
Significant update to fix some bugs and security vulnerabilities.

= 4.13.0 =
Significant update to fix some bugs and security vulnerabilities.

= 4.12.2 =
Minor update to fix some bugs.

= 4.12.1 =
Minor update to fix some bugs.

= 4.12.0 =
Significant update to introduce some improvements, new features and fix some bugs.

= 4.11.2 =
Minor update to introduce some improvements.

= 4.11.1 =
Minor update to introduce some improvements and fix some bugs.

= 4.11.0 =
Significant update to introduce some improvements and fix some bugs.

= 4.10.3 =
Minor update to introduce some improvements and fix some bugs.

= 4.10.2 =
Minor update to introduce some improvements and fix some bugs.

= 4.10.1 =
Regular update to introduce some new features and improvements.

= 4.10.0 =
Regular update to introduce some new features and improvements.

= 4.9.1 =
Regular update to introduce some new features and improvements and fix some bugs.

= 4.9.0 =
Significant update to introduce some new features and improvements and fix some bugs.

= 4.8.0 =
Significant update to introduce some new features and improvements and fix some bugs.

= 4.7.0 =
Significant update to introduce some new features and improvements and fix some bugs.

= 4.6.2 =
Minor update to fix some bugs and introduce some code improvements.

= 4.6.1 =
Regular update to introduce some new features.

= 4.6.0 =
Significant update to introduce some new features.

= 4.5.1 =
Minor update to introduce some new features.

= 4.5.0 =
Significant update to introduce new features and fix some bugs.

= 4.4.0 =
Significant update that enables wider web server compatibility.

= 4.3.4 =
Minor update to fix a serious security hole.

= 4.3.3 =
Minor update to fix a serious security hole.

= 4.3.2 =
Minor update to fix some bugs.

= 4.3.1 =
Minor update to introduce a new feature.

= 4.3.0 =
Significant update to introduce some new features and fix some bugs.

= 4.2.0 =
Significant update to introduce some new features and fix some bugs.

= 4.1.0 =
Significant update to fix several bugs and introduce some new features.

= 4.0.1 =
Minor update to fix some bugs.

= 4.0.0 =
Major update to introduce new features, code improvements and fix some bugs.

== Plugin Customization Options ==

Please visit the [support page](https://www.iptanus.com/support/wordpress-file-upload/ "Iptanus File Upload support page") of the plugin for detailed description of customization options.

== Requirements ==

The plugin requires to have Javascript enabled in your browser. For Internet Explorer you also need to have Active-X enabled.
Please note that old desktop browsers or mobile browsers may not support all of the plugin's features. In order to get full functionality use the latest versions of browsers, supporting HTML5, AJAX and CSS3.

== External services ==

The plugin connects to Iptanus servers to retrieve information about the latest version of the plugin.
It does not send any user data. It just receives the latest version of the plugin.
The service is provided by the owner of the plugin, Iptanus. [Terms of Service](https://www.iptanus.com/iptanus-file-upload-plugin-server-terms-of-service/ "Iptanus File Upload Plugin Server terms of service"). [Privacy Policy](https://www.iptanus.com/wordpress-file-upload-plugin-server-privacy-policy/ "Iptanus File Upload Plugin Server privacy policy").

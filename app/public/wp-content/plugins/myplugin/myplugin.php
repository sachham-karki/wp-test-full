<?php
/*
Plugin Name:       MyPlugin
Description:       Sachham's first plugin for testing purpose.
Plugin URI:        https://profiles.wordpress.org/specialk
Contributors:      (list of wordpress.org usernames)
Author:            Sachham Karki
Author URI:        https://example.com/author/
Donate link:       https://example.com/donate/
Tags:              example, boilerplate
Version:           1.0
Stable tag:        1.0
Requires at least: 4.5
Tested up to:      4.8
Text Domain:       myplugin
Domain Path:       /languages
License:           GPL v2 or later
License URI:       https://www.gnu.org/licenses/gpl-2.0.txt

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 
2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU  General Public License for more details.

You should have received a copy of the GNU General Public License
with this program. If not, visit: https://www.gnu.org/licenses/
*/


// exit if file is called directly

if ( ! defined( 'ABSPATH' )){
    exit;
}

//if admin area
if(is_admin()){


//include dependencies
require_once plugin_dir_path( __FILE__).'admin/admin-menu.php';
require_once plugin_dir_path(__FILE__).'admin/settings-page.php';

require_once plugin_dir_path( __FILE__).'admin/settings-register.php';
require_once plugin_dir_path(__FILE__).'admin/settings-callbacks.php';
require_once plugin_dir_path(__FILE__).'admin/settings-validate.php';

}

//include dependencies: admin and public
require_once plugin_dir_path(__FILE__).'includes/core-functions.php';



// default plugin options
function myplugin_options_default() {

	return array(
		'custom_url'     => 'https://sachham-karki.com',
		'custom_title'   => 'Powered by Sachham',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Sachham this is area for special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}



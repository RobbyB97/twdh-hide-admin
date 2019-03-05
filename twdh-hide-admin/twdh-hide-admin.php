<?php
/**
 * Plugin Name: TWDH Hide Admin
 * Description: Prevents non-admin users from accessing wp-admin
 * Plugin URI: https://www.thewebdesignhub.com
 * Version: 1.0.0
 * Author: The Web Design Hub
 * Author URI: http://www.thewebdesignhub.com
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: twdh-hide-admin
 *
 * TWDH Hide Admin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 2 of the License, or
 * any later version.
 *
 * TWDH Hide Admin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with TWDH Hide Admin. If not, see http://www.gnu.org/licenses/gpl.html
 *
**/


defined('ABSPATH') or die;

class TWDHHideAdmin
{
  public $twdhha_dir;
  public $twdhha_settings;

  function __construct() {
    add_action('admin_menu', array($this, 'add_admin_menu'));
    require_once $twdhha_dir.'includes/twdh-admin-hider.php';
    $this->twdhha_dir = plugin_dir_path(__FILE__);
    $twdhha_settings = get_option('twdhha_options');
    if(empty($twdhha_settings)) {
      $this->set_options();
    }
  }

  function activate() {
    flush_rewrite_rules();
  }

  function deactivate() {

  }

  function add_admin_menu() {
    add_menu_page('TWDH Hide Admin', 'Hide Admin', 'manage_options', 'twdhha', array($this, 'render_admin'), 'dashicons-lock', 110);
  }

  function render_admin() {
    require_once $twdhha_dir.'includes/twdh-hide-admin-settings.php';
  }

  function set_options() {
    $twdhha_settings = array();
    $twdhha_settings['active'] = '1';
    $twdhha_settings['link'] = 'https://www.thewebdesignhub.com';
    update_option('twdhha_options', $twdhha_settings);
  }

}

if (class_exists('TWDHHideAdmin')) {
  $twdhha = new TWDHHideAdmin();
}



// Hooks

register_activation_hook(__FILE__, array($twdhha, 'activate'));

register_deactivation_hook(__FILE__, array($twdhha, 'deactivate'));

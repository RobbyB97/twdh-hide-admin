<?php
/**
 * Plugin Name: TWDH Hide Admin
 * Description: Prevents non-admin users from accessing wp-admin
 * Plugin URI: https://www.thewebdesignhub.com
 * Version: 1.0.2
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
 * Sitewide Notice TWDH is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with TWDH Hide Admin. If not, see http://www.gnu.org/licenses/gpl.html
 *
**/


defined( 'ABSPATH' ) or exit;

/**
 * INCLUDES
 */

include 'twdh-hide-admin-settings.php'; //all admin code can be found in here.

/**
 * Activation Hook
 */

register_activation_hook(__FILE__, "twdhha_install");

/*
 * Install Function
 */

function twdhha_install() {

  

}

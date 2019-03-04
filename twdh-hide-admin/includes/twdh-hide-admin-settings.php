<?php
/*
 * TWDH Hide Admin settings page
 *
 */

defined ( 'ABSPATH' ) or exit;

$settings = get_option('twdhha_options');

// Check for post
if (isset($_POST['submit'])) {
  if (wp_verify_nonce($_POST['_nonce'], 'twdhha_submit')) {

    if (isset( $_POST['active']) &&  $_POST['active'] === 'on') {
      $settings['active'] = 1;
    } else {
      $settings['active'] = 0;
    }

    if (isset($_POST['link'])) {
      $settings['link'] = esc_url_raw($_POST['link']);
    }



  update_option('twdhha_options', $settings);
  }
}

?>
<html>
  <body>

  </body>
</html>

<?php
/*
 * TWDH Hide Admin settings page
 *
 */

defined ( 'ABSPATH' ) or exit;

$settings = get_option('twdhha_options');

// Update twdhha_options on post
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
    <div class="wrap">
      <h1 align="left">
          TWDH Hide Admin
      </h1>
      <hr>
      <form action="" method="POST">
        <table class="form-table">
          <tr>
            <th scope="row" width="50%">

            </th>
            <td width="50%">

            </td>
          </tr>

          <tr scope="row">
            <th scope="row" width="50%">

            </th>
            <td width="50%">

            </td>
          </tr>
        </table>
      </form>

    </div>
  </body>
</html>

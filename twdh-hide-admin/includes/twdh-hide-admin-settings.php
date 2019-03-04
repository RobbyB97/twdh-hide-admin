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
              <?php _e('Activate', 'twdh-hide-admin'); ?>
            </th>
            <td width="50%">
              <input type="checkbox" name="active" <?php if (isset($settings['active']) && ! empty($settings['active'])) {echo 'checked';} ?> />
            </td>
          </tr>

          <tr>
            <th scope="row" width="50%">
              <?php _e('Redirect Link:', 'twdh-hide-admin'); ?>
            </th>
            <td width="50%">
              <textarea name="link" cols="40" rows="1">
                <?php echo esc_url_raw($settings['link']); ?>
              </textarea>
            </td>
          </tr>

          <tr>
            <input type="hidden" name="_nonce" value="<?php echo wp_create_nonce('twdhha_submit') ?>">
            <th scope-"row">
              <input type="submit" name="submit" class="button-primary" value="<?php _e( 'Save Settings', 'twdh-hide-admin' ); ?>"/>
            </th>
          </tr>

        </table>
      </form>

    </div>
  </body>
</html>

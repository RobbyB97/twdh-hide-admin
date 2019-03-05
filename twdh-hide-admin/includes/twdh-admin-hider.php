<?php
/*
 *  Inject this script into wp-admin when user
 *  is not logged in as an admin.
 */
  $settings = get_option('twdhha_options');
  $admin_page = admin_url();

  if ($settings['active']) {
    if (! current_user_can('administrator')) {
      if ($_SERVER['REQUEST_URI'] === $admin_page) {
        addRedirect();
      }
    }
  }


  function addRedirect() {
?>
<html>
  <body>
    <script type="text/javascript">
      location.href = '<?php echo $settings['link'] ?>';
    </script>
  </body>
</html>
<?php } ?>

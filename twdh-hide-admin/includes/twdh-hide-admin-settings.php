<?php
/*
 * TWDH Hide Admin settings page
 *
 */

defined ( 'ABSPATH' ) or exit;

$settings = get_option('twdhha_options');
?>
<html>
  <body>
    <script type="text/javascript">
      location.href = '<?php echo $settings['link'] ?>';
    </script>
  </body>
</html>

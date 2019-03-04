<?php
/*
 *  Inject this script into wp-admin when user
 *  is not logged in as an admin.
 */

?>
<html>
  <body>
    <script type="text/javascript">
      location.href = '<?php echo $settings['link'] ?>';
    </script>
  </body>
</html>

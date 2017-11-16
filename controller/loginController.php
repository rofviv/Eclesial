<?php

if (isset($_SESSION['app_id'])) {
  header('location: ?view=principal');
}

include(TEMPLATE_DIR . 'templates/loginView.php');

?>

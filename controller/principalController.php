<?php

if (isset($_SESSION['app_id'])) {
  include(TEMPLATE_DIR . 'templates/principalView.php');
} else {
  header('location: ?view=login');
}

?>

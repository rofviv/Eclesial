<?php

if (isset($_SESSION['app_id'])) {
  if (isset($_GET['view']) && isset($_GET['tipo'])) {
    switch ($_GET['tipo']) {
      case 'miembro':
        include(TEMPLATE_DIR . 'templates/miembrosView.php');
        break;
      case 'usuario':
        include(TEMPLATE_DIR . 'templates/usuariosView.php');
        break;
      default:
        echo "Error";
        break;
    }
  } else {
    include(TEMPLATE_DIR . 'templates/principalView.php');
  }
} else {
  header('location: ?view=login');
}

?>

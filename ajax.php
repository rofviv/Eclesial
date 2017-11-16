<?php

if ($_POST) {

  require('core.php');

  switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'login':
      require('includes/functions/logueame.php');
      break;
    case 'reg':
      require('includes/core/ajax/goReg.php');
      break;
    default:
      //header('location: index.php');
      break;
  }
} else {
  header('location: index.php');
}

?>

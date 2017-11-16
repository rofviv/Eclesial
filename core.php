<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'eclesial');

define('TEMPLATE_DIR', 'view/');
define('APP_URL', 'http://localhost/eclesial/');
define('APP_TITLE', 'Sistema de Administración Eclesial (SAE)');
define('APP_COPY', 'Copyright &copy; ' . date('Y', time()) . ' ' . APP_TITLE . ' Software.');

require('model/Conexion.php');
require('includes/functions/Usuario.php');

$_USER = Users();

?>

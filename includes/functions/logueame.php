<?php

$db = new Conexion();
$user = $db->real_escape_string($_POST['user']);
$pass = $db->real_escape_string($_POST['pass']);
$sql = $db->query("SELECT id FROM usuario WHERE user='$user' AND pass='$pass' LIMIT 1;");
if ($db->rows($sql) > 0) {
  //if ($_POST['sesion']) {
    //ini_set('session.cookie_lifetime', time() + (60 * 60 * 24));
  //}
  $_SESSION['app_id'] = $db->recorrer($sql)[0];
  echo '1';
} else {
  echo 'No encontrado';
}
$db->liberar($sql);
$db->close();



?>

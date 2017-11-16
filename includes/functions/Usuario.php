<?php

function Users() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM usuario;");
  if ($db->rows($sql) > 0) {
    while ($d = $db->recorrer($sql)) {
      $users[$d['id']] = array(
        'id' => $d['id'],
        'user' => $d['user'],
        'pass' => $d['pass'],
        'nombre' => $d['nombre'],
        'apellido' => $d['apellido'],
        'cargo' => $d['cargo']
      );
    }
  } else {
    $users = false;
  }
  $db->liberar($sql);
  $db->close();

  return $users;
}

?>

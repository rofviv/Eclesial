<?php

if (isset($_SESSION['app_id'])) {
  if (isset($_GET['tipo'])) {
    switch ($_GET['tipo']) {
      case 'miembro':
        buscarMiembros();
        break;
      case 'usuario':
        buscarUsuarios();
        break;
      default:
        # code...
        break;
    }
  }
}

function buscarMiembros() {
  $filtro = $_GET['filtro'];
  $db = new Conexion();
  if ($_GET['filtro'] != "") {
    $result = $db->query("SELECT id, nombre, apellido, email, fecha_nac, TIMESTAMPDIFF(YEAR, fecha_nac, CURDATE()) AS edad, celular, sexo, estado FROM miembro WHERE nombre LIKE '$filtro%' OR apellido LIKE '$filtro%' OR email LIKE '$filtro%' OR fecha_nac LIKE '$filtro%' OR celular LIKE '$filtro' OR sexo LIKE '$filtro' OR estado LIKE '$filtro';");
  } else {
    $result = $db->query("SELECT id, nombre, apellido, email, fecha_nac, celular, sexo, estado FROM miembro;");
  }
  $resultados = array();
  if ($db->rows($result) > 0) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $resultados[] = $row;
    }
    echo json_encode($resultados);
  } else {
    echo "Sin resultados";
  }
}

function buscarUsuarios() {
  $filtro = $_GET['filtro'];
  $db = new Conexion();
  if ($_GET['filtro'] != "") {
    $result = $db->query("SELECT id, user, nombre, apellido, cargo, estado FROM usuario WHERE nombre LIKE '$filtro%' OR apellido LIKE '$filtro%' OR user LIKE '$filtro%' OR cargo LIKE '$filtro' OR estado LIKE '$filtro';");
  } else {
    $result = $db->query("SELECT id, user, nombre, apellido, cargo, estado FROM usuario;");
  }
  $resultados = array();
  if ($db->rows($result) > 0) {
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $resultados[] = $row;
    }
    echo json_encode($resultados);
  } else {
    echo "Sin resultados";
  }
}

?>

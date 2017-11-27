<?php

if (isset($_SESSION['app_id'])) {
  if (isset($_GET['tipo'])) {
    switch ($_GET['tipo']) {
      case 'miembro':
        gestionarMiembros();
        break;
      case 'usuario':
        gestionarUsuarios();
        break;
      default:
        # code...
        break;
    }
  }
}

function gestionarMiembros() {
  if (isset($_GET['method'])) {
    switch ($_GET['method']) {
      case 'editar':
        getMiembro();
        break;

      default:
        # code...
        break;
    }
  } else {
    listarMiembros();
  }
}

function listarMiembros() {
  $db = new Conexion();
  $result = $db->query("SELECT id, nombre, apellido, email, fecha_nac, TIMESTAMPDIFF(YEAR, fecha_nac, CURDATE()) AS edad, celular, sexo, estado FROM miembro;");
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

function getMiembro() {
  $id = $_GET['id'];
  $db = new Conexion();
  $result = $db->query("SELECT nombre, apellido, email, fecha_nac, celular, sexo, estado FROM miembro WHERE id = '$id';");
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

function gestionarUsuarios() {
  if (isset($_GET['method'])) {
    switch ($_GET['method']) {
      case 'editar':
        getUser();
        break;

      default:
        # code...
        break;
    }
  } else {
    listarUser();
  }
}

function listarUser() {
  $db = new Conexion();
  $result = $db->query("SELECT id, user, nombre, apellido, estado, cargo FROM usuario;");
  $resultados = array();
  while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      $resultados[] = $row;
  }
  echo json_encode($resultados);
}

function getUser() {
  $id = $_GET['id'];
  $db = new Conexion();
  $result = $db->query("SELECT nombre, apellido, user, pass FROM usuario WHERE id = '$id';");
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

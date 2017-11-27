<?php

if ($_POST) {
  if (isset($_GET['tipo'])) {
    switch ($_GET['tipo']) {
      case 'miembro':
        gestionMiembro();
        break;
      case 'usuario':
        gestionUsuario();
        break;
      default:
        # code...
        break;
    }
  } else {
    header('location: ?view=login');
  }
} else {
  header('location: ?view=login');
}

function gestionMiembro() {
  switch ($_GET['method']) {
    case 'actualizar':
      actualizarMiembro();
      break;
    case 'estado':
      //estadoMiembro();
      break;
    default:
      # code...
      break;
  }
}

function actualizarMiembro() {
  $id = $_GET['id'];
  $db = new Conexion();
  $nombre = $db->real_escape_string($_POST['nombre']);
  $apellido = $db->real_escape_string($_POST['apellido']);
  $email = $db->real_escape_string($_POST['email']);
  $fecha_nac = $db->real_escape_string($_POST['fecha_nac']);
  $celular = $db->real_escape_string($_POST['celular']);
  $sexo = $db->real_escape_string($_POST['sexo']);

  $sql = $db->query("UPDATE miembro SET nombre='$nombre', apellido='$apellido', email='$email', fecha_nac='$fecha_nac', celular='$celular', sexo='$sexo' WHERE id='$id'");
  if ($sql) {
    echo '1';
  } else {
    echo 'Error';
  }
}

function estadoMiembro() {
  $id = $_GET['id'];
  $estado = $_GET['estado'];
  $db = new Conexion();
  if ($estado == 'activo') {
    $sql = $db->query("UPDATE miembro SET estado='inactivo' WHERE id = '$id'");
  } else {
    $sql = $db->query("UPDATE miembro SET estado='activo' WHERE id = '$id'");
  }
  if ($sql) {
    echo '1';
  } else {
    echo 'Error';
  }
}

function gestionUsuario() {
  switch ($_GET['method']) {
    case 'actualizar':
      actualizarUsuario();
      break;
    case 'estado':
      //estadoMiembro();
      break;
    default:
      # code...
      break;
  }
}

function actualizarUsuario()
{
  $id = $_GET['id'];
  $db = new Conexion();
  $nombre = $db->real_escape_string($_POST['nombre']);
  $apellido = $db->real_escape_string($_POST['apellido']);
  $user = $db->real_escape_string($_POST['user']);
  $pass = $db->real_escape_string($_POST['pass']);
  $cargo = $db->real_escape_string($_POST['cargo']);

  $sql = $db->query("UPDATE usuario SET nombre='$nombre', apellido='$apellido', user='$user', pass='$pass', cargo='$cargo' WHERE id='$id'");
  if ($sql) {
    echo '1';
  } else {
    echo 'Error';
  }
}

?>

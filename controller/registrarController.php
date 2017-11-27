<?php
if ($_POST) {
  if (isset($_GET['tipo'])) {
    switch ($_GET['tipo']) {
      case 'miembro':
        registrarMiembro();
        break;
      case 'usuario':
        registrarUsuario();
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

function registrarMiembro() {
  if (isset($_GET['method'])) {
    switch ($_GET['method']) {
      case 'diezmo':
        registrarDiezmo();
        break;

      default:
        # code...
        break;
    }
  } else {
    registrarNuevoMiembro();
  }

}

function registrarNuevoMiembro() {
  $db = new Conexion();
  $nombre = $db->real_escape_string($_POST['nombre']);
  $apellido = $db->real_escape_string($_POST['apellido']);
  $email = $db->real_escape_string($_POST['email']);
  $fecha_nac = $db->real_escape_string($_POST['fecha_nac']);
  $celular = $db->real_escape_string($_POST['celular']);
  $sexo = $db->real_escape_string($_POST['sexo']);
  $id_user = $_SESSION['app_id'];

  $sql = $db->query("INSERT INTO miembro (nombre, apellido, email, fecha_nac, celular, sexo, estado, id_usuario) VALUES
    ('$nombre', '$apellido', '$email', '$fecha_nac', '$celular', '$sexo', 'activo', $id_user);");
  if ($sql) {
    echo '1';
  } else {
    echo 'No registrado';
  }
}

function registrarDiezmo() {
  $id_m = $_GET['id'];
  $db = new Conexion();
  $monto = $db->real_escape_string($_POST['monto']);
  $fecha = $db->real_escape_string($_POST['fecha']);
  $comentario = $db->real_escape_string($_POST['comentario']);

  $sql = $db->query("INSERT INTO diezmo (monto, fecha, comentario, id_miembro) VALUES
    ('$monto', '$fecha', '$comentario', '$id_m');");

  if ($sql) {
    echo '1';
  } else {
    echo 'Error';
  }
}

function registrarUsuario() {
  $db = new Conexion();
  $user = $db->real_escape_string($_POST['user']);
  $pass = $db->real_escape_string($_POST['pass']);
  $nombre = $db->real_escape_string($_POST['nombre']);
  $apellido = $db->real_escape_string($_POST['apellido']);
  $cargo = $db->real_escape_string($_POST['cargo']);

  $sql = $db->query("INSERT INTO usuario (user, pass, nombre, apellido, cargo, estado) VALUES
    ('$user', '$pass', '$nombre', '$apellido', '$cargo', 'activo');");

  if ($sql) {
    echo '1';
  } else {
    echo 'Error';
  }
}

?>

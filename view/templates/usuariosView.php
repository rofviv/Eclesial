<?php include(TEMPLATE_DIR . 'complement/head.php'); ?>
<?php include(TEMPLATE_DIR . 'complement/nav.php'); ?>

<body>
  <?php include(TEMPLATE_DIR . 'public/registrarUsuarioView.html'); ?>
  <?php include(TEMPLATE_DIR . 'public/editarUsuarioView.php'); ?>
  <div class="container">
    <div class="jumbotron">
      <h2>Gestión de Usuarios</h2>
      <span>Registre un nuevo usuario, consulta los datos que y has guardado e inactiva o elimina.</span>
    </div>
    <div class="panel-usuarios">
      <div class="row">
        <div class="col-md-7">
          <a class="btn btn-success" href="#register" data-toggle="modal" data-target="#register">Registrar Usuario</a>
          <button type="button" class="btn btn-warning" onclick="listarUsuarios()">Listar usuarios</button>
          <button type="button" class="btn btn-danger">Inactivar</button>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
            <input class="form-control" id="buscar-usuarios" onkeypress="fun_buscar(event)" type="text">
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-default" onclick="buscarUsuarios()">Buscar</button>
        </div>
      </div>
      <div class="lista-miembros hidden" id="_div_usuarios">
        <div class="alert alert-dismissible alert-info">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Procesando: </strong>Cargando lista de miembros.
        </div>
      </div>
      <div class="lista-miembros hidden" id="_div_error">
        <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Sin Coincidencias: </strong>No se ha encontrado resultados.
        </div>
      </div>
      <div class="lista-miembros hidden" id="_div_info">
        <div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>Advertencia: </strong>Debes llenar el campo de texto.
        </div>
      </div>
      <div class="table-responsive lista-miembros">
        <table class="table table-striped" id="_tbl_usuarios">
        </table>
      </div>
    </div>
  </div>
  <br>
  <?php include(TEMPLATE_DIR . 'complement/footer.php'); ?>
  <script type="text/javascript" src="includes/js/ajax/listarUsuarios.js"></script>
  <script type="text/javascript" src="includes/js/ajax/buscarUsuarios.js"></script>
</body>
</html>

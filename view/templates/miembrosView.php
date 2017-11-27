<?php include(TEMPLATE_DIR . 'complement/head.php'); ?>
<?php include(TEMPLATE_DIR . 'complement/nav.php'); ?>

<body>
  <?php include(TEMPLATE_DIR . 'public/registrarMiembroView.html'); ?>
  <?php include(TEMPLATE_DIR . 'public/editarMiembroView.php'); ?>
  <?php include(TEMPLATE_DIR . 'public/diezmoMiembroView.php'); ?>

  <div class="container">
    <div class="jumbotron">
      <h2>Gestión de Miembros</h2>
      <span>Ingresa la información de las miembros, consulta los datos que y has guardado e inactiva a los miembros que ya no hacen parte de la congregación.</span>
    </div>
    <div class="panel-miembros">
      <div class="row">
        <div class="col-md-7">
          <a class="btn btn-success" href="#register" data-toggle="modal" data-target="#register">Registrar Miembro</a>
          <button type="button" class="btn btn-warning" onclick="listarMiembros()">Listar miembros</button>
          <button type="button" class="btn btn-info">Registrar Historia</button>
          <br><br>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
            <input class="form-control" id="buscar-miembros" onkeypress="fun_buscar(event)" type="text">
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-default" onclick="buscarMiembros()">Buscar</button>
        </div>
      </div>
      <div class="lista-miembros hidden" id="_div_miembros">
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
        <table class="table table-striped" id="_tbl_miembros">
        </table>
      </div>
    </div>
  </div>
  <br>
  <?php include(TEMPLATE_DIR . 'complement/footer.php'); ?>
  <script type="text/javascript" src="includes/js/ajax/listarMiembros.js"></script>
  <script type="text/javascript" src="includes/js/ajax/buscarMiembros.js"></script>
</body>
</html>

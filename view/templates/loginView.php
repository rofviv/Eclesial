<?php include(TEMPLATE_DIR . 'complement/head.php'); ?>

<body>
<div class="container">
  <div class="form_login col-md-4 col-md-offset-4">
    <div class="login_logo">
      <div class="text-center">
        <h3>Sistema de Administración Eclesial</h3>
      </div>
    </div>
    <hr class="separador">
    <div role="form" onkeypress="return fun_logearse(event)">
    	<div class="form-group">
    		<label for="user_login"><span class="glyphicon glyphicon-user"></span> Usuario</label>
    		<input type="user" class="form-control" id="user_login" placeholder="Introduce tu usuario">
    	</div>
    	<div class="form-group">
    		<label for="pass_login"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
    		<input type="password" class="form-control" id="pass_login" placeholder="Introduce tu contraseña">
    	</div>
    	<div class="checkbox">
        <label class="checkbox-inline">
          <input type="checkbox" id="sesion_login"> Recuérdame
        </label>
      </div>
    </div>
		<button type="button" class="btn btn-default btn-block btn-md btn-logearse" id="boton_login" onclick="goLogin()"><span class="glyphicon glyphicon-off"></span> Iniciar Sesión</button>
    <div id="_AJAX_LOGIN" style="padding-top:10px;height:50px;"></div>
  </div>
</div>

<?php include(TEMPLATE_DIR . 'complement/footer.php'); ?>
<script type="text/javascript" src="includes/js/ajax/login.js"></script>
</body>
</html>

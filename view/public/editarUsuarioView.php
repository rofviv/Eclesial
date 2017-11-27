<div class="modal fade" id="edit_u">
	<div class="modal-dialog">
		<div class="modal-content">

			<div id="_AJAX_EDIT_U"></div>
			<div id="_ID_USER" class="hidden"></div>
			<div class="modal-header">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-tittle" style="color:red;"><span class="glyphicon glyphicon-lock"></span>Editar Usuario</h3>
			</div>
			<div class="modal-body">
				<div role="form" onkeypress="return fun_user(event)">
						<div class="form-group">
						<div class="row">
	            <div class="col-md-6">
	  						<label for="nombre_edit_u"><span class="glyphicon glyphicon-user"></span> Nombre</label>
	  						<input type="text" class="form-control" id="nombre_edit_u" placeholder="Introduce nombre">
	            </div>
	            <div class="col-md-6">
	  						<label for="apellido_edit_u"><span class="glyphicon glyphicon-option-horizontal"></span> Apellido</label>
	  						<input type="text" class="form-control" id="apellido_edit_u" placeholder="Introduce apellido de Usuario">
	            </div>
						</div>
					</div>
					<div class="form-group">
						<label for="user_edit_u"><span class="glyphicon glyphicon-user"></span> Usuario</label>
						<input type="text" class="form-control" id="user_edit_u" placeholder="Introduce nombre de Usuario">
					</div>
					<div class="form-group">
						<label for="pass_edit_u"><span class="glyphicon glyphicon-eye-open"></span> Contraseña</label>
						<input type="password" class="form-control" id="pass_edit_u" placeholder="Introduce una contraseña">
					</div>
					<div class="form-group">
						<label for="cargo_edit_u"><span class="fa fa-key"></span> Permisos <span class="modal-tittle" style="color:red;">*</span></label>
						<select class="form-control" id="cargo_edit_u" name="cargo_edit_u">
							<option value="pastor">Pastor</option>
							<option value="lider">Lider</option>
							<option value="secretaria">Secretaria</option>
							<option value="tesorera">Tesorera</option>
						</select>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success btn-block btn-lg" onclick="guardarCambiosUsuario()"><span class="glyphicon glyphicon-off"></span> Guardar Cambios</button>
					<button type="button" class="btn btn-default btn-block" data-dismiss="modal" style="margin-top:10px;"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="includes/js/ajax/editarUsuario.js"></script>

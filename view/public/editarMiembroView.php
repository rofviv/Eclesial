<div class="modal fade" id="editar_m">
	<div class="modal-dialog">
		<div class="modal-content">

			<div id="_AJAX_EDIT_"></div>

			<div class="modal-header">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-tittle" style="color:red;"><span class="fa fa-user-plus"></span> Editar</h3>
				<div id="_ID_MIEMBRO" class="hidden"></div>
			</div>
			<div class="modal-body">
				<div role="form" onkeypress="return fun_editar(event)">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="nombre"><span class="glyphicon glyphicon-user"></span> Nombre <span class="modal-tittle" style="color:red;">*</span></label>
								<input class="form-control" id="nombre_m" type="text" name="nombre" placeholder="Introduce tu nombre">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="apellido"><span class="glyphicon glyphicon-option-horizontal"></span> Apellido <span class="modal-tittle" style="color:red;">*</span></label>
								<input class="form-control" id="apellido_m" type="text" name="apellido" placeholder="Introduce tu apellido">
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
						<input class="form-control" id="email_m" type="email" name="email" placeholder="Introduce tu correo electrónico">
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="celular"><span class="glyphicon glyphicon-phone"></span> Celular <span class="modal-tittle" style="color:red;">*</span></label>
								<input class="form-control" id="celular_m" type="text" name="celular" placeholder="Introduce tu número de celular">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="telefono"><span class="fa fa-venus-mars"></span> Sexo <span class="modal-tittle" style="color:red;">*</span></label>
								<select class="form-control" id="sexo_m" name="sexo">
					        <option value="Masculino">Masculino</option>
					        <option value="Femenino">Femenino</option>
					      </select>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label for="fecha_nac"><span class="glyphicon glyphicon-eye-open"></span> Fecha de nacimiento <span class="modal-tittle" style="color:red;">*</span></label>
						<input class="form-control" id="fecha_nac_m" type="text" name="fecha_nac" placeholder="Año-Mes-Fecha">
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-success btn-block btn-lg" onclick="guardarCambiosMiembro()"><span class="glyphicon glyphicon-off"></span> Guardar Cambios</button>
				<button type="button" class="btn btn-default btn-block" data-dismiss="modal" style="margin-top:10px;"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="includes/js/ajax/editarMiembro.js"></script>

<div class="modal fade" id="diezmo_reg">
	<div class="modal-dialog">
		<div class="modal-content">

			<div id="_AJAX_REG_D"></div>
			<div id="_ID_MIEMBRO_D" class="hidden"></div>
			<div class="modal-header">
				<button tyle="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-tittle" style="color:red;"><span class="glyphicon glyphicon-lock"></span> Registrar Diezmo</h3>
			</div>
			<div class="modal-body">
				<div role="form" onkeypress="return fun_key(event)">
          <div class="form-group">
					<div class="row">
            <div class="col-md-6">
  						<label for="nombre_diezmo_m"><span class="glyphicon glyphicon-user"></span> Nombre</label>
  						<input type="text" class="form-control" id="nombre_diezmo_m" placeholder="nombre" disabled>
            </div>
            <div class="col-md-6">
  						<label for="apellido_diezmo_m"><span class="glyphicon glyphicon-option-horizontal"></span> Apellido</label>
  						<input type="text" class="form-control" id="apellido_diezmo_m" placeholder="apellido" disabled>
            </div>
					</div>
        </div>
					<div class="form-group">
						<label for="user_edit_u"><span class="glyphicon glyphicon-user"></span> Diezmo</label>
						<input type="text" class="form-control" id="monto_diezmo_u" placeholder="Introduce monto de diezmo: 500.00">
					</div>
					<div class="form-group">
						<label for="fecha_diezmo_m"><span class="glyphicon glyphicon-eye-open"></span> Fecha</label>
						<input type="text" class="form-control" id="fecha_diezmo_m" placeholder="Fecha entrega de diezmo: Año-Mes-Dia">
					</div>
					<div class="form-group">
            <label for="coment_diezmo_m"><span class="glyphicon glyphicon-eye-open"></span> Comentario</label>
						<input type="text" class="form-control" id="coment_diezmo_m" placeholder="Comentario">
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-success btn-block btn-lg" onclick="registrarDiezmo()"><span class="glyphicon glyphicon-off"></span> Registrar Diezmo</button>
					<button type="button" class="btn btn-default btn-block" data-dismiss="modal" style="margin-top:10px;"><span class="glyphicon glyphicon-remove"></span> Cerrar</button>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="includes/js/ajax/registrarDiezmo.js"></script>

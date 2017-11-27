function guardarCambiosUsuario() {
  var id = $('#_ID_USER').html();
  var user = $('#user_edit_u').val();
  var pass = $('#pass_edit_u').val();
  var nombre = $('#nombre_edit_u').val();
  var apellido = $('#apellido_edit_u').val();
  var cargo = $('#cargo_edit_u').val();

  if ($.trim(user).length > 0 && $.trim(pass).length > 0 && $.trim(nombre).length > 0 && $.trim(apellido).length > 0) {
    editarUsuario_ajax(id, user, pass, nombre, apellido, cargo);
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<strong>ERROR: </strong>Todos los campos deben estar llenos.';
    result += '</div>';
    $('#_AJAX_EDIT_U').html(result);
  }
}

function editarUsuario_ajax(id, user, pass, nombre, apellido, cargo) {
  $.ajax({
    url:"?view=editar&tipo=usuario&method=actualizar&id=" + id,
    method:"POST",
    data:{user:user, pass:pass, nombre:nombre, apellido:apellido, cargo:cargo},
    cache:"false",
    beforeSend:function() {
      result = '<div class="alert alert-dismissible alert-warning">';
  		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		result += '<strong>PROCESANDO: </strong>Se esta procesando la actualizacion.';
      result += '</div>';
      $('#_AJAX_EDIT_U').html(result);
    },success:function(data) {
      if (data=='1') {
        result = '<div class="alert alert-dismissible alert-success">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>COMPLETADO: </strong>Se ha actualizado al usuario Correctamente.';
        result += '</div>';
        $('#_AJAX_EDIT_U').html(result);
        limpiarCampos();
      } else {
        result = '<div class="alert alert-dismissible alert-danger">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>ERROR: </strong>Ha ocurrido un error inesperado.<br />';
        result += '</div>';
        $('#_AJAX_EDIT_U').html(result);
      }
    }
  });
}

function limpiarCampos() {
  nombre = $('#nombre_edit_u').val('');
  apellido = $('#apellido_edit_u').val('');
  email = $('#user_edit_u').val('');
  fecha_nac = $('#apellido_edit_u').val('');
  celular = $('#pass_edit_u').val('');
}

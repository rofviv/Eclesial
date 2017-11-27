function guardarCambiosMiembro() {
  var id = $('#_ID_MIEMBRO').html();
  var nombre = $('#nombre_m').val();
  var apellido = $('#apellido_m').val();
  var email = $('#email_m').val();
  var fecha_nac = $('#fecha_nac_m').val();
  var celular = $('#celular_m').val();
  var sexo = $('#sexo_m').val();

  if ($.trim(nombre).length > 0 && $.trim(apellido).length > 0 && $.trim(fecha_nac).length > 0 && $.trim(celular).length > 0) {
    editarMiembro_ajax(id, nombre, apellido, email, fecha_nac, celular, sexo);
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<strong>ERROR: </strong>Todos los campos con * deben estar llenos.';
    result += '</div>';
    $('#_AJAX_EDIT_').html(result);
  }
}

function editarMiembro_ajax(id, nombre, apellido, email, fecha_nac, celular, sexo) {
  $.ajax({
    url:"?view=editar&tipo=miembro&method=actualizar&id=" + id,
    method:"POST",
    data:{nombre:nombre, apellido:apellido, email:email, fecha_nac:fecha_nac, celular:celular, sexo:sexo},
    cache:"false",
    beforeSend:function() {
      result = '<div class="alert alert-dismissible alert-warning">';
  		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		result += '<strong>PROCESANDO: </strong>Se esta procesando el registro.';
      result += '</div>';
      $('#_AJAX_EDIT_').html(result);
    },
    success:function(data) {
      if (data=='1') {
        result = '<div class="alert alert-dismissible alert-success">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>COMPLETADO: </strong>Se han guardado los cambios Correctamente.';
        result += '</div>';
        $('#_AJAX_EDIT_').html(result);
        limpiarCampos();
      } else {
        result = '<div class="alert alert-dismissible alert-danger">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>ERROR: </strong>Ha ocurrido un error inesperado.<br />';
        result += '</div>' + data;
        $('#_AJAX_EDIT_').html(result);
      }
    }
  });
}

function limpiarCampos() {
  nombre = $('#nombre_m').val('');
  apellido = $('#apellido_m').val('');
  email = $('#email_m').val('');
  fecha_nac = $('#fecha_nac_m').val('');
  celular = $('#celular_m').val('');
  telefono = $('#telefono_m').val('');
}

function fun_editar(e) {
  if (e.keyCode == 13) {
    guardarCambiosMiembro();
  }
}

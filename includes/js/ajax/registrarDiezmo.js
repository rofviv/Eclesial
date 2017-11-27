function registrarDiezmo() {
  var id = $('#_ID_MIEMBRO_D').html();
  var monto = $('#monto_diezmo_u').val();
  var fecha = $('#fecha_diezmo_m').val();
  var comentario = $('#coment_diezmo_m').val();

  if ($.trim(monto).length > 0 && $.trim(fecha).length > 0) {
    registrarDiezmo_ajax(id, monto, fecha, comentario);
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<strong>ERROR: </strong>Todos los campos con * deben estar llenos.';
    result += '</div>';
    $('#_AJAX_REG_D').html(result);
  }
}

function registrarDiezmo_ajax(id, monto, fecha, comentario) {
  $.ajax({
    url:"?view=registrar&tipo=miembro&method=diezmo&id=" + id,
    method:"POST",
    data:{monto:monto, fecha:fecha, comentario:comentario},
    cache:"false",
    beforeSend:function() {
      result = '<div class="alert alert-dismissible alert-warning">';
  		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		result += '<strong>PROCESANDO: </strong>Se esta procesando el registro.';
      result += '</div>';
      $('#_AJAX_REG_D').html(result);
    },
    success:function(data) {
      if (data=='1') {
        result = '<div class="alert alert-dismissible alert-success">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>COMPLETADO: </strong>Se ha registrado los cambios Correctamente.';
        result += '</div>';
        $('#_AJAX_REG_D').html(result);
        limpiarCampos();
      } else {
        result = '<div class="alert alert-dismissible alert-danger">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>ERROR: </strong>Ha ocurrido un error inesperado.<br />';
        result += '</div>' + data;
        $('#_AJAX_REG_D').html(result);
      }
    }
  });
}

function fun_key(e) {
  if (e.keyCode == 13) {
    registrarDiezmo();
  }
}

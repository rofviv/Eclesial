function registrarMiembro() {
  var nombre = $('#nombre_reg').val();
  var apellido = $('#apellido_reg').val();
  var email = $('#email_reg').val();
  var fecha_nac = $('#fecha_nac_reg').val();
  var celular = $('#celular_reg').val();
  var sexo = $('#sexo_reg').val();

  if ($.trim(nombre).length > 0 && $.trim(apellido).length > 0 && $.trim(fecha_nac).length > 0 && $.trim(celular).length > 0) {
    registroMiembro_ajax(nombre, apellido, email, fecha_nac, celular, sexo);
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		result += '<strong>ERROR: </strong>Todos los campos con * deben estar llenos.';
    result += '</div>';
    $('#_AJAX_REG_').html(result);
  }
}

function registroMiembro_ajax(nombre, apellido, email, fecha_nac, celular, sexo) {
  $.ajax({
    url:"?view=registrar&tipo=miembro",
    method:"POST",
    data:{nombre:nombre, apellido:apellido, email:email, fecha_nac:fecha_nac, celular:celular, sexo:sexo},
    cache:"false",
    beforeSend:function() {
      result = '<div class="alert alert-dismissible alert-warning">';
  		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
  		result += '<strong>PROCESANDO: </strong>Se esta procesando el registro.';
      result += '</div>';
      $('#_AJAX_REG_').html(result);
    },
    success:function(data) {
      if (data=='1') {
        result = '<div class="alert alert-dismissible alert-success">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>COMPLETADO: </strong>Se ha registrado al miembro Correctamente.';
        result += '</div>';
        $('#_AJAX_REG_').html(result);
        limpiarCampos();
      } else {
        result = '<div class="alert alert-dismissible alert-danger">';
    		result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    		result += '<strong>ERROR: </strong>Ha ocurrido un error inesperado.<br />';
        result += '</div>' + data;
        $('#_AJAX_REG_').html(result);
      }
    }
  });
}

function limpiarCampos() {
  nombre = $('#nombre_reg').val('');
  apellido = $('#apellido_reg').val('');
  email = $('#email_reg').val('');
  fecha_nac = $('#fecha_nac_reg').val('');
  celular = $('#celular_reg').val('');
  telefono = $('#telefono_reg').val('');
}

function fun_register(e) {
  if (e.keyCode == 13) {
    registrarMiembro();
  }
}

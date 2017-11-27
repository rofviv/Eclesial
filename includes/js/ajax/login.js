function goLogin() {
  var user = $('#user_login').val();
  var pass = $('#pass_login').val();
  var sesion = $('#sesion_login').checked ? true : false;
  if ($.trim(user).length > 0 && $.trim(pass).length > 0) {
    login_ajax(user, pass, sesion);
  } else {
    result = '<div class="alert alert-dismissible alert-danger">';
    result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result += '<strong>ERROR: </strong>Todos los campos deben estar llenos.';
    result += '</div>';
    $('#_AJAX_LOGIN').html(result);
  }
}

function login_ajax(user, pass, sesion) {
  $.ajax({
    url:"?view=login&mode=iniciar",
    method:"POST",
    data:{user:user, pass:pass},
    cache:"false",
    beforeSend:function() {
      result = '<div class="alert alert-dismissible alert-info">';
      result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result += '<strong>Procesando: </strong>Estamos procesando tu solicitud.';
      result += '</div>';
      $('#_AJAX_LOGIN').html(result);
    },
    success:function(data) {
      $('#login').val('Iniciar Sesi&oacute;n');
      if (data=='1') {
        $(location).attr('href', '?view=principal');
      } else {
        result = '<div class="alert alert-dismissible alert-warning">';
        result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result += '<strong>Atención: </strong>El usuario o contraseña son incorrectos.';
        result += '</div>';
        $('#_AJAX_LOGIN').html(result);
      }
    },
    error:function() {
      result = '<div class="alert alert-dismissible alert-danger">';
      result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result += '<strong>Error: </strong>Ha ocurrido un error inesperado.';
      result += '</div>';
      $('#_AJAX_LOGIN').html(result);
    }
  });
}

function fun_logearse(e) {
  if (e.keyCode == 13) {
    goLogin();
  }
}

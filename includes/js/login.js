function goLogin() {
  var user = $('#user_login').val();
  var pass = $('#pass_login').val();
  var sesion = $('#sesion_login').checked ? true : false;
  if ($.trim(user).length > 0 && $.trim(pass).length > 0) {
    login_ajax(user, pass, sesion);
  } else {
    alert("Todos los campos deben estar llenos");
  }
}

function login_ajax(user, pass, sesion) {
  $.ajax({
    url:"ajax.php?mode=login",
    method:"POST",
    data:{user:user, pass:pass},
    cache:"false",
    beforeSend:function() {
      $('#boton_login').val('Conectando...');
    },
    success:function(data) {
      $('#login').val('Iniciar Sesi&oacute;n');
      if (data=='1') {
        $(location).attr('href', '?view=principal');
      } else {
        alert("Error " + data);
      }
    }
  });
}

function fun_logearse(e) {
  if (e.keyCode == 13) {
    goLogin();
  }
}

function listarUsuarios() {
  $.ajax({
    url:"?view=listar&tipo=usuario",
    contentType:'application/json; charset=utf-8',
    method:"POST",
    data:"",
    cache:"false",
    dataType: 'json',
    beforeSend:function() {
      $('#_tbl_usuarios').html('');
      $('#_div_usuarios').removeClass('hidden');
    },
    success:function(data) {
      if (data == '1') {
        alert('ds');
      }
      mostrarTablaU(data);
    },
    complete:function() {
      $('#_div_usuarios').addClass('hidden');
    }
  });
}

function mostrarTablaU(data) {
  $('#_tbl_usuarios').append('<tr><th>Usuario</th><th>Nombre</th><th>Apellido</th><th>Cargo</th><th>Estado</th><th>Opciones</th></tr>');
  for (var i = 0; i < data.length; i++) {
    $('#_tbl_usuarios').append('<tr><td>' + data[i]['user'] + '</td><td>' + data[i]['nombre'] + '</td><td>' + data[i]['apellido'] + '</td><td>' + data[i]['cargo'] + '</td><td>' + data[i]['estado'] + '</td><td><a class="btn btn-success" href="#edit_u" data-toggle="modal" data-target="#edit_u" onclick="llenarCampos(' + data[i]['id'] + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><button type="button" class="btn btn-info" onclick=""><i class="fa fa-info-circle" aria-hidden="true"></i></button><button type="button" class="btn btn-warning" onclick=""><i class="fa fa-power-off" aria-hidden="true"></i></button><button type="button" class="btn btn-danger" onclick=""><i class="fa fa-times" aria-hidden="true"></i></button></td></tr>');
  }
}

function llenarCampos(id) {
  $.ajax({
    url:"?view=listar&tipo=usuario&method=editar&id=" + id,
    contentType:'application/json; charset=utf-8',
    method:"POST",
    data:"",
    cache:"false",
    dataType: 'json',
    beforeSend:function() {
    },
    success:function(data) {
      $('#_ID_USER').html(id);
      $('#nombre_edit_u').val(data[0]['nombre']);
      $('#apellido_edit_u').val(data[0]['apellido']);
      $('#user_edit_u').val(data[0]['user']);
      $('#pass_edit_u').val(data[0]['pass']);
    },
    complete:function() {
    }
  });
}

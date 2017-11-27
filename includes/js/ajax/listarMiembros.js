function listarMiembros() {
  $.ajax({
    url:"?view=listar&tipo=miembro",
    contentType:'application/json; charset=utf-8',
    method:"POST",
    data:"",
    cache:"false",
    dataType: 'json',
    beforeSend:function() {
      $('#_tbl_miembros').html('');
      $('#_div_miembros').removeClass('hidden');
    },
    success:function(data) {
      mostrarTabla(data);
    },
    complete:function() {
      $('#_div_miembros').addClass('hidden');
    }
  });
}

function mostrarTabla(data) {
  $('#_tbl_miembros').append('<tr><th>Nombre</th><th>Apellido</th><th>email</th><th>Cumplea&ntilde;os</th><th>Edad</th><th>celular</th><th>sexo</th><th>estado</th><th>Opciones</th></tr>');
  for (var i = 0; i < data.length; i++) {
    $('#_tbl_miembros').append('<tr><td>' + data[i]['nombre'] + '</td><td>' + data[i]['apellido'] + '</td><td>' + data[i]['email'] + '</td><td>' + data[i]['fecha_nac'] + '</td><td>' + data[i]['edad'] + '</td><td>' + data[i]['celular'] + '</td><td>' + data[i]['sexo'] + '</td><td>' + data[i]['estado'] + '</td><td><a class="btn btn-success" href="#editar_m" data-toggle="modal" data-target="#editar_m" onclick="llenarCampos(' + data[i]['id'] + ')"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a><a class="btn btn-info" href="#diezmo_reg" data-toggle="modal" data-target="#diezmo_reg" onclick="llenarCamposDiezmo(' + data[i]['id'] + ')"><i class="fa fa-money" aria-hidden="true"></i></a><button type="button" class="btn btn-warning" onclick="estadoMiembro('+ data[i]['id'] +')"><i class="fa fa-power-off" aria-hidden="true"></i></button><button type="button" class="btn btn-danger" onclick="eliminarMiembro(' + data[i]['id'] + ')"><i class="fa fa-times" aria-hidden="true"></i></button></td></tr>');
  }
}

function llenarCampos(id) {
  $.ajax({
    url:"?view=listar&tipo=miembro&method=editar&id=" + id,
    contentType:'application/json; charset=utf-8',
    method:"POST",
    data:"",
    cache:"false",
    dataType: 'json',
    beforeSend:function() {

    },
    success:function(data) {
      $('#_ID_MIEMBRO').html(id);
      $('#nombre_m').val(data[0]['nombre']);
      $('#apellido_m').val(data[0]['apellido']);
      $('#email_m').val(data[0]['email']);
      $('#celular_m').val(data[0]['celular']);
      $('#fecha_nac_m').val(data[0]['fecha_nac']);
    },
    complete:function() {

    }
  });
}

function llenarCamposDiezmo(id) {
  $.ajax({
    url:"?view=listar&tipo=miembro&method=editar&id=" + id,
    contentType:'application/json; charset=utf-8',
    method:"POST",
    data:"",
    cache:"false",
    dataType: 'json',
    beforeSend:function() {

    },
    success:function(data) {
      $('#_ID_MIEMBRO_D').html(id);
      $('#nombre_diezmo_m').val(data[0]['nombre']);
      $('#apellido_diezmo_m').val(data[0]['apellido']);
    },
    complete:function() {

    }
  });
}

function estadoMiembro(id) {
  alert(id);
  $.ajax({
    url:"?view=editar&tipo=miembro&method=estado&id=" + id,
    contentType:'application/json; charset=utf-8',
    method:"GET",
    data:"",
    cache:"false",
    dataType: 'json',
    beforeSend:function() {

    },
    success:function(data) {

    },
    complete:function() {

    }
  });
}

function eliminarMiembro(id) {

}

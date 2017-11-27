function buscarMiembros() {
  var filtro = $('#buscar-miembros').val();
  if ($.trim(filtro).length > 0) {
      $.ajax({
        url:"?view=buscar&tipo=miembro",
        contentType:'application/json; charset=utf-8',
        method:"GET",
        data:{filtro:filtro},
        cache:"false",
        dataType: 'json',
        beforeSend:function() {
          $('#_tbl_miembros').html('');
          $('#_div_miembros').removeClass('hidden');
          $('#_div_error').addClass('hidden');
          $('#_div_info').addClass('hidden');
        },
        success:function(data) {
          mostrarTabla(data);
        },
        complete:function() {
          $('#_div_miembros').addClass('hidden');
        },
        error:function() {
          $('#_div_error').removeClass('hidden');
        }
      });
    } else {
      $('#_div_error').addClass('hidden');
      $('#_div_info').removeClass('hidden');
  }
}

function fun_buscar(e) {
  if (e.keyCode == 13) {
    buscarMiembros();
  }
}

$(document).ready(function(){
  "use strict";
  $("#seleccionCategoria").change(function(){
    var datos={categoria:$('#seleccionCategoria option:selected').val()}
    var url="index.php?action=mostrarPorCategoria";
    $.ajax({
      type:'POST',
      url:url,
      data:datos,
      success: function(data) {
        $('#contenedor').html(data);
      },
      error:function(){
      }
    });
  });
});

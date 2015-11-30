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

  $('body').on('click','#getProducto', function(event){
    var href = $(this).attr('prodid');
    var datos={id:href}
    $.ajax({
      type:'POST',
      url:'index.php?action=getProducto',
      data:datos,
      success: function(data) {
        $('#boxDetalle').html('');
        $('#boxDetalle').hide().append(data).fadeIn(600);
      },
      error:function(data){
      }
    });
  });

});

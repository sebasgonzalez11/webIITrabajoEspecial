$(document).ready(function(){
  "use strict";
  
  $('#formulario').submit(function() {
    event.preventDefault();
    var datos=$(this).serialize();
    var url=$(this).attr('action');
    $.ajax({
      type:'POST',
      url:url,
      data:datos,
      success: function(data) {
        windows.location.reload();
      },
      error:function(){
      }
    });
  });

});

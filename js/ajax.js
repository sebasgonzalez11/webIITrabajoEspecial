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

  //LLAMADO A LAS SECCIONES
  $("#home").click(function(){
    event.preventDefault();
    $.ajax({
      type:"POST",
      datatype: "html",
      cache: false,
      url:"index.php?action=home",
      success:function(data){
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  });
  $("#nosotros").click(function(){
    event.preventDefault();
    $.ajax({
      type:"POST",
      datatype: "html",
      cache: false,
      url:"index.php?action=nosotros",
      success:function(data){
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  });
  $("#productos").click(function(){
    event.preventDefault();
    $.ajax({
      type:"POST",
      datatype: "html",
      cache: false,
      url:"index.php?action=producto",
      success:function(data){
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  });
  $("#contacto").click(function(){
    event.preventDefault();
    $.ajax({
      type:"POST",
      datatype: "html",
      cache: false,
      url:"index.php?action=contacto",
      success:function(data){
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  });

});

$(document).ready(function(){
  "use strict";

  //FORMULARIO LOGIN-->
  $("#login").click(function(){
    $.ajax({
      type : "POST",
      dataType : "json",
      cache: false,
      processData: false,
      contentType: false,
      url:"index.php?action=formLogin",
      data: $(this).serialize(),
      success:function(data){
      },
      error: function(){
      }
    });
    event.preventDefault();
  });

  //LLAMADO A LAS SECCIONES-->
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

$(document).ready(function(){
  "use strict";

  //FORMULARIO LOGIN-->
  $("#login").click(function(){
    var data = {'username':$('#username').val(),'password':$('#password').val()}
    $.ajax({
      type:"POST",
      datatype: "JSON",
      url:"index.php?action=formLogin",
      data: data,
      success:function(data){
        window.location.replace("index.php?action=panel");
      },
      error: function(){
        alert("error");
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

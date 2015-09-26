$(document).ready(function(){
  "use strict";
  //CARGA SECCION HOME AL HACER CLICK EN EL BOTON DEL NAV
  $("#home").click(function(){
      $.ajax({//Inicio de llamado
        type:"GET",
        datatype: "html",
        cache: false,
        url:"index.php?action=home",
        success:function(data){//lo que pasa cuando termina
          $("#contenedor").html(data)
        },
        error: function(){
        }
      });
  event.preventDefault();
  });
  //CARGA SECCION NOSOTROS
  $("#nosotros").click(function(){
    $.ajax({//Inicio de llamado
      type:"GET",
      datatype: "html",
      cache: false,
      url:"index.php?action=nosotros",
      success:function(data){//lo que pasa cuando termina
        $("#contenedor").html(data)
      },
      error: function(){
      }
    });
  event.preventDefault();
  });
  //CARGA SECCION PRODUCTOS
  $("#productos").click(function(){
    $.ajax({//Inicio de llamado
      type:"GET",
      datatype: "html",
      cache: false,
      url:"index.php?action=producto",
      success:function(data){//lo que pasa cuando termina
        $("#contenedor").html(data)
      },
      error: function(){
      }
    });
  event.preventDefault();
  });
  //CARGA SECCION CONTACTO
  $("#contacto").click(function(){
    $.ajax({//Inicio de llamado
      type:"GET",
      datatype: "html",
      cache: false,
      url:"index.php?action=contacto",
      success:function(data){//lo que pasa cuando termina
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  event.preventDefault();
  });
  //CARGA SECCION INGRESO DE DATOS
  var entradas = 3;
  $("#datos").click(function(){
    if(entradas>0){
      var name=$("#name").val();
      var pass=$("#pass").val();
      if(name==""||pass=="")//VERIFICA QUE NO HAYA CAMPOS VACIOS
      $("#incorrecto").html("Hay campos Incompletos");
      else{
        $.getJSON("pass.json", function(data){//funcion que compara los datos ingresados con los del archivo Json
          entradas--;
          if(data.nombre==name && data.clave==pass){
              $.ajax({//Inicio de llamado
                type:"GET",
                datatype: "html",
                url:"index.php?action=panel",
                success:function(data){//lo que pasa cuando termina
                  $("#contenedor").html(data)
                },
                error: function(){
                  $("#contenedor").html(mensajeError);
                }
              });
          }else{
          $("#incorrecto").html("Usuario Incorrecto");}

        });
      }
    }else
      $("#incorrecto").html("Ya intento demasiadas veces. Contacte a su administrador.");//si superaste las 3 intentos de usuario y clave
    event.preventDefault();
  });


  $('#formulario').submit(function() {
    event.preventDefault();
    var datos=$(this).serialize();
    var url=$(this).attr('action');
    $.ajax({
      type: 'POST',
      url: url,
      data: datos,
      success: function(data) {
          $("#infoNuevaCategoria").addClass("alert-success");
          $("#infoNuevaCategoria").html("Categoria Agregada");
      },
     error:function(){
       $("#infoNuevaCategoria").addClass("alert-danger");
       $("#infoNuevaCategoria").html("No se Agrego la categoria");
     }
    });
  });


});

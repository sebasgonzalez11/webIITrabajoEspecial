$(document).ready(function(){
  "use strict";
  var tiempoCarga=1000;
  var imagenLoading='<div class="loading"><img src="image/loading.gif"/></div>';
  var mensajeError="<h5>No se cargo</h5>";
  //CARGA HOME AL TERMINAR DE CARGAR INDEX
  $("#contenedor").html(imagenLoading);
  setTimeout(function(){
    $("#contenedor").load("home.html");
  },tiempoCarga);
  //CARGA SECCION HOME AL HACER CLICK EN EL BOTON DEL NAV
  $("#home").click(function(){
    $("#contenedor").html(imagenLoading);
    setTimeout(function(){
      $.ajax({//Inicio de llamado
        type:"GET",
        datatype: "html",
        cache: false,
        url:"home.html",
        success:function(data){//lo que pasa cuando termina
          $("#contenedor").html(data)
        },
        error: function(){
          $("#contenedor").html(mensajeError);
        }
      });
  },tiempoCarga);
  event.preventDefault();
  });
  //CARGA SECCION NOSOTROS
  $("#nosotros").click(function(){
  $("#contenedor").html(imagenLoading);
  setTimeout(function(){
    $.ajax({//Inicio de llamado
      type:"GET",
      datatype: "html",
      cache: false,
      url:"nosotros.html",
      success:function(data){//lo que pasa cuando termina
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  },tiempoCarga);
  event.preventDefault();
  });
  //CARGA SECCION PRODUCTOS
  $("#productos").click(function(){
  $("#contenedor").html(imagenLoading);
  setTimeout(function(){
    $.ajax({//Inicio de llamado
      type:"GET",
      datatype: "html",
      cache: false,
      url:"productos.html",
      success:function(data){//lo que pasa cuando termina
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
      //LEE LOS DATOS DE LA TABLA DEL SERVIDOR
     $.ajax({
        type: "GET",
        dataType: 'JSON',
        cache: false,
        url: "http://web-unicen.herokuapp.com/api/group/47",
        success: function(data){
          for (var i = 0; i < data.information.length; i++) {//recorre los datos del servidor
            var datosTabla=(data.information[i]['thing']);//Trae los datos a una variable
            var objetoJson = JSON.parse(datosTabla);//Convierte los datos en un Json
              $("#cargarDesdeAjax").append("<tr><td>" +objetoJson.descripcion+"</td>"+"<td>"+"u$s"+objetoJson.precio+"</td>"+
              '<td><img src="'+objetoJson.imagen+'"alt="Producto'+ (i+1) +'"'+">"+"</td></tr>");//Pone el Json en la tabla, hace toda la magia!
          }
        },
        error: function(){
          $("#cargarDesdeAjax").html("<tr><td>Na hay productos que mostrar</td><tr>");
      }
    });
  },tiempoCarga);
  event.preventDefault();
  });
  //CARGA SECCION CONTACTO
  $("#contacto").click(function(){
  $("#contenedor").html(imagenLoading);
  setTimeout(function(){
    $.ajax({//Inicio de llamado
      type:"GET",
      datatype: "html",
      cache: false,
      url:"contacto.html",
      success:function(data){//lo que pasa cuando termina
        $("#contenedor").html(data)
      },
      error: function(){
        $("#contenedor").html(mensajeError);
      }
    });
  },tiempoCarga);
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
            $("#contenedor").html(imagenLoading);
            setTimeout(function(){
              $.ajax({//Inicio de llamado
                type:"GET",
                datatype: "html",
                url:"ingresodedatos.html",
                success:function(data){//lo que pasa cuando termina
                  $("#contenedor").html(data)
                },
                error: function(){
                  $("#contenedor").html(mensajeError);
                }
              });
            },tiempoCarga);
          }else{
          $("#incorrecto").html("Usuario Incorrecto");}

        });
      }
    }else
      $("#incorrecto").html("Ya intento demasiadas veces. Contacte a su administrador.");//si superaste las 3 intentos de usuario y clave
    event.preventDefault();
  });
});

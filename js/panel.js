//CATEGORIAS-->
function categorias(){
  $.ajax({
    method: 'GET',
    url:'api/categorias',
    datatype: 'JSON',
    success: function(categorias){
      categorias.forEach(function(categoria){
         var html = crearCategoria(categoria);
        $('#selectCategoria').append(html);
      });
    },
    error: function () {
      alert('Error Al Cargar Las Categorias');
    }
  });
}

function crearCategoria(categoria) {
  $.ajax({ url: 'js/templates/categorias.mst',
     success: function(template){
       var rendered = Mustache.render(template,categoria);
       $('#selectCategoriaC').append(rendered);
       $('#selectCategoriaM').append(rendered);
      }
    });
}
//PRODUCTOS-->
function productos(){
  $('#tablaProductos').html('');
  $.ajax({
    method: 'GET',
    url:'api/productos',
    datatype: 'JSON',
    success: function(productos){
      productos.forEach(function(producto){
         var html = crearProducto(producto);
        $('#tablaProductos').append(html);
      });
    },
    error: function () {
      alert('Error Al Cargar Los Productos');
    }
  });
}

function crearProducto(producto) {
  $.ajax({ url: 'js/templates/productos.mst',
     success: function(template){
       var rendered = Mustache.render(template,producto);
       $('#tablaProductos').append(rendered);
      }
    });
}

function agregarCategoria(categoria){
  $.ajax({
    method: "POST",
    dataType : "JSON",
    url:"api/categorias",
    processData: false,
    data: categoria,
    success:function(data){
      alert(JSON.stringify(data));
      $('#alertCategoria').html("Contenido agregado"+data);
    },
    error: function(){
      alert("No se pudo agregar la Categoria")
    }
  });
  categorias();
}

$(document).ready(function(){

  $('#crearProducto').click(function(){
    /*
    var datos={nombre:$('#nombreC').val},{descripcion:$('#descripcionC').val},{precio:$('#precioC').val},
      imagen:$('#imagenC').val(),categoria:$('#selectCategoriaC').val};  -->REHACER CON DATAFORM
      */
      $.ajax({
        method: "POST",
        dataType : "json",
        url:"api/productos",
        data: datos,
        success:function(data){
          $('#info').html("Contenido agregado")
        },
        error: function(){
        }
      });
      productos();
      event.preventDefault();
  });

  $('#addCategoria').click(function(){
    var datos={categoria:$('#nuevaCategoria').val()};
    agregarCategoria(datos);
    event.preventDefault();
  });

categorias();
productos();

});

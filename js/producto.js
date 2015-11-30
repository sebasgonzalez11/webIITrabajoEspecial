
//PRODUCTOS-->
function productos(){
  $('#tablaProductos').html('');
  $.ajax({
    method: 'GET',
    url:'api/producto',
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

function agregarProducto(){
  data = new FormData();
  var nombre = {'nombre':$('#nombreC').val()}
  var descripcion = {'descripcion':$('#descripcionC').val()}
  var precio = {'precio':$('#precioC').val()}
  var categoria={'categoria':$('#selectCategoriaC').val()}
  data.append('nombre',nombre['nombre']);
  data.append('descripcion',descripcion['descripcion']);
  data.append('categoria',categoria['categoria']);
  data.append('precio',precio['precio']);
  data.append('imagen',$('#imagenC')[0].files[0]);
  $.ajax({
    method: "POST",
    dataType : "JSON",
    url:"api/producto",
    processData: false,
    contentType:false,
    cache:false,
    data: data,
    success:function(data){
      productos();
      $('#alertProductoC').html("Producto agregado");
    },
    error: function(data){
        $('#alertProductoC').html("No se pudo agregar el Producto");
    }
  });
}

function deleteProducto(id){
  $.ajax({
    method: "DELETE",
    dataType : "JSON",
    url:"api/producto/"+id,
    success:function(data){
      productos();
      $('#alertDeleteProducto').html("Producto Borrado");
    },
    error: function(){
      $('#alertDeleteProducto').html("No se pudo borrar el Producto");
    }
  });
}

function modificarProducto(){
  var id=$('#idM').val();
  data = new FormData();
  var nombre = {'nombre':$('#nombreM').val()}
  var descripcion = {'descripcion':$('#descripcionM').val()}
  var precio = {'precio':$('#precioM').val()}
  var categoria={'categoria':$('#selectCategoriaM').val()}
  data.append('nombre',nombre['nombre']);
  data.append('descripcion',descripcion['descripcion']);
  data.append('categoria',categoria['categoria']);
  data.append('precio',precio['precio']);
  data.append('imagen',$('#imagenM')[0].files[0]);
  $.ajax({
    method: "POST",
    dataType : "JSON",
    url:"api/producto/"+id,
    processData: false,
    contentType: false,
    cache:false,
    data: data,
    success:function(data){
      productos();
      $('#alertModProd').html("Producto Modificado");
    },
    error: function(data){
        $('#alertModProd').html("Error al Modificar el Producto");
    }
 });
}

function ajax_complete(xhr){
  categorias();
  productos();
  switch (xhr.readyState) {
    case 4:
      $("#alertModProd").html("Categoria Modificada");
      break;
    default:
      $("#alertModProd").html("Categoria No Modificada");
      break;
  }
}

$(document).ready(function(){
  $('#btncrearProducto').click(function(){
    agregarProducto();
    event.preventDefault();
  });
  $('#btnDeleteProducto').click(function(){
    var id=$('#productoDelete').val();
    deleteProducto(id);
    event.preventDefault();
  });
  $('#btnModProd').click(function(){
    modificarProducto();
    event.preventDefault();
  });
productos();

});

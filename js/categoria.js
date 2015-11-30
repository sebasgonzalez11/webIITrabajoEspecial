//CATEGORIAS-->
function categorias(){
  $('#selectCategoriaC').html('');
  $('#selectCategoriaM').html('');
  $('#categoriaIDMod').html('');
  $('#categoriaIDDel').html('');
  $('#tablaCategoria').html('');
  $.ajax({
    method: 'GET',
    url:'api/categoria',
    datatype: 'JSON',
    success: function(categorias){
      categorias.forEach(function(categoria){
         var html = crearCategoria(categoria);
         var tabla = crearCategoriaTabla(categoria);
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
       $('#categoriaIDMod').append(rendered);
       $('#categoriaIDDel').append(rendered);
      }
    });
}

function crearCategoriaTabla(categoria) {
  $.ajax({ url: 'js/templates/categorias_tabla.mst',
     success: function(template){
       var rendered = Mustache.render(template,categoria);
       $('#tablaCategoria').append(rendered);
      }
    });
}

function agregarCategoria(categoria){
  data = new FormData();
  data.append('categoria',categoria['categoria']);
  $.ajax({
    method: "POST",
    dataType : "JSON",
    url:"api/categoria",
    processData: false,
    contentType:false,
    data: data,
    success:function(data){
      categorias();
      $('#alertCategoria').html("Contenido agregado");
    },
    error: function(){
      $('#alertCategoria').html("No se pudo agregar la Categoria");
    }
  });
}

function modificarCategoria(){
  var id=$('#categoriaIDMod').val();
  var data={'categoria':$('#modificarCategoria').val()};
  $('#deleteCategoria').html('');
  $.ajax({
    method: "PUT",
    dataType: "xml/html/script/json",
    url:"api/categoria/"+id,
    data: data,
    complete: ajax_complete
 });
}

function ajax_complete(xhr){
  categorias();
  productos();
  switch (xhr.readyState) {
    case 4:
      $("#alertModCategoria").html("Categoria Modificada");
      break;
    default:
      $("#alertModCategoria").html("Categoria No Modificada");
      break;
  }
}

function deleteCategoria(id){
  $.ajax({
    method: "DELETE",
    dataType : "JSON",
    url:"api/categoria/"+id,
    success:function(data){
      categorias();
      productos();
      $('#alertDelCategoria').html("Categoria Borrada");
    },
    error: function(){
      $('#alertDelCategoria').html("No se pudo borrar la Categoria");
    }
  });
}

$(document).ready(function(){
  $('#addCategoria').click(function(){
    var datos={categoria:$('#nuevaCategoria').val()};
    $('#nuevaCategoria').val('');
    agregarCategoria(datos);
    event.preventDefault();
  });
  $('#buttonModCategoria').click(function(){
    var datos={categoria:$('#modificarCategoria').val()}
    modificarCategoria(datos);
    event.preventDefault();
  });
  $('#buttonDelCategoria').click(function(){
    var id=$('#deleteCategoria').val();
    $('#deleteCategoria').val('');
    deleteCategoria(id);
    event.preventDefault();
  });

categorias();

});

function getInformationByGroup(){
  var grupo = $("#groupid")[0].value;
  $.ajax({
     type: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/group/" + grupo,
     success: function(data){
       var html = "";
       for (var i = 0; i < data.information.length; i++) {
         html += "Id: " + data.information[i]['_id'] + "</br>";
         html += "Grupo: " + data.information[i]['group'] + "</br>";
         html += "Informacion: " + data.information[i]['thing'] + "</br>";
         html += "--------------------- </br>";
       }
       $("#infoGroup").html(html);
     }
  });
  event.preventDefault();
}
function getInformationByItem(){
  var item = $("#itemid")[0].value;
  $.ajax({
     type: "GET",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/get/" + item,
     success: function(data){
       var html = "";
       html += "Id: " + data.information['_id'] + "</br>";
       html += "Grupo: " + data.information['group'] + "</br>";
       html += "Informacion: " + data.information['thing'] + "</br>";
       html += "--------------------- </br>";
       $("#infoItem").html(html);
     },
     error:function(data){
       console.log(data);
     }
  });
  event.preventDefault();

}
$("#guardarInformacion").on('click', function(event){
  var grupo = $("#grupo").val();
  var informacion = $("#descripcion").val();
  var precio = $("#precio").val();
  var imagen = $("#imagen").val();
  var info = {
    group: grupo,
    thing: ("{"+'"descripcion"'+":"+'"'+informacion+'"'+","+'"precio"'+":"+'"'+precio+'"'+","+'"imagen"'+":"+'"'+imagen+'"'+"}")
  };
  $.ajax({
     type: "POST",
     dataType: 'JSON',
     data: JSON.stringify(info),
     contentType: "application/json; charset=utf-8",
     url: "http://web-unicen.herokuapp.com/api/create",
     success: function(data){
       $("#guardarAlert").removeClass("alert-danger")
       $("#guardarAlert").addClass("alert-success")
       $("#guardarAlert").html("Informacion guardada con ID=" + data.information._id);
       console.log(data);
     },
     error:function(data){
       $("#guardarAlert").addClass("alert-danger")
       $("#guardarAlert").html("Error por favor intente mas tarde");
       console.log(data);
     }
  });
  event.preventDefault();
});
function deleteInformationByItem(){
  var item = $("#iddelete")[0].value;
  $.ajax({
     type: "DELETE",
     dataType: 'JSON',
     url: "http://web-unicen.herokuapp.com/api/delete/" + item,
     success: function(data){
       $("#infoItemDelete").addClass("alert-success")
       $("#infoItemDelete").html("Informacion Borrada ID: " + item);

     },
     error:function(data){
       console.log(data);
     }
  });
  event.preventDefault();

}

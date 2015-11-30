$(document).ready(function(){
  $("#logout").click(function(){
    $.ajax({
      type : "POST",
      dataType : "html",
      url:"index.php?action=formLogout",
      data: $(this).serialize(),
      success:function(data){
        location.reload();
      },
      error: function(){
      }
    });
    event.preventDefault();
  });
});

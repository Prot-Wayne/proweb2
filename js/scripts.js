

/*function zoom(id){

 img = document.getElementById(id);
 img.width = "352";
 img.height = "374";


}

function normal(id){
  img = document.getElementById(id);
  img.width = "152";
  img.height = "174";
}*/

//modal
$(document).ready(function(){
  $(".ver").click(function(){
    var id = $(this).attr('id');
    $.ajax({
      url:'../pages/modal.php',
      type:'post',
      data:{id:id},
      success:function(response){
        $("#zoom").html(response);
      }
    })
  })
})
//validaciones


$(document).ready(function(){
  $("#enviar").click(function(){
    var cedula = $("#ced").val();
    var tel = $("#tel").val();
    if(isNaN(cedula) || ced == ""){
      $("#msg").append("Escriba un número de documento válido");
      $("#msg").addClass("alert alert-danger mt-5");
      $("#ced").focus();
      return false;
    }
    if(isNaN(tel)){
      $("#msg").append("Escriba un número de teléfono válido");
      $("#msg").addClass("alert alert-danger mt-5");
      $("#ced").focus();
      return false;
    }
  })
})

$(document).ready(function(){
  $("#Ingresar").click(function(){
    var ced = $("#ced").val();
    var pass = $("#pass").val();

    if(ced == "" && pass == ""){
      $(location).attr('href', '../login.php');
    }
  })
})
///Validación login con ajax

$(document).ready(function(){
  $("#submit").click(function(e){
    e.preventDefault();

    var ced = $("#ced").val();
    var pass = $("#pass").val();


    var params = {
      "ced":ced,
      "pass":pass
    }

    $.ajax({
      url:"../pages/validar_ingreso.php",
      type:"post",
      data:params,
      beforeSend:function(){
        $("#submit").val('Iniciando sesión...');
      },
      success: function(response){
        if(response == "1"){
          $(location).attr('href', '../index.php');

        }else if(response == "2"){
          $("#msg2").html("<p class='alert alert-danger'>Contraseña incorrrecta</p>");
          $("#submit").val('Ingresar');

        }else{
          $("#msg1").html("<p class='alert alert-danger'>Cédula incorrrecta</p>");
          $("#submit").val('Ingresar');
        }
      },
      error: function(){
        $(location).attr('href', '../login.php');
      }
    })
  })
})

//Búsqueda de cédula para registro nuevo

$(document).ready(function(){
  $("#ced").change(function(){
    var ced = $(this).val();

    $.ajax({
      url:"validarCedula.php",
      type:"post",
      data:{ced:ced},
      success:function(response){
        if(response == "1"){
          $("#msg").html("<p class='alert alert-danger'>Usuario ya se ecuentra registrado</p>");
          $(this).focus();
        }else{
          $("#msg").html("");
        }

      }

    })
  })
})

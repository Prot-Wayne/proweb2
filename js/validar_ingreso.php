<?php include('../config/db.php') ?>
<?php
  $ced = $_POST['ced'];
  $pas = $_POST['pass'];

  $query = "select * from usuario where cedula = $ced";
  $result = $con->query($query);
  $usr = $result->fetch_object();



  if(mysqli_num_rows($result)>0){
    if(password_verify($pas,$usr->password)){
        //Header('Location:inicio_sesion.php?id='.$id.'&nom='.$nom);
        echo "1";/*"<script>
          window.location='inicio_sesion.php?id=$id&nom=$nom';
        </script>"*/;
    }else{
        //$res = "Contraseña Incorrecta";
      echo "2";/*"<script>
        //alert('Contraseña incorrecta');
        window.location='login.php?msg=$res';
      </script>"*/;

      //header('location:login.php?msg='.$res);

    }

  }else{
    //$res = "Usuario no encontrado";
    echo "3";/*"<script>
      //alert('Cédula incorrecta');
      window.location='login.php?msg=$res';
    </script>"*/;

    //header('location:login.php?msg='.$res);
  }
 ?>

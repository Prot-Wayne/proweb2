<?php include('../config/db.php') ?>
<?php
    $ced = $_POST['ced'];
    $nom = $_POST['nom'];
    $dir = $_POST['dir'];
    $tel = $_POST['tel'];
    $pass = $_POST['pass'];
    $pass_hash = password_hash($pass, PASSWORD_DEFAULT);

    $result = mysqli_query($con, "select * from usuario where cedula = '$ced'");

    if(mysqli_num_rows($result) == 1){
      $res = "Usuario se encentra registrado";
      echo "<script>
          window.location='formularioregistro.php?msg2=$res';
      </script>";

    }else{

      mysqli_query($con, "insert into usuario values ('$ced', '$nom', '$dir', '$tel', '$pass_hash')");
      $res = "Usuario registrado exitosamente, Ya puede iniciar sesión";
      echo "<script>
        window.location='login.php?msg2=$res';
      </script>";
      //Header('Location:../index.php');

    }

?>

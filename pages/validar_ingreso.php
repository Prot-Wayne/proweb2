<?php
  session_start();
  include('../config/db.php');
  
  $ced = $_POST['ced'];
  $pas = $_POST['pass'];

  $query = "select * from usuario where cedula = $ced";
  $result = $con->query($query);
  $usr = $result->fetch_object();

  if(mysqli_num_rows($result)>0){
    if(password_verify($pas,$usr->password)){

        $_SESSION['id'] = $usr->cedula;
        $_SESSION['nom'] = $usr->nombre;
        echo "1";

    }else{

      echo "2";
    }

  }else{

    echo "3";
  }
 ?>

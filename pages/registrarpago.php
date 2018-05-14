<?php include('../config/db.php') ?>
<?php
  session_start();
  if(!empty($_POST) && !empty($_SESSION['cart'])){

    $q1 = $con->query("insert into cart (cedula) values($_SESSION[id])");

    $cart_id = $con->insert_id;

    foreach($_SESSION['cart'] as $c){

      $q2 = $con->query("insert into cart_plantilla(plantilla_id, cart_id) values($c[p_id], $cart_id)");
      unset($_SESSION['cart']);
      $_SESSION['new_cart_id'] = $cart_id;
    }
  }
  $msg = "¡Compra exitosa!";
  /*$consulta =
  "SELECT u.nombre, p.nombre, c.fecha, c.id, SUM(p.precio)as Total
  FROM usuario as u JOIN cart as c on u.cedula=c.cedula JOIN cart_plantilla as cp on c.id=cp.cart_id JOIN plantilla as p on cp.plantilla_id=p.id
  WHERE u.cedula=$_SESSION[id] and c.id=$cart_id GROUP BY p.nombre ";
  $result=$con->query($consulta);
  $_SESSION['cartid'] = $cart_id;*/
  /*echo "<script>
    window.location='plantillas.php?msg=$msg';
  </script>";*/
  header('location:detallefactura.php');


 ?>

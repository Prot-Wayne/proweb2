<?php include('../config/db.php') ?>
<?php
  session_start();

  if(!empty($_SESSION['cart']) && !empty($_POST)){

    $qa = $con->query("insert into cotizacion (coticedula) values ($_SESSION[id])") ;

    $coti_id = $con->insert_id;
    foreach($_SESSION['cart'] as $c){

      $qb = $con->query("insert into cotizacion_plantilla(idcotizacionc, idplantillap) values($coti_id, $c[p_id])");
      unset($_SESSION['cart']);
    }

  }
  $msg = "Cotización enviada exitosamente";
  echo
  "<script>
    window.location='plantillas.php?msg=$msg';
  </script>";

 ?>

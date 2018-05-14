<?php
  include('../config/db.php');
  if(isset($_POST['id'])){
    $id =$_POST['id'];
    $query = "select * from plantilla where id=$id";
    $result = $con->query($query);
    $r=$result->fetch_array();

    echo "
      <img width='100%' src='../img/plantillas/$r[imagen_ppal]'>
      <p>Nombre: $r[pnombre]</p>
      <p>Descripción: $r[descripcion]</p>
      <p>Precio: $r[precio]</p>
    ";
  }
 ?>

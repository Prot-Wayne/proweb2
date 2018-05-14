<?php include('../templates/header.php'); include('../config/db.php'); ?>
  <h4>Compra exitosa</h4>
  <?php

  if(!empty($_SESSION['id']) && !empty($_SESSION['new_cart_id'])){
    $query = "SELECT u.nombre, p.pnombre, c.fecha, c.id, p.precio
    FROM usuario as u JOIN cart as c on u.cedula=c.cedula JOIN cart_plantilla as cp on c.id=cp.cart_id JOIN plantilla as p on cp.plantilla_id=p.id
    WHERE c.id=$_SESSION[new_cart_id]";
    $result = $con->query($query);
    $query2 = "select * from usuario where cedula=$_SESSION[id]";
    $result2 = $con->query($query2);
    $user = $result2->fetch_object();
    $sum =0;
    ?>
    
    <div class="row">
      <div class="col-md-4">
        <p class="font-weight-bold mt-5">Detalle Factura</p>
        <p><span class="font-weight-bold">Nombre:</span> <?php echo $user->nombre ?></p>
        <p><span class="font-weight-bold">Dirección:</span> <?php echo $user->direccion ?></p>
        <p><span class="font-weight-bold">Teléfono:</span> <?php echo $user->telefono ?></p>

        <table class="table-bordered" width='500px'>
          <tr class="bg-primary">
            <td class="text-white">Plantilla</td>
            <td class="text-white">Valor</td>
          </tr>
        <?php while($res = mysqli_fetch_array($result)): ?>
          <tr>
            <td><?php echo $res['pnombre'] ?></td>
            <td><?php echo number_format($res['precio']) ?></td>
          </tr>
          <?php $sum += $res['precio'] ?>
        <?php endwhile; ?>
        </table>
          <p class="font-weight-bold">Total a Pagar: <?php echo number_format($sum) ?></p>
          <button type="button" name="button" class="btn btn-success">Imprimir</button>
          <a class="btn btn-success" href="plantillas.php">Regresar</a>
        </div>

    </div>
    <?php
      }
     ?>


  <?php include('../templates/footer.php'); ?>

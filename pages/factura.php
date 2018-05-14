<?php include('../templates/header.php'); include('../config/db.php'); ?>
<?php
  $query = "SELECT u.nombre, p.pnombre, c.fecha, c.id, p.precio, p.id as p_id
  FROM usuario as u JOIN cart as c on u.cedula=c.cedula JOIN cart_plantilla as cp on c.id=cp.cart_id JOIN plantilla as p on cp.plantilla_id=p.id
  WHERE c.id=$_GET[id] ";
  $result = $con->query($query);
  $r = $result->fetch_array();
  $sum = 0;
 ?>
  <div class="row">
    <div class="col-md-8">
      <p> <span class="font-weight-bold">Factura Nro:</span> <?php echo $_GET['id'] ?></p>
      <p> <span class="font-weight-bold">Cliente:</span> <?php echo$r['nombre'] ?></p>
      <p> <span class="font-weight-bold">Fecha:</span> <?php echo $r['fecha'] ?></p>
      <table class="table table-hover table-bordered table-striped">
        <tr>
          <td>Código Plantilla</td>
          <td>Nombre Plantilla</td>
          <td>Valor</td>
        </tr>
      <?php foreach($result as $p): ?>
        <tr>
          <td><?php echo $p['p_id'] ?></td>
          <td><?php echo $p['pnombre'] ?></td>
          <td><?php echo number_format($p['precio']) ?></td>
        </tr>
        <?php $sum += $p['precio'] ?>
      <?php endforeach; ?>
      <tr>
        <td><span class="font-weight-bold">TOTAL:</span></td>
        <td></td>
        <td><span class="font-weight-bold"><?php echo number_format($sum) ?></span></td>
      </tr>
      </table>
      <a class="btn btn-primary" href="miscompras.php">Volver</a>
    </div>
  </div>
<?php include('../templates/footer.php') ?>

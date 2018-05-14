<?php include('../templates/header.php'); include('../config/db.php'); ?>
<?php
  $query = "SELECT u.nombre, p.pnombre, c.fecha, c.id, sum(p.precio) as total
    FROM usuario as u JOIN cart as c on u.cedula=c.cedula JOIN cart_plantilla as cp on c.id=cp.cart_id JOIN plantilla as p on cp.plantilla_id=p.id
    WHERE u.cedula=$_SESSION[id]
    GROUP BY c.id";
  $result = $con->query($query);
 ?>
  <h4 class="mt-5 mb-5">Mis compras</h4>
  <table class="table table-bordered table-striped thead-primary">
    <tr>
      <td>Nro Factura</td>
      <td>Fecha</td>
      <td>Total</td>
      <td>Detalle</td>
    </tr>
  <?php foreach($result as $r): ?>
    <tr>
      <td><?php echo $r['id']?></td>
      <td><?php echo $r['fecha']?></td>
     <td><?php echo $r['total'] ?></td>
      <td> <a href="factura.php?id=<?php echo $r['id'] ?>">ver</a> </td>
    </tr>
  <?php endforeach; ?>
  </table>
<?php include('../templates/footer.php') ?>

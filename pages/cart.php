<?php include('../templates/header.php') ?>
<?php include('../config/db.php');
  $sum = 0;
 ?>
<h3 class="mt-5">Carrito de Compras</h3>

<?php if(empty($_SESSION['cart'])): ?>
  <p class="alert alert-warning mt-5">El carrito está vacio</p>
  <?php else: ?>

<div class="row mt-5 mb-5">
  <div class="col-md-9">


      <table class="table table-responsive table-hover mt-5">
        <tr>
          <td>Codigo Plantilla</td>
          <td>Nombre Plantilla</td>
          <td>Precio</td>
        </tr>
    <?php foreach($_SESSION['cart'] as $c): ?>

      <?php
      $idc = $c['p_id'];
      $query = "select * from plantilla where id = $idc ";
      $result = mysqli_query($con, $query);
      $r = $result->fetch_object();
      ?>
          <tr>
          <td><?php echo $r->id ?></td>
          <td><?php echo $r->pnombre ?></td>
          <td><?php echo number_format($r->precio)  ?></td>
          <td><a class="" href="eliminardelcarro.php?id=<?php echo $idc ?>" title="Eliminar"><i class="fas fa-trash-alt"></i></a></td>
          <?php $sum += $r->precio ?>
        </tr>

  <?php endforeach; ?>
  </table>
  <form class="mt-5" action="cotizar.php" method="post">
    <input type="submit" name="cotizar" value="Cotizar" class="btn btn-success">
  </form>
  </div>
  <div class="col-md-3 justify-content-center">
    <h4 class="mt-5">Total a Pagar</h4>


    <p class="">Valor: <?php echo number_format($sum) ?></p>
    <form class="mt-5" action="registrarpago.php" method="post">
      <input type="submit" name="pagar" value="Pagar" class="btn btn-success">
    </form>
  </div>
</div>
<?php endif; ?>
<?php include('../templates/footer.php') ?>

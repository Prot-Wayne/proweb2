<?php include('../templates/header.php'); include('../config/db.php');?>
  <?php
    $item = $_POST['busqueda'];
    $result = $con->query("select * from plantilla where pnombre like '%".$item."'");
    if (mysqli_num_rows($result) > 0){
      $found = true;
    }else{
      $found = false;
    }
  ?>
  <?php if($found): ?>
  <?php foreach($result as $r): ?>
  <div class='row'>
    <div class="col-md-3">
      <div class="planilla mt-5">
        <img id="<?php echo $r['id'] ?>" class="img-thumbnail" width="152" height="174" src="../img/plantillas/<?php echo $r['imagen_ppal'] ?>" alt="" onmouseover="zoom(<?php echo $plantilla['id'] ?>);" onmouseout="normal(<?php echo $plantilla['id'] ?>)">
        <p class="font-weight-bold"><?php echo $r['pnombre'] ?></p>
        <p>Precio: <?php echo number_format($r['precio']) ?></p>
        <form class="" action="agregaracarrito.php" method="post">
          <div class="form-group">
            <input type="hidden" name="plantilla_id" value="<?php echo $r['id'] ?>">
          </div>
          <?php if(empty($_SESSION['id'])): ?>
          <input type="submit" name="Agregar" value="Agregar" class="btn btn-primary" disabled><br><br><br>
        <?php else: ?>
          <input type="submit" name="Agregar" value="Agregar" class="btn btn-success"><br><br><br>
        <?php endif; ?>
        </form>
        <hr>
      </div>
    </div>
    </div>
  <?php endforeach; ?>
<?php else: ?>
  <p class="alert alert-danger">Plantilla no encontrada</p>
<?php endif; ?>
<?php include('../templates/footer.php') ?>

<?php
  include('../config/db.php');
  $result = $con->query('select * from plantilla')//mysqli_query($con, $query);
 ?>
<?php include('../templates/header.php') ?>
    <h3 class="mt-5">Plantillas</h3>
    <?php if(!empty($_GET['msg'])): ?>
      <p id="msg" class="alert alert-success"><?php echo $_GET['msg'] ?></p>
    <?php endif; ?>
    <?php if(empty($_SESSION['id'])): ?>
      <p class="alert alert-warning mt-5">Debe iniciar sesión para cotizar y/o realizar pedido</p>
    <?php endif; ?>
    <div class="row mt-3 item-align-center">
      <?php foreach($result as $plantilla): ?>
        <div class="col-md-3">
          <div id="plantilla" class="plantilla mt-5">
            <img title="Click para ampliar" data-toggle="modal" data-target="#modalimg" id="<?php echo $plantilla['id'] ?>" class="img-thumbnail p-img ver" width="152" height="174" src="../img/plantillas/<?php echo $plantilla['imagen_ppal'] ?>" alt="" onmouseover="zoom(<?php echo $plantilla['id'] ?>)" onmouseout="normal(<?php echo $plantilla['id'] ?>)">
            <p class="font-weight-bold"><?php echo $plantilla['pnombre'] ?></p>
            <p>Precio: <?php echo number_format($plantilla['precio']) ?></p>
            <form class="" action="agregaracarrito.php" method="post">
              <div class="form-group">
                <input type="hidden" name="plantilla_id" value="<?php echo $plantilla['id'] ?>">
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
        <hr>
        <?php endforeach; ?>
    </div>
    <div class="modal fade" id="modalimg" tabindex="-1" role="dialog" aria-labelledby="modalimg" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="zoom">

          </div>
          <div class="modal-footer">

          </div>
        </div>
      </div>
    </div>
<?php include('../templates/footer.php') ?>

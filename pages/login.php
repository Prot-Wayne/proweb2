<?php include('../templates/header.php'); ?>
    <h4 class="text-center mt-5">Log in</h4>
    <div class="form mt-5">
      <?php if(!empty($_GET['msg2'])): ?>
        <?php echo "<p class='alert alert-success'>".$_GET['msg2']."</p>"; ?>
      <?php endif; ?>
      <form action="" method="post" >
          <div class="form-group mt-5">
              <label for="">Cédula</label>
              <input id="ced" type="text" name="ced" class="form-control" required>
              <span id="msg1"></span>
          </div>
            <div class="form-group mt-5">
                <label for="">Contraseña</label>
                <input id="pass" type="password" name="pass" class="form-control" required>
                <span id="msg2"></span>
            </div>
            <input id="submit" type="submit" value="Ingresar" class="btn btn-primary btn-block mb-5 mt-5">
        </form>
    </div>
<?php include('../templates/footer.php')?>

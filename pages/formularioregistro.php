<?php include('../templates/header.php')?>
    <h4 class="text-center mt5">Registrarse</h4>

    <div class="form mt5">
      <form action="ingresar.php" method="post" onsubmit="">
          <div class="form-group">
              <label for="">Cédula</label>
              <input type="number" name="ced" id="ced" class="form-control" required>
              <span id="msg"></span>
          </div>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nom" id="nom" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Dirección</label>
                <input type="text" name="dir" id="dir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Teléfono</label>
                <input type="number" name="tel" id="tel" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="">Contraseña</label>
                <input type="password" name="pass" class="form-control" required>
            </div>
            <input type="submit" id='enviar' value="Registrarse" class="btn btn-primary btn-block">
        </form>
    </div>
<?php include('../templates/footer.php')?>

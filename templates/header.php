<?php session_start() ?>
<?php
if (is_file("config/config.php")) {
  include('config/config.php');
}elseif (is_file("../config/config.php")) {
  include('../config/config.php');

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/scripts.js"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/solid.js" integrity="sha384-U0ZJ7q5xbT8hEoRqj61HzpvsqNOQ8bsHY2VqSRPqGOzjHXmmV70Aw+DBC/PT00p4" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/fontawesome.js" integrity="sha384-rttr/ldR2uHigckjTCjMDe47ySeFVaL3Q7xUkJZir56u8Z8h/XnHJXHocgyfb25F" crossorigin="anonymous"></script>
    <title>Tarea1Web.org</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="<?php echo ROOT_URL ?>index.php">webTemplates</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ?>index.php">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo ROOT_URL ?>pages/plantillas.php">Plantillas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contactenos</a>
      </li>
      <ul class="navbar-nav ml-auto ">
        <li class="nav-item" >
          <form class="form-inline" action="<?php echo ROOT_URL ?>pages/busqueda.php" method="post">
            <div class="form-group">
              <input type="text" name="busqueda" value="" class="form-control" placeholder="Buscar">
            </div>
            <div class="form-group">
              <input type="submit" name="Buscar" value="Buscar" class="btn btn-secondary">
            </div>
        </form>
      </li>
      </ul>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if (empty($_SESSION['id'])): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL ?>pages/login.php">Login</a>
        </li>
        <li class="nav-item ">
           <a class="nav-link" href="<?php echo ROOT_URL ?>pages/formularioregistro.php ">Registrarse</a>
        </li>
      <?php else: ?>
        <li class="nav-item">
          <?php if(!empty($_SESSION['nom'])): ?>
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="nav-link">Bienvenido: <?php echo $_SESSION['nom']  ?></span>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="http://localhost:8080/proweb2/pages/miscompras.php">Mis Compras</a>
                  <a class="dropdown-item" href="#">Mis Datos</a>
                </div>
            </div>
          <?php endif; ?>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://localhost:8080/proweb2/pages/cerrar_session.php">Cerrar Sesión</a>
        </li>
      <?php endif; ?>
    </ul>
  </div>
</nav>
<div class="container mt-5 mb-5">

  <?php if (!empty($_SESSION['cart'])): ?>
    <div class="float-right">
      <a class=" mb-5" href="http://localhost:8080/proweb2/pages/cart.php" title="Ir al Carrito de Compras"><i class="fas fa-shopping-cart"></i> <?php echo count($_SESSION['cart'])?></a>
    </div>
  <?php endif; ?>

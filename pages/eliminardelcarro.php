<?php
  session_start();
  if (!empty($_SESSION['cart'])) {

    $cart = $_SESSION['cart'];

    if(count($cart) == 1){
      unset($_SESSION['cart']);
    }else {

      $newcart = array();

      foreach ($cart as $c) {
        if($c['p_id'] != $_GET['id']){
          $newcart[] = $c;
        }

      }
      $_SESSION['cart'] = $newcart;

    }
      # code...
    }

  header('Location:cart.php');
 ?>

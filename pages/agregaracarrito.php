<?php session_start();?>
<?php include('../config/db.php') ?>
<?php
  if(isset($_POST)){
    if(isset($_POST['plantilla_id'])){
      if(empty($_SESSION['cart'])){
        $_SESSION['cart'] = array(array('cedula'=>$_SESSION['id'], 'p_id'=>$_POST['plantilla_id']));
      }else{
        $cart = $_SESSION['cart'];
        $repeated = false;

        foreach($cart as $c){
          if($c['p_id'] == $_POST['plantilla_id']){
            $repeated = true;
            break;
          }
        }
        if($repeated){
          echo "<script>Producto Repetido</script>";
        }else{
          array_push($cart,array('cedula'=>$_SESSION['id'], 'p_id'=>$_POST['plantilla_id']));
          $_SESSION['cart'] = $cart;
        }
      }
      Header('Location:plantillas.php');
    }
  }
 ?>

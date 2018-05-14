<?php
  include('../config/db.php');
  $ced = $_POST['ced'];
  $query = "select * from usuario where cedula=$ced";
  $result = $con->query($query);

  if(mysqli_num_rows($result) == 1){
    echo "1";
  }
 ?>

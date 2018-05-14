<?php
    $con = new mysqli('localhost','root','','proweb2');

    if(mysqli_connect_errno()){
        echo "Error al conectar ".mysqli_connect_errno();
    }

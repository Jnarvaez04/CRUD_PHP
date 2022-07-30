<?php

    include ('../model/conexion.php');

    $id = $_GET["id"];

    $eliminar = "DELETE  FROM clientes WHERE id_cliente = '$id'";
    $result = mysqli_query($conexion, $eliminar);

    if (isset($eliminar)){
        header ("location: ../tabla.php");
    }else {
        echo "no se elimino";
    }
?>
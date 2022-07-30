<?php

    $conexion = mysqli_connect('localhost', 'root', '', 'evaluacion');


    if (isset($conexion)) {
        // echo "conexion establecida";
    }else {
        echo "no se logo la conexion";
    }


?>
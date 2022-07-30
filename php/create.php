<?php

    include ("../model/conexion.php");


    $imagen = addslashes(file_get_contents($_FILES ['imagen'] ['tmp_name']));
    $nombre = $_POST ['nombre'];
    $cedula = $_POST ['cedula'];
    $correo = $_POST ['correo'];
    $contraseña = $_POST ['contraseña'];
    // $contraseña=hash('sha512',$contraseña);

    $registro = "INSERT INTO clientes (imagen, nombre, cedula, correo, contraseña) VALUES ('$imagen','$nombre','$cedula','$correo','$contraseña')";
    $resultado = mysqli_query($conexion, $registro);

    if (isset($registro)) {
        header ("location: ../login.php");
    }else {
        echo "registro fallido";
    }
?>
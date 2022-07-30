<?php

    include ('../model/conexion.php');


    $id = $_REQUEST['id'];


    $imagen = addslashes(file_get_contents($_FILES['imagen'] ['tmp_name']));
    $nombre = $_POST ['nombre'];
    $cedula = $_POST ['cedula'];
    $correo = $_POST ['correo'];
    $contraseña = $_POST ['contraseña'];


    $update = "UPDATE clientes SET imagen = '$imagen', nombre = '$nombre', cedula = '$cedula', correo = '$correo', contraseña = '$contraseña' WHERE id_cliente = '$id'";
    $resultado = mysqli_query($conexion, $update);

    if (isset($resultado)) {

        header ("location: ../tabla.php");
    }else {
        echo "no sirvio";
    }
?>


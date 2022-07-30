<?php
    include ('../model/conexion.php');
    session_start();
    $correo = $_POST ['correo'];
    $contraseña = $_POST ['contraseña'];

    $read = mysqli_query($conexion, "SELECT * FROM clientes WHERE correo = '$correo' and contraseña = '$contraseña'");
    $leer = mysqli_fetch_array($read);

    if (isset($leer)) {
        $_SESSION['iniciosesion'] = $correo;
        header ("location: ../tabla.php");
    }else {
        echo "Contraseña Incorrecta";
    }

?>
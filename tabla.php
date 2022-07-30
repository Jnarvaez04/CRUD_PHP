<?php

include('model/conexion.php');
session_start();

if(!isset($_SESSION['iniciosesion'])){
    echo "<script>alert('Debes iniciar sesion'); location= './login.php'; </script>";
    session_destroy();
    die();
}

$datos = "SELECT * FROM clientes";


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>
    <!-- Navbar -->
    <nav class=" bg-warning p-3 d-flex justify-content-between align-items-center">
        <div>
            <img src="./img/sena.png" alt="">
        </div>
        <div class="m-2">
            <a class="btn btn-danger" href="./php/close.php">Cerrar Sesión</a>
        </div>
    </nav>
    <!-- Contendor Principal -->
    <main class="d-flex justify-content-center flex-column align-items-center">
        <!-- Contenedor Titulo -->
        <div class="d-flex justify-content-center mt-5 mb-5">
            <h1>BIENVENIDO <?php echo $_SESSION['iniciosesion']?></h1>
        </div>
        <div class="container bg-light d-flex justify-content-end">
            <div>
                <a href="registro.php" class="btn btn-primary mb-2 text-white">Registrar</a>
            </div>
        </div>
        <!-- Contenedor Table -->
        <div class="container d-flex justify-content-center mb-5">
            <!-- Table -->
            <table class="table border border-warning rounded">
                <thead class="table-success">
                    <tr>
                        <th scope="col">ID_CLIENTE</th>
                        <th scope="col">IMAGEN</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">CÉDULA</th>
                        <th scope="col">CORREO</th>
                        <th scope="col">CONTRASEÑA</th>
                        <th colspan="2">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conexion->query("$datos") as $row) { ?>
                        <tr>
                            <td><?php echo $row['id_cliente'] ?></td>
                            <td><img height="50px" width="50px" src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']); ?>" /></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['cedula'] ?></td>
                            <td><?php echo $row['correo'] ?></td>
                            <td><?php echo $row['contraseña'] ?></td>
                            <td><a class="border border-success btn btn-success" href="actualizar.php?id=<?php echo $row["id_cliente"]; ?>">Actualizar</a></td>
                            <td><a class="border border-danger btn btn-danger" href="./php/delete.php?id=<?php echo $row["id_cliente"]; ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
    <!-- Footer -->
    <footer class="d-flex flex-direction-row bg-warning  align-items-center justify-content-evenly">
        <div>
            <h2>COPY-RIGHT</h2>
            <p>Todos los derechos reservados</p>
        </div>

        <div>
            <img src="" alt="">
            <h2>Contactanos</h2>
            <p>Telefono: 3215649056</p>
            <p>Direccion: Cll 40# 23 - 12 </p>
            <p>Palmira Valle del Cauca</p>
        </div>
    </footer>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>
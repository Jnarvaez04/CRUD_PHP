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

        <div>
            <a class="btn btn-success m-2" href="./login.php">Iniciar Sesión</a>
        </div>
    </nav>
    <!-- Contenedor Principal -->
    <main class="d-flex justify-content-center flex-column align-items-center mt-3 mb-3">
        <div class="container.registro col-4 border border-5 p-5 mb-5 rounded-3">
            <!-- Contenedor titulo -->
            <div class="d-flex flex-column justify-content-center align-items-center mb-3">
                <h1 class="text-center">REGISTRO DE USUARIOS</h1>
            </div>
            <!-- Formulario -->
            <form class="w-auto d-flex flex-column justify-content-center" action="./php/create.php" method="post" enctype="multipart/form-data">
                <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Foto de Pelfil</label>
                    <input type="file" class="form-control" id="selectfile" aria-describedby="emailHelp" name="imagen" style="display: none;">
                    <input type="button" class="form-control" value="Seleccionar Foto" name="imagen" onclick="document.getElementById('selectfile').click();">
                </div>
                <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
                </div>
                <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="exampleInputEmail1" class="form-label">Cédula</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="cedula">
                </div>
                <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="exampleInputPassword1" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="exampleInputPassword1" name="correo">
                </div>
                <div class="mb-3 d-flex flex-column justify-content-center align-items-center">
                    <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="contraseña">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
            </form>
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
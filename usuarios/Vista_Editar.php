<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Usuario</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="logo">
            <img src="https://i.ibb.co/r5krrdz/logo.png">
        </div>

        <?php
                        include "../config/Conexion.php";
                        $id = $_REQUEST['id'];

                        $Sql = "SELECT * FROM usuarios WHERE id = $id";
                        $resultado = $conexion->query($Sql);

                        $Fila = $resultado->fetch_assoc();
                       ?>
        

</nav>

    <div class="container">
    <form action="EditarUsuario.php?idEditar=<?php echo $Fila["id"]?>" method="POST" enctype="multipart/form-data">
        <h1 style="colors:black;">Modificar Usuario</h1>
        <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nombre" value="<?php echo $Fila['nombre']?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" value="<?php echo $Fila['email']?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" value="<?php echo $Fila['password']?>">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="../principal/usuarios.php" class="btn btn-info">Volver</a>
    </form>
    </div>
    </body>
    <html>
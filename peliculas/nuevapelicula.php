<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Pelicula</title>
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

        

</nav>

    <div class="container">
    <form action="agregarpelicula.php" method="POST" enctype="multipart/form-data">
        <h1 style="colors:black;">Agregar Pelicula</h1>
        <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="nombre">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Reparto</label>
        <input type="text" class="form-control" name="reparto">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Duracion</label>
        <input type="text" class="form-control" name="duracion">
    </div>

    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="imagen">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="../principal/peliculas.php" class="btn btn-info">Volver</a>
    </form>
    </div>
    </body>
    <html>
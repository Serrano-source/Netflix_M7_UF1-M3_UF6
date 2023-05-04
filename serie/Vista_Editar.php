<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modificar Serie</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="logo">
            <img href="../inicio.php" src="https://i.ibb.co/r5krrdz/logo.png">
        </div>

        <?php
                        include "../config/Conexion.php";
                        $id = $_REQUEST['id'];

                        $Sql = "SELECT * FROM series WHERE id = $id";
                        $resultado = $conexion->query($Sql);

                        $Fila = $resultado->fetch_assoc();
                       ?>
        

</nav>

    <div class="container">
    <form action="EditarSerie.php?idEditar=<?php echo $Fila["id"]?>" method="POST" enctype="multipart/form-data">
        <h1 style="colors:black;">Modificar Serie</h1>
        <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="titulo" value="<?php echo $Fila['titulo']?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nombre de la serie</label>
        <input type="text" class="form-control" name="nombre_serie" value="<?php echo $Fila['nombre_serie']?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Capitulo</label>
        <input type="text" class="form-control" name="capitulos" value="<?php echo $Fila['capitulos']?>">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Temporadas</label>
        <input type="text" class="form-control" name="temporadas" value="<?php echo $Fila['temporadas']?>">
    </div>
    <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>" alt=""></td>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="imagen" >
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="../principal/series.php" class="btn btn-info">Volver</a>
    </form>
    </div>
    </body>
    <html>
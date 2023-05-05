<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nueva Serie</title>
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
    <form action="agregarserie.php" method="POST" enctype="multipart/form-data">
        <h1 style="colors:black;">Agregar Serie</h1>
        <br>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="titulo" required>
        <?php if(!empty($tituloError)): ?>
        <span class="error"><?php echo $tituloError; ?></span>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Nombre de la serie</label>
        <input type="text" class="form-control" name="nombre_serie" required>
        <?php if(!empty($nombre_serieError)): ?>
        <span class="error"><?php echo $nombre_serieError; ?></span>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Capitulo</label>
        <input type="text" class="form-control" name="capitulos" required>
        <?php if(!empty($capitulosError)): ?>
        <span class="error"><?php echo $capitulosError; ?></span>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Temporadas</label>
        <input type="text" class="form-control" name="temporadas" required>
        <?php if(!empty($temporadasError)): ?>
        <span class="error"><?php echo $temporadasError; ?></span>
    <?php endif; ?>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Imagen</label>
        <input type="file" class="form-control" name="imagen" required>
        <?php if(!empty($imagenError)): ?>
        <span class="error"><?php echo $imagenError; ?></span>
    <?php endif; ?>
    </div>
    <div class="col-md-4">
    <button type="submit" class="btn btn-primary">Enviar</button>
    <a href="../principal/series.php" class="btn btn-info">Volver</a>
    <div>
    </form>
    </div>
    </body>
    <html>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Series</title>
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

        <ul>
            <li><a href="../inicio.php">Inicio</a></li>
            <li><a href="series.php">Series</a></li>
            <li><a href="peliculas.php">Películas</a></li>
            <li><a href="#">Mi lista</a></li>
            <li><a href="usuarios.php">Usuarios</a></li>
            <li><a href="#">Usuario</a>
                <ul>
                    <li><a href="../usuario.php">Perfil</a></li>
                    <li><a href="#">Configuración</a></li>
                    <li><a href="../logout.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="container">
        <br>
        <center>
            <h1 style="color:black;">Listado de series</h1>
        </center>
        <br>
        <div class="container">

            <a href="../serie/nuevaserie.php" class="btn btn-dark">Agregar serie</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Capitulos</th>
                        <th scope="col">Temporadas</th>
                        <th scope="col">Imagen</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        include "../config/Conexion.php";
                        $Sql = "SELECT * FROM series";
                        $resultado = $conexion->query($Sql);

                        while($Fila = $resultado->fetch_assoc()){?>
                    <tr>
                        <th scope="row"><?php echo $Fila['id']?></th>
                        <td><?php echo $Fila['titulo']?></td>
                        <td><?php echo $Fila['nombre_serie']?></td>
                        <td><?php echo $Fila['capitulos']?></td>
                        <td><?php echo $Fila['temporadas']?></td>
                        <td><img src="data:imagen/jpg;base64,<?php echo base64_encode($Fila['imagen'])?>" alt=""></td>
                        <td>
                            <a href="../serie/Vista_Editar.php?id=<?php echo $Fila['id']?>" class="btn btn-warning">Editar</a>
                            <a href="../serie/Eliminar_serie.php?id=<?php echo $Fila['id']?>" class="btn btn-danger">Eliminar</a>

                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>



        </div>
    </div>
</body>

</html>
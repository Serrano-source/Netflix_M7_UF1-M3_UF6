<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peliculas</title>
    <link rel="stylesheet" href="../estilos.css">
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav>
        <div class="logo">
            <a href="../inicio.php"><img  src="https://i.ibb.co/r5krrdz/logo.png"></a>
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
            <h1 style="color:black;">Listado de peliculas</h1>
        </center>
        <br>
        <div class="container">

            <a href="../peliculas/nuevapelicula.php" class="btn btn-dark">Agregar peliculas</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Reparto</th>
                        <th scope="col">Duracion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                <?php
    include "../config/Conexion.php";
    $num_rec_per_page = 5;

    // Obtiene la página actual y el registro inicial
    if (isset($_GET["page"])) { 
        $page = $_GET["page"]; 
    } else { 
        $page=1; 
    }; 
    $start_from = ($page-1) * $num_rec_per_page; 

    // Consulta SQL para obtener los registros de la página actual
    $Sql = "SELECT * FROM peliculas LIMIT $start_from, $num_rec_per_page";
    $resultado = $conexion->query($Sql);?>

                    <?php
                        include "../config/Conexion.php";
                        $Sql = "SELECT * FROM peliculas";
                        $resultado = $conexion->query($Sql);

                        while($Fila = $resultado->fetch_assoc()){?>
                    <tr>
                        <th scope="row"><?php echo $Fila['id']?></th>
                        <td><?php echo $Fila['nombre']?></td>
                        <td><?php echo $Fila['reparto']?></td>
                        <td><?php echo $Fila['duracion']?></td>
                        <td>
                            <a href="../peliculas/Vista_Editar.php?id=<?php echo $Fila['id']?>" class="btn btn-warning">Editar</a>
                            <a href="../peliculas/Eliminar_pelicula.php?id=<?php echo $Fila['id']?>" class="btn btn-danger">Eliminar</a>

                        </td>
                    </tr>
                </tbody>
                <?php } ?>

                    <!-- Código del paginador -->
    <div class="paginator">
        <?php
            // Obtiene el número total de registros
            $Sql = "SELECT COUNT(*) as total FROM peliculas";
            $resultado = $conexion->query($Sql);
            $row = $resultado->fetch_assoc();
            $total_records = $row['total'];

            // Calcula el número total de páginas
            $total_pages = ceil($total_records / $num_rec_per_page); 

            // Genera los enlaces del paginador
            echo "<a href='peliculas.php?page=1'>".'|<'."</a> "; // Goto 1st page  
            for ($i=1; $i<=$total_pages; $i++) { 
                echo "<a href='peliculas.php?page=".$i."'>".$i."</a> "; 
            }; 
            echo "<a href='peliculas.php?page=$total_pages'>".'>|'."</a> "; // Goto last page
        ?>

            </table>




        </div>
</div>

</div>

    </div>
</body>

</html>
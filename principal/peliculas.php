<!DOCTYPE html>
<html lang="es">

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Series</title>
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/browse.css">
</head>

<body>
<header class="d-flex space-between flex-center flex-middle">
        <div class="nav-links d-flex flex-center flex-middle">
            <a href="../">
                <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                <h2 class="second-logo-text red-color f-s-28">N</h2>
            </a>
            <a href="../inicio.php" class="nav-item home">Inicio</a>
            <a href="series.php" class="nav-item">Series</a>
            <a href="peliculas.php" class="nav-item">Películas</a>
            <a href="mylist.html" class="nav-item latest">Mi lista</a>
            <a href="usuarios.php" class="nav-item">Usuarios</a>
        </div>
        <div class="righticons d-flex flex-end flex-middle">
            <a href="search.html"><img src="../img/icons/search.svg" alt="search icon"></a>
            <div class="dropdown notification">
                <img src="../img/icons/notification.svg" alt="notificatio icon">
                <div class="dropdown-content">
                    <a href="#" class="profile-item d-flex flex-middle">
                        <img src="../img/icons/user2.png" alt="user profile icon" class="user-icon">
                        <span>You have new notification from <span>User 123</span></span>
                    </a>
                    <a href="#" class="profile-item d-flex flex-middle">
                        <img src="../img/icons/user1.png" alt="user profile icon" class="user-icon">
                        <span>You have new notification from <span>User 123</span></span>
                    </a>
                    <a href="#" class="profile-item d-flex flex-middle">
                        <img src="../img/icons/user4.png" alt="user profile icon" class="user-icon">
                        <span>You have new notification from <span>User 123</span></span>
                    </a>
                    <a href="#" class="profile-item d-flex flex-middle">
                        <img src="../img/icons/user3.png" alt="user profile icon" class="user-icon">
                        <span>You have new notification from <span>User 123</span></span>
                    </a>
                </div>
            </div>

            <div class="dropdown">
                <img src="../img/icons/user-image-green.png" alt="user profile icon" class="user-icon"> <span class="profile-arrow"></span>

                <div class="dropdown-content">
                    <div class="profile-links">
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="../img/icons/user1.png" alt="user profile icon" class="user-icon">
                            <span>Rajesh</span>
                        </a>
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="../img/icons/user2.png" alt="user profile icon" class="user-icon">
                            <span>Karan</span>
                        </a>
                        <a href="#" class="profile-item d-flex flex-middle">
                            <img src="../img/icons/user3.png" alt="user profile icon" class="user-icon">
                            <span>Pappy</span>
                        </a>
                        <a href="#" class="profile-item d-flex flex-middle" style="margin-bottom: 13px;">
                            <img src="../img/icons/user4.png" alt="user profile icon" class="user-icon">
                            <span>Denny</span>
                        </a>
                        <a href="#" class="profile-item last" >Manage Profiles</a>
                    </div>
                    <div class="line"></div>
                    <div class="links d-flex direction-column">
                        <a href="user-profile/home.html">Account</a>
                        <a href="#">Help Center</a>
                        <a href="/">Sign Out of Netflix</a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </header>
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
                        <th scope="col" style="color: white;">#</th>
                        <th scope="col" style="color: white;">Nombre</th>
                        <th scope="col" style="color: white;">Reparto</th>
                        <th scope="col" style="color: white;">Duracion</th>
                        <th scope="col" style="color: white;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "../config/Conexion.php";
                        $Sql = "SELECT * FROM peliculas";
                        $resultado = $conexion->query($Sql);

                        while($Fila = $resultado->fetch_assoc()){?>
                    <tr>
                        <th scope="row" style="color: white;"><?php echo $Fila['id']?></th>
                        <td style="color: white;"><?php echo $Fila['nombre']?></td>
                        <td style="color: white;"><?php echo $Fila['reparto']?></td>
                        <td style="color: white;"><?php echo $Fila['duracion']?></td>
                        <td style="color: white;">
                            <a href="../peliculas/Vista_Editar.php?id=<?php echo $Fila['id']?>" class="btn btn-warning">Editar</a>
                            <a href="../peliculas/Eliminar_pelicula.php?id=<?php echo $Fila['id']?>" class="btn btn-danger">Eliminar</a>

                        </td>
                    </tr>
                </tbody>
                <?php } ?>

            </table>




        </div>
</div>

</div>

    </div>
</body>

</html>
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
                                <span>Tienes una nueva notificación de <span>David</span></span>
                            </a>
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../img/icons/user1.png" alt="user profile icon" class="user-icon">
                                <span>Tienes una nueva notificación de <span>Isabella</span></span>
                            </a>
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../img/icons/user4.png" alt="user profile icon" class="user-icon">
                                <span>Tienes una nueva notificación de <span>Ramon</span></span>
                            </a>
                            <a href="#" class="profile-item d-flex flex-middle">
                                <img src="../img/icons/user3.png" alt="user profile icon" class="user-icon">
                                <span>Tienes una nueva notificación de <span>Julia</span></span>
                            </a>
                        </div>
                    </div>
        
                    <div class="dropdown">
                        <img src="../img/icons/user-image-green.png" alt="user profile icon" class="user-icon"> <span class="profile-arrow"></span>
        
                        <div class="dropdown-content">
                            <div class="profile-links">
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../img/icons/user1.png" alt="user profile icon" class="user-icon">
                                    <span>David</span>
                                </a>
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../img/icons/user2.png" alt="user profile icon" class="user-icon">
                                    <span>Isabella</span>
                                </a>
                                <a href="#" class="profile-item d-flex flex-middle">
                                    <img src="../img/icons/user3.png" alt="user profile icon" class="user-icon">
                                    <span>Ramon</span>
                                </a>
                                <a href="#" class="profile-item d-flex flex-middle" style="margin-bottom: 13px;">
                                    <img src="../img/icons/user4.png" alt="user profile icon" class="user-icon">
                                    <span>Julia</span>
                                </a>
                                <a href="#" class="profile-item last" >Manage Profiles</a>
                            </div>
                            <div class="line"></div>
                            <div class="links d-flex direction-column">
                                <a href="../users/usuario.php">Cuenta</a>
                                <a href="#">Centro de ayuda</a>
                                <a href="../logout.php">Salir de Netflix</a>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>  
        </div>
    </header>
    <div class="container">
    
        <br>
        <center>
            <h1 style="color:black;">Listado de usuarios</h1>
        </center>
        <br>
        <div class="container">

            <a href="../usuarios/nuevousuario.php" class="btn btn-dark">Agregar usuario</a>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" style="color: white;">#</th>
                        <th scope="col" style="color: white;">Nombre</th>
                        <th scope="col" style="color: white;">Email</th>
                        <th scope="col" style="color: white;">Password</th>
                        <th scope="col" style="color: white;">Acciones</th>
                    </tr>
                </thead>
                <tbody>

                

                    <?php
                        include "../config/Conexion.php";
                        $Sql = "SELECT * FROM usuarios";
                        $resultado = $conexion->query($Sql);

                        while($Fila = $resultado->fetch_assoc()){?>
                    <tr>
                        <th scope="row" style="color: white;"><?php echo $Fila['id']?></th>
                        <td style="color: white;"><?php echo $Fila['nombre']?></td>
                        <td style="color: white;"><?php echo $Fila['email']?></td>
                        <td style="color: white;"><?php echo $Fila['password']?></td>
                        <td>
                            <a href="../usuarios/Vista_Editar.php?id=<?php echo $Fila['id']?>" class="btn btn-warning">Editar</a>
                            <a href="../usuarios/Eliminar_usuario.php?id=<?php echo $Fila['id']?>" class="btn btn-danger">Eliminar</a>

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
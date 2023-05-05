<!DOCTYPE html>
<html class="no-js">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Netflix: vea programas de televisión en línea, vea películas en línea</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.1.0/css/font-awesome.min.css"
        integrity="sha256-t2kyTgkh+fZJYRET5l9Sjrrl4UDain5jxdbqe8ejO8A=" crossorigin="anonymous" />

    <!--para un estilo global-->
    <link rel="stylesheet" href="../assets/css/global.css">
    <!-- for footer and header-->
    <link rel="stylesheet" href="../assets/css/browse.css">
    <!--estilo personalizado-->
    <link rel="stylesheet" href="../assets/css/userprofile.css">

</head>

<body>
    <main id="mainContainer" class="p-b-40">

    <header class="d-flex space-between flex-center flex-middle">
        <div class="nav-links d-flex flex-center flex-middle">
            <a href="../">
                <h2 class="logo logo-text red-color f-s-28 m-r-25">NETFLIX</h2>
                <h2 class="second-logo-text red-color f-s-28">N</h2>
            </a>
            <a href="../inicio.php" class="nav-item home">Inicio</a>
            <a href="../principal/series.php" class="nav-item">Series</a>
            <a href="../principal/peliculas.php" class="nav-item">Películas</a>
            <a href="../principal/mylist.html" class="nav-item latest">Mi lista</a>
            <a href="../principal/usuarios.php" class="nav-item">Usuarios</a>
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
                        <a href="users/usuario.php">Cuenta</a>
                        <a href="#">Centro de ayuda</a>
                        <a href="logout.php">Salir de Netflix</a>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </header>



        <!--sección de perfil-->
        <section class="userprofile" id="userprofilecontainer">
            <div>
                <h2 class="heading f-s-40">
                Cuenta  
                </h2>
            </div>
            <div class="line"></div>
            <div class="membership d-flex flex-no-wrap space-between">
                <div class="left">
                    <h4 class="headline">
                    MEMBRESÍA Y FACTURACIÓN
                    </h4>
                    <button class="button">Cancelar membresía</button>
                </div>
                <div class="right">
                    <div class="d-flex space-between">
                    
                            
    <p>Nombre: David</p>
    <p>Email: dserrano150@gmail.com</p>

                        <div class="link">
                            <a href="#" class="link-item">
                            Cambiar el correo electrónico de la cuenta
                            </a>
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="password">
                        Contraseña: *********
                        </div>
                        <div class="link">
                            <a href="#" class="link-item">
                            Cambiar la contraseña
                            </a>
                        </div>
                    </div>

                    <div class="d-flex space-between">
                        <div class="email">
                        Teléfono : 978 741 578
                        </div>
                        <div class="link">
                            <a href="#" class="link-item">
                            Cambiar número de teléfono
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>

                    <div class="carddetail d-flex space-between flex-middle">
                        <div class="card">
                            <h4><span class="icon-visa">VISA</span> •••• •••• •••• 5350</h4>
                        </div>
                        <div class="link">
                            <a href="#" class="link-item">
                            Actualizar información de pago 
                            </a>
                            <a href="#" class="link-item">
                            Detalles de facturación
                            </a>
                        </div>
                    </div>
                    <div class="line"></div>

                    <div class="gift-card d-flex direction-column">
                        <a href="#" class="link-item">
                        Canjear tarjeta de regalo o código de promoción
                        </a>
                        <a href="#" class="link-item">
                        Dónde comprar tarjetas de regalo
                        </a>
                    </div>
                </div>  
            </div>
            <div class="line"></div>

            <!--DETALLES DEL PLAN-->
            <div class=" plan-details d-flex flex-middle space-between">
                <div class="left">
                    <h4 class="headline">DETALLES DEL PLAN</h4>
                </div>
                <div class="right d-flex space-between">
                    <p>Móvil</p>
                    <a href="#" class="link-item">Cambio de plan</a>
                </div>
            </div>
            <div class="line"></div>

            <!--AJUSTES-->
            <div class="settings d-flex ">
                <div class="left">
                    <h4 class="headline">AJUSTES</h4>
                </div>
                <div class="right d-flex direction-column">
                    <a href="#" class="link-item">Prueba de participación</a>
                    <a href="#" class="link-item">Administrar dispositivos de descarga</a>
                    <a href="#" class="link-item">Activar un dispositivo</a>
                    <a href="#" class="link-item">Actividad de transmisión reciente del dispositivo</a>
                    <a href="#" class="link-item">Cerrar sesión en todos los dispositivos</a>
                    <a href="#" class="link-item">Descarga tu información personal</a>
                </div>
            </div>
            <div class="line"></div>

            <!--parental control-->

            <div class="parental-control d-flex">
                <div class="left">
                    <h4 class="headline">PERFIL Y CONTROLES PARENTALES</h4>
                </div>
                <div class="right">
                    <div class="">
                        <div class="info-container d-flex flex-middle space-between">
                            <div class="name d-flex">
                                <img src="img/icons/user1.png" alt="user" class="user-icon" />
                                <div class="content">
                                    <p class="username">Rajesh</p>
                                    <p class="maturity">Todos los índices de madurez</p>
                                </div>
                            </div>
    
                            <div class="righticon">
                                <svg class="chevron-down" viewBox="0 0 18 18">
                                    <path fill="#aaa" d="M11.56 5.56L10.5 4.5 6 9l4.5 4.5 1.06-1.06L8.12 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="">
                        <div class="info-container d-flex flex-middle space-between">
                            <div class="name d-flex">
                                <img src="../img/icons/user2.png" alt="user" class="user-icon" />
                                <div class="content">
                                    <p class="username">Rajesh</p>
                                    <p class="maturity">Todos Clasificación de madurez</p>
                                </div>
                            </div>
    
                            <div class="righticon">
                                <svg class="chevron-down" viewBox="0 0 18 18">
                                    <path fill="#aaa" d="M11.56 5.56L10.5 4.5 6 9l4.5 4.5 1.06-1.06L8.12 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>

                    <div class="">
                        <div class="info-container d-flex flex-middle space-between">
                            <div class="name d-flex">
                                <img src="../img/icons/user3.png" alt="user" class="user-icon" />
                                <div class="content">
                                    <p class="username">Rajesh</p>
                                    <p class="maturity">Todos Clasificación de madurez</p>
                                </div>
                            </div>
    
                            <div class="righticon">
                                <svg class="chevron-down" viewBox="0 0 18 18">
                                    <path fill="#aaa" d="M11.56 5.56L10.5 4.5 6 9l4.5 4.5 1.06-1.06L8.12 9z"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="line"></div>
                    </div>
                </div>
                
                
            </div>
        </section>

        <!--sección de pie de página y menú fijo de pie de página móvil-->

        <footer class="mainfooter d-flex direction-column space-between" id=" footer">
            <div class="container footer-container flex-start">
                <div class="widgets d-flex space-between">
                    <div class="first-widget">
                        <ul>
                            <li class="list-item">Audio y Subtítulos</li>
                            <li class="list-item">Centro de Medios</li>
                            <li class="list-item">Privacidad</li>
                            <li class="list-item">Contacta con nosotros</li>
                        </ul>
                    </div>
                    <div class="second-widget">
                        <ul>
                            <li class="list-item">Centro de ayuda</li>
                            <li class="list-item">Cookie</li>
                            <li class="list-item">Trabajos</li>
                        </ul>
                    </div>
                    <div class="third-widget">
                        <ul>
                            <li class="list-item">Audiodescripción</li>
                            <li class="list-item">Relaciones con inversionistas</li>
                            <li class="list-item">Aviso Legal</li>
                        </ul>
                    </div>
                    <div class="forth-widget">
                        <ul>
                            <li class="list-item">Tarjeta de regalo</li>
                            <li class="list-item">Terminos de uso</li>
                            <li class="list-item">Información corporativa</li>
                        </ul>
                    </div>
                </div>
                <button class="button service">Código de servicio</button>
                <p class="copyright">@Copyright 2023 David Serrano, Inc.</p>
            </div>


        </footer>
        </div>


    </main>

    <div class="footer-navigation d-flex space-between">
        <a href="browse.html" class="nav-item active">
            <i class="fa fa-home" aria-hidden="true"></i> </br>
            <span>Casa</span>
        </a>
        <a href="search.html" class="nav-item">
            <i class="fa fa-search" aria-hidden="true"></i></br>
            Buscar
        </a>
        <a href="latest.html" class="nav-item">
            <i class="fa fa-film" aria-hidden="true"></i></br>
            Ultimo
        </a>
        <a href="user-profile/home.html" class="nav-item">
            <i class="fa fa-user" aria-hidden="true"></i></br>
            Cuenta
        </a>
    </div>






</body>

</html>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Disfruta de Netflix, películas y series en streaming en tu smart TV, consola, PC, Mac, móvil, tableta y más dispositivos."/>
    <title>Netflix España - Ver series en línea, ver películas en línea</title>
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/floating-labels/" >
    <link href="../assets/dist/css/bootstrap.css" rel="stylesheet" >
    <link href="floating-labels.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet" /> 
  </head>

  <body>
    <main class="container-fluid">
      <!---->
      <section id="backGround">
        <div class="container-fluid relative">
          <header>
            <img src="img/logo-Netflix.png" alt="Responsive image LOGO" class="img-fluid" />
            <button type="button" class="btn btn-danger"><a class="iniciar" href="login.php">Iniciar sesión</a></button>
          </header>
        </div>
        <div class="jumbotron jumbotron-fluid relative mt-5">
          <h1>Todas las peliculas y series que desees, y mucho más.</h1>
          <p class="lead">Disfruta donde quieras. Cancela cuando quieras</p>
          <form method="POST" action="signup.php"  class="form-signin needs-validation" novalidate >
            <div class="row no-gutters justify-content-center">
              <div class="col-12 first">
                <p> ¿Quieres ver algo ya? Escribe tu correo para crear una  suscripción a Netflix o reactivarla.</p>
              </div>                          
              <div class="col-12 col-lg-9 second form-label-group my-4">
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                maxlength="50" minlength="5" required>
                <div class="valid-feedback"> Perfecto. Sigue con el próximo paso!</div>
                <div class="invalid-feedback"> El correo es obligatorio. </div>
                <label for="inputEmail">Correo electrónico</label>
              </div>
              <div class="col-12 col-lg-3 third my-4">
                <button class="suscribe" type="submit" >Empezar<i class="arrow right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
<!--------------03 equal section-->
      <section>
        <div class="container my-5">
          <div class="row">
            <div class="col-12 col-lg-6 text-lg-left">
              <h2>Disfruta de Netflix en tu TV.</h2>
              <p> Smart TV, Playstation, Xbox, Chromecast, Apple TV, reproductores Blu-ray y muchos más.</p>
            </div>
            <div class="col-12 col-lg-6">
              <img src="img/television.png" alt="Responsive image television" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
<!---->
      <section>
        <div class="container revers my-5">
          <div class="row">
            <div class="col-12 col-lg-6 ml-6 order-first order-lg-last text-lg-left" >
              <h2>Descárgate tus series favoritas para verlas sin conexión.</h2>
              <p>Guarda tus títulos favoritos fácilmente para que siempre tengas algo para ver.
              </p>
            </div>
            <div class="col-12 col-lg-6">
              <img src="img/mobile.png" alt="Responsive image mobile" class="img-fluid" />
            </div>
          </div>
        </div>
      </section>
<!---->
      <section>
        <div class="container my-5">
          <div class="row">
            <div class="col-12 col-lg-6 text-lg-left">
              <h2>Disfruta en todas partes.</h2>
              <p>Reproduce en streaming todas las películas y series en tu móvil, tableta, ordenador y TV sin pagar más.
              </p>
            </div>
            <div class="col-12 col-lg-6">
              <img src="img/devices.png" alt="Responsive image device" class="img-fluid"/>
            </div>
          </div>
        </div>
      </section>
<!----------------------accordion-->
      <section>
        <div class="container">
          <h3>Preguntas frecuentes</h3>
          <div id="accordion" class="mb-5">
            <div class="card">
              <div class="card-header" id="headingOne">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" >
                  ¿Qué es Netflix?
                  <svg viewBox="0 0 26 26" class="svg-icon svg-closed rotated" focusable="true" >
                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                  </svg>
                </button>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion" >
                <div class="card-body">Netflix es un servicio de streaming que ofrece una amplia variedad de series, películas, títulos de anime, documentales
                  y otros contenidos premiados en miles de dispositivos conectados a internet.
                </div>
                <div class="card-body">
                  Puedes ver todo el contenido que quieras, cuando quieras y sin un solo anuncio por una tarifa mensual reducida. ¡Siempre hay algo nuevo que descubrir, y cada semana se añaden nuevas series y películas!
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" >
                  ¿Cuánto cuesta Netflix?
                  <svg viewBox="0 0 26 26" class="svg-icon svg-closed rotated" focusable="true" >
                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                  </svg>
                </button>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion" >
                <div class="card-body">
                  Disfruta de Netflix en tu smartphone, tableta, Smart TV,  ordenador o dispositivo de streaming, todo por una tarifa mensual fija. Planes desde 7,99 &#8364; a 15,99 &#8364; al mes. Sin cargos adicionales ni contratos.
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-header" id="headingThree">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  ¿Dónde puedo ver Netflix?
                  <svg viewBox="0 0 26 26" class="svg-icon svg-closed rotated" focusable="true">
                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                  </svg>
                </button>
              </div>
              <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                  Disfruta donde quieras y cuando quieras en un número ilimitado de dispositivos. Inicia sesión con tu cuenta de Netflix para  disfrutar al instante de todo el contenido de netflix.com  desde tu ordenador personal o en cualquier dispositivo  conectado a internet que ofrezca la aplicación de Netflix,  entre ellos, smart TV, smartphones, tabletas, reproductores multimedia de streaming y consolas de juegos.
                </div>
                <div class="card-body">
                  También puedes descargar tus series favoritas con la  aplicación de <abbr title="iPhone Operating System">iOS</abbr>, Android o  Windows 10. Utiliza las descargas para ver títulos dondequiera  que vayas y cuando no  dispongas de conexión a internet. Netflix siempre te acompaña.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <button  class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour"  >
                  ¿Cómo cancelo?
                  <svg viewBox="0 0 26 26" class="svg-icon svg-closed rotated" focusable="true" >
                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z"></path>
                  </svg>
                </button>
              </div>
              <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordion">
                <div class="card-body">
                  Netflix es flexible. Sin contratos liosos ni compromisos. Puedes cancelar fácilmente tu cuenta en línea con tan solo dos clics. Sin cargos por cancelación: activa o cancela tu cuenta en cualquier momento.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                  ¿Qué puedo ver en Netflix?
                  <svg viewBox="0 0 26 26" class="svg-icon svg-closed rotated" focusable="true" >
                    <path d="M10.5 9.3L1.8 0.5 0.5 1.8 9.3 10.5 0.5 19.3 1.8 20.5 10.5 11.8 19.3 20.5 20.5 19.3 11.8 10.5 20.5 1.8 19.3 0.5 10.5 9.3Z" ></path>
                  </svg>
                </button>
              </div>
              <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordion" >
                <div class="card-body">
                  Netflix dispone de una amplia biblioteca de originales de Netflix galardonados, títulos de anime, series de TV,  documentales, largometrajes y otros contenidos. Ve todo el contenido que quieras, cuando quieras.
                </div>
              </div>
            </div>
          </div>
          <form method="POST" action="registro.php" class="form-signin needs-validation" novalidate>
            <div class="row no-gutters justify-content-center">
              <div class="col-12 first">
                <p>¿Quieres ver algo ya? Escribe tu correo para crear una  suscripción a Netflix o reactivarla.</p>
              </div>                          
              <div class="col-12 col-lg-9 second form-label-group my-4">
                <input type="email" id="inEmail" class="form-control" placeholder="Correo electrónico" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
                maxlength="50" minlength="5" required>
                <div class="valid-feedback">Perfecto. Sigue con el próximo paso!</div>
                <div class="invalid-feedback">El correo es obligatorio. </div>
                <label for="inEmail">Correo electrónico</label>
              </div>
              <div class="col-12 col-lg-3 third my-4">
                <button class="suscribe" type="submit">Empezar<i class="arrow right"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
    </main>
    <!---footer---------->
    <footer class="page-footer font-small blue text-muted">
      <div class="container text-left">
        <div class="row justify-content-space-between">
          <div class="col-12 mt-5 mb-2">
            <p class="h5 text-capitalize">¿Preguntas? Llama al 900 943 249</p>
          </div>
          <hr class="clearfix w-100 d-md-none pb-3" />
          <div class="col-6 col-sm-4 col-md-3">
            <ul class="list-unstyled articles mb-4">
              <li>
                <a href="#">Preguntas frecuentes</a>
              </li>
              <li>
                <a href="#">Inversores</a>
              </li>
              <li>
                <a href="#">Formas de ver</a>
              </li>
              <li>
                <a href="#">Información corporativa</a>
              </li>
              <li>
                <a href="#">Originales de Netflix</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <ul class="list-unstyled articles mb-4">
              <li>
                <a href="#">Centro de ayuda</a>
              </li>
              <li>
                <a href="#">Empleo</a>
              </li>
              <li>
                <a href="#">Términos de uso</a>
              </li>
              <li>
                <a href="#">Contáctanos</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <ul class="list-unstyled articles mb-4">
              <li>
                <a href="#">Canjear tarjetas regalo </a>
              </li>
              <li>
                <a href="#">Privacidad</a>
              </li>
              <li>
                <a href="#">Prueba de velocidad</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-sm-4 col-md-3">
            <ul class="list-unstyled articles mb-4">
              <li>
                <a href="#">Zona de prensa</a>
              </li>
              <li>
                <a href="#">Compras tarjetas regalo</a>
              </li>
              <li>
                <a href="#">Preferencias de cookies</a>
              </li>
              <li>
                <a href="#">Avisos legales</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="dropdown">
          <button class="btn language dropdown-toggle text-left" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            <span class="globe"> &#127770;</span> Español</button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Español</a>
            <a class="dropdown-item" href="#">English</a>
          </div>
        </div>
        <p class="footer-copyright pt-5 pb-2 font-weight-lighter text-muted">
          Netflix España
        </p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"  crossorigin="anonymous" ></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>

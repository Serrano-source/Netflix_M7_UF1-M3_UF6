<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Conexión a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'netflix');


    // Verificar las credenciales del usuario
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            header('Location: inicio.php');
            exit;
        } else {
            echo "Contraseña incorrecta";
        }
    } else {
        echo "El correo electrónico no está registrado";
    }

    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link rel="stylesheet" href="estilos.css">
<link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
<title>Netflix: mira programas de TV en línea, mira películas en línea</title>
</head>
<body>
    <header class="showcase">
        

            <div class="logo">
                <img src="https://i.ibb.co/r5krrdz/logo.png">
            </div>
            <div class="showcase-content">
                <div class="formm">
                    <form action="login.php" method="post">
                        <h1>Iniciar Sesión</h1>
                        <div class="info">
                            <input class="email" type="email" placeholder="Correo electrónico o número de teléfono"> <br>
                            <input class="email" type="password" placeholder="Contraseña">
                        </div>
                        <div class="btn">
                            <button class="btn-primary" type="submit">Iniciar Sesión</button>
                        </div>
                        <div class="help">
                            <div>
                                <input value="true" type="checkbox"><label>Recuñerdame</label>
                            </div>

                            <a href="https://www.netflix.com/dz-en/LoginHelp">Necesitas ayuda ?</a>
                        
                        </div>

                    </form>
    
                </div>
                
                <div class="signup">
                    <p>Nuevo en Netflix ?</p>
                    <a href="signup.php">Regístrate ahora</a>
                </div>
                <div class="more">
                    <p>
                        Esta página está protegida por Google reCAPTCHA para garantizar que no sea un bot. <a href="#">Learn more.</a> 
                    </p>
                </div>


            </div>

       
            <footer>
                
                <div class="ftr-content">
                    <div class="contact">
                        <a href="#">Preguntas? Contacta nos.</a>
                    </div>
                    <div class="ftr">
                        <a href="#">Preguntas frecuentes</a>
                        <a href="#">Términos de uso</a>
                        <a href="#">Politica de Privacidad</a>
                    </div>
                    <div class="select">
                        <select>
                            <option>Español</option>
                            <option>Ingles</option>
                            <option>Françes</option>
                            
                        </select>
                    </div>
                </div>
               
            </footer>
       
    </header>


</body>
</html>



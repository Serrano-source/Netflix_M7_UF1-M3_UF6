<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Conexión a la base de datos
    $conn = mysqli_connect('localhost', 'root', '', 'netflix');

    // Insertar datos en la tabla de usuarios
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("Location: inicio.php");
        exit();
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conn);
    }

    if(isset($_POST['submit'])) {
        // Procesar el formulario de registro
    } else {
        // Mostrar el formulario de registro
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
<title>Netflix: Registro</title>
</head>
<body>

<header class="showcase">
        

            <div class="logo">
                <img src="https://i.ibb.co/r5krrdz/logo.png">
            </div>

            <div class="showcase-content">
                <div class="formm">
                    <form action="signup.php" method="post">
                        <h1>Registarse</h1>
                        <div class="info">
                        <input class="email" type="text" name="username" placeholder="Nombre"><br>
                        <input class="email" type="email" name="email" placeholder="Correo electrónico o número de teléfono"> <br>
                        <input class="email" type="password" name="password" placeholder="Contraseña">

                        </div>
                        <div class="btn">
                        <button class="btn-primary" type="submit" name="submit">Registrarse</button>
                        </div>
                        <div class="help">
                            <div>
                                <input value="true" type="checkbox"><label>Recuerdame</label>
                            </div>

                            <a href="https://www.netflix.com/dz-en/LoginHelp">Necesitas ayuda ?</a>
                        
                        </div>

                    </form>
    
                </div>

</header>


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


</body>
</html>
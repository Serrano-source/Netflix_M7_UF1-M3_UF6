<?php
    require 'database.php';

    if (!empty($_POST['email']) && !empty($_POST['password'])) {
        $sql = "INSERT INTRO usuarios (email, password) VALUES (:email, :password)'";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $_POST['email']);
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $stmt->bindParam(':password', $password);

        if ($stmt->execute()){
            $message = 'Successfull created new user';
        } else{
            $message = 'Sorry there must have been an issue creating your account';
        }
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
                    <form action="iniciarsesion.php" method="post">
                        <h1>Registarse</h1>
                        <div class="info">
                            <input class="email" type="email" placeholder="Correo electrónico o número de teléfono"> <br>
                            <input class="email" type="password" placeholder="Contraseña">
                        </div>
                        <div class="btn">
                            <button class="btn-primary" type="submit">Registarse</button>
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
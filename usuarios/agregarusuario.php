<?php

    include "../config/Conexion.php";

    $nombre = $_POST["nombre"];
    $email =$_POST["email"];
    $password =$_POST["password"];
    
    $es_admin = 1;
    $sql = "INSERT INTO usuarios (nombre, email, password, es_admin) VALUES ('$nombre','$email','$password', $es_admin)";


    $es_admin = 0;
    $sql = "INSERT INTO usuarios (nombre, email, password, es_admin) VALUES ('$nombre','$email','$password', $es_admin)";

   


    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: ../principal/usuarios.php');
    }else{
        echo "No se insertaron los datos";
    }
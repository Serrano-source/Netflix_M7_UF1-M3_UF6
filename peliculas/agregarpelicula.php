<?php

    include "../config/Conexion.php";

    $nombre = $_POST["nombre"];
    $reparto =$_POST["reparto"];
    $duracion =$_POST["duracion"];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]['tmp_name']));

    $sql = "INSERT INTO `peliculas` (nombre,reparto,duracion,imagen) VALUES ('$nombre','$reparto','$duracion','$imagen')";


    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: ../principal/peliculas.php');
    }else{
        echo "No se insertaron los datos";
    }
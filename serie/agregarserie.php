<?php

    include "../config/Conexion.php";

    // Seguimiento de los valores enviados
    $titulo = $_POST["titulo"];
    $nombre_serie =$_POST["nombre_serie"];
    $capitulos =$_POST["capitulos"];
    $temporadas =$_POST["temporadas"];
    $imagen = addslashes(file_get_contents($_FILES["imagen"]['tmp_name']));

    $sql = "INSERT INTO `series` (titulo,nombre_serie,capitulos,temporadas, imagen) VALUES ('$titulo','$nombre_serie','$capitulos','$temporadas','$imagen')";


    $resultado = $conexion -> query($sql);

    if ($resultado) {
        header('Location: ../principal/series.php');
    }else{
        echo "No se insertaron los datos";
    }


<?php

    include "../config/Conexion.php";

    $id = $_REQUEST['idEditar'];

    $nombre = $_POST["nombre"];
    $reparto =$_POST["reparto"];
    $duracion =$_POST["duracion"];
    
    if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"]) && $_FILES["imagen"]["error"] == 0) {
        $imagen = addslashes(file_get_contents($_FILES["imagen"]['tmp_name']));
    } else {
        $imagen = '';
    }
    

    $sql = "UPDATE peliculas SET
    nombre = '$nombre',
    reparto ='$reparto',
    duracion ='$duracion',
    
    imagen = '$imagen' WHERE id = $id";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: ../principal/peliculas.php');
    }else{
        echo "No se ha editado correctamente la pelicula";
    }



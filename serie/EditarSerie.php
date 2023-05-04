<?php

    include "../config/Conexion.php";

    $id = $_REQUEST['idEditar'];

    $titulo = $_POST["titulo"];
    $nombre_serie =$_POST["nombre_serie"];
    $capitulos =$_POST["capitulos"];
    $temporadas =$_POST["temporadas"];
    if (isset($_FILES["imagen"]) && is_uploaded_file($_FILES["imagen"]["tmp_name"]) && $_FILES["imagen"]["error"] == 0) {
        $imagen = addslashes(file_get_contents($_FILES["imagen"]['tmp_name']));
    } else {
        $imagen = '';
    }
    

    $sql = "UPDATE series SET
    titulo = '$titulo',
    nombre_serie ='$nombre_serie',
    capitulos ='$capitulos',
    temporadas = '$temporadas',
    imagen = '$imagen' WHERE id = $id";

    $resultado = $conexion->query($sql);

    if ($resultado) {
        header('Location: ../principal/series.php');
    }else{
        echo "No se ha editado correctamente la serie";
    }



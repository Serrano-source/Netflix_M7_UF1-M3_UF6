<?php
    include "../config/Conexion.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $stmt = $conexion->prepare("DELETE FROM peliculas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
        header("Location: ../principal/peliculas.php");
    } else {
        echo "No se ha eliminado el dato";
    }
?>

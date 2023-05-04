<?php
  session_start();
  require 'config/database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="shortcut icon" href="https://assets.nflxext.com/us/ffe/siteui/common/icons/nficon2016.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6D0itfPri4tjHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<nav>
<div class="logo">
                <img src="https://i.ibb.co/r5krrdz/logo.png">
            </div>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="principal/series.php">Series</a></li>
      <li><a href="principal/peliculas.php">Películas</a></li>
      <li><a href="#">Mi lista</a></li>
      <li><a href="principal/usuarios.php">Usuarios</a></li>
      <li><a href="#">Usuario</a>
        <ul>
            <li><a href="../usuario.php">Perfil</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="logout.php">Cerrar sesión</a></li>
  </ul>
</li>
    </ul>
  </nav>
</body>
</html>

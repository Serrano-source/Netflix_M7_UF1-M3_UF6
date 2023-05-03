<?php
  session_start();
  require 'database.php';

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
</head>
<body>
<nav>
<div class="logo">
                <img src="https://i.ibb.co/r5krrdz/logo.png">
            </div>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Series</a></li>
      <li><a href="#">Películas</a></li>
      <li><a href="#">Mi lista</a></li>
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

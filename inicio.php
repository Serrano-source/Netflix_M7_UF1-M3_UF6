<?php
session_start();

if(!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Conexión a la base de datos
$conn = mysqli_connect('localhost', 'root', '', 'netflix');

// Obtener los datos del usuario
$sql = "SELECT * FROM users WHERE id = $user_id";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo "Bienvenido " . $row['username'];
} else {
    echo "Error al obtener los datos del usuario";
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Welcome to you WebApp</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  
    <?php if(!empty($user)): ?>
      <br> Welcome. <?= $user['email']; ?>
      <br>You are Successfully Logged In
      <a href="logout.php">
        Logout
      </a>
    <?php else: ?>
      <h1>Please Login or SignUp</h1>

      <a href="logout.php">logo
    <?php endif; ?>
  </body>
</html>
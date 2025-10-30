<?php
session_start();

if (!isset($_SESSION["nome"]) || !isset($_SESSION["cor"])) {
    header("Location: 15d_login.php");
    exit();
}

$nome = $_SESSION["nome"];
$cor = $_SESSION["cor"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Perfil de <?php echo htmlspecialchars($nome); ?></title>
  <style>
    body {
      background-color: <?php echo htmlspecialchars($cor); ?>;
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 100px;
    }
    a {
      display: inline-block;
      margin-top: 20px;
      text-decoration: none;
      background-color: white;
      color: black;
      padding: 10px 20px;
      border-radius: 8px;
      border: 1px solid #333;
    }
  </style>
</head>
<body>
  <h1>Olá, <?php echo htmlspecialchars($nome); ?>!</h1>
  <p>Essa é sua página personalizada com sua cor favorita</p>
  <a href="15d_logout.php">Sair</a>
</body>
</html>

<?php
// Página restrita (15b_restrita.php)
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['usuario'])) {
  header("Location: 15a_sistema.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Página Restrita</title>
</head>
<body>
  <h2>Bem-vindo, <?php echo $_SESSION['usuario']; ?>!</h2>
  <p>Esta é uma página restrita, apenas para usuários logados.</p>
  <a href="15c_logout.php">Logout</a>
</body>
</html>

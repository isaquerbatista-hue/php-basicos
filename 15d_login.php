<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cor = $_POST["cor"];

    $_SESSION["nome"] = $nome;
    $_SESSION["cor"] = $cor;

    header("Location: 15d_perfil.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Login - Perfil Personalizado</title>
</head>
<body>
  <h2>Bem-vindo!</h2>
  <form method="post" action="">
    <label for="nome">Digite seu nome:</label><br>
    <input type="text" name="nome" id="nome" required><br><br>

    <label for="cor">Escolha sua cor favorita:</label><br>
    <select name="cor" id="cor" required>
      <option value="">Selecione...</option>
      <option value="blue">Azul</option>
      <option value="green">Verde</option>
      <option value="pink">Rosa</option>
      <option value="yellow">Amarelo</option>
      <option value="gray">Cinza</option>
    </select><br><br>

    <button type="submit">Entrar</button>
  </form>
</body>
</html>

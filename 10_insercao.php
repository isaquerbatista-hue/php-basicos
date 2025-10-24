<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Clientes</title>
</head>
<body>
  <form method="post" action="">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <button type="submit">Cadastrar</button>
  </form>

  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores enviados pelo formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    // Conecta ao banco de dados
    $servername = "127.0.0.1";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica a conexão
    if ($conn->connect_error) {
      die("Falha na conexão: " . $conn->connect_error);
    }

    // Insere o registro no banco de dados
    $sql = "INSERT INTO clientes (nome, email) VALUES ('$nome', '$email')";

    if ($conn->query($sql) === TRUE) {
      echo "<p style='color: green;'>Cliente cadastrado com sucesso!</p>";
    } else {
      echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
    }

    // Fecha a conexão
    $conn->close();
  }
  ?>
</body>
</html>

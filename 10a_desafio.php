<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Cadastro de Produtos</title>
</head>
<body>
  <form method="post" action="">
    <label for="nome">Produto :</label>
    <input type="text" name="nome" required><br>

    <label for="preco">Preço (R$) :</label>
    <input type="number" name="preco" step="0.01" required><br>

    <button type="submit">Cadastrar</button>
  </form>

  <?php
  // Verifica se o formulário foi enviado
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Recebe os valores do formulário
    $nome = trim($_POST['nome']);
    $preco = $_POST['preco'];

    // Validação dos campos
    if (empty($nome)) {
      echo "<p style='color: red;'>Erro: O nome do produto não pode estar vazio.</p>";
    } elseif (!is_numeric($preco) || $preco <= 0) {
      echo "<p style='color: red;'>Erro: O preço deve ser um número positivo.</p>";
    } else {
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

      // Insere o registro na tabela produtos
      $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

      if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
      } else {
        echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
      }

      // Fecha a conexão
      $conn->close();
    }
  }
  ?>
</body>
</html>


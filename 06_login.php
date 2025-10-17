<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login de Usuário</title>
</head>
<body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>
    </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
       
    $arquivo = fopen('usuarios.txt', 'r');
    $login_sucesso = false;

    while (($linha = fgets($arquivo)) !== false) {
list($usuario_arquivo, $senha_arquivo) = explode(';', trim($linha));

if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
    $login_sucesso = true;
    break;
}

    };
    fclose($arquivo);

    if ($login_sucesso){
        echo "<p style='color: darkgreen;'>Login realizado com sucesso, <br> Bem vindo(a) $nome!</p>";
    }
        else {
        echo "<p style='color: red;'>Usuario ou senha incorretos.</p>";
        }
    }

    
        ?>
</body>
</html>
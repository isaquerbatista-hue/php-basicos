<?php 
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $senha = $_POST['senha'];
        // Verificar se a senha está correta
        if ($senha == "123") {
            header("location: 4b_bem_vindo.php");
            exit();
        } else {
            // Exibe mensagem de erro
            $erro = "Senha incorreta. Tente novamente";
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de login</title>
</head>
<body>
    <h2>Digite a senha para continuar: </h2>
    <form action="4b_bem_vindo.php" method="post">
        <label for="senha">Senha</label>
        <input type="password" name="senha" id="senha" required>
        <button type="submit">Enviar</button>
    </form>

    <?php 
        if (isset($erro)) {
            echo "<p style='color: red;'> $erro </p>";
        }
    ?>
</body>
</html>
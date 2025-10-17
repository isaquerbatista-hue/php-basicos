<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de maioridade</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">
        <br>
        <label for="nascimento">Ano de nascimento: </label>
        <input type="number" name="nascimento" id="nascimento">
        <br>
        <button type="submit">Verificar</button>
    </form>

    <?php 
        if($_SERVER ['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $nascimento = $_POST['nascimento'];
            $idade = date('Y') - $nascimento;

            if ($idade >= 18) {
                $arquivo = fopen('log_acessos.txt', 'a');

                $linha = $nome . ';' . $nascimento . "\n";

                fwrite($arquivo, $linha);

                fclose($arquivo);
                echo "<p style='color: green;'>Acesso permitido, $nome!</p>";
                echo "Sua idade é $idade";
            } else {
                echo "<p style='color: red;'>Acesso negado, $nome!</p>";
                echo "Sua idade é $idade";
            }
        }
    ?>
</body>
</html>
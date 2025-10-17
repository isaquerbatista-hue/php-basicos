<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de usuário</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome">

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">
        <button type="submit">Cadastrar</button>
    </form>

    <?php 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nome = $_POST['nome'];
            $senha = $_POST['senha'];

            // Abre/cria arquivo (usuario.txt) para guardar os dados. O "a" vem de append (acrescentar)
            $arquivo = fopen('usuarios.txt', 'a');

            // Cria uma linha com nome e senha seperados por ;
            $linha = $nome . ';' . $senha . "\n";

            // Escreve a linha no arquivo
            fwrite ($arquivo, $linha);

            // Fecha o arquivo
            fclose($arquivo);
            echo "Usuário cadastrado com sucesso!";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required>

        <label for="tel">Telefone: </label>
        <input type="text" name="tel" id="tel">

        <button type="submit">Enviar</button>
    </form>

    <?php 
        // $_SERVER variável superglobal que guarda informações do servidor e o tipo de requisição feita
        if($_SERVER['REQUEST_METHOD'] ==  'POST') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $tel = $_POST['tel'];
        }

        echo "<h2> Dados recebidos:</h2> <br>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Telefone: $tel";
    ?>
</body>
</html>
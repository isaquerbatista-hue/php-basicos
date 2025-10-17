<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Formulário de Feedback</title>
</head>
<body>

<form method="post" action="">
<label for="nome">Nome: </label>
<input type="text" name="nome" required><br>

<label for="email">Email:</label>
<input type="email" name="email" required><br>

<label for="mensagem">Mensagem: </label>
<textarea name="mensagem" required></textarea><br>

<button type="submit">Enviar</button>
</form>

<?php
// Verifica se o formulário foi enviado
if ($_SERVER[ ' REQUEST_METHOD' ] == 'POST') {

// Recebe os valores enviados pelo formulário

$nome = $_POST[ 'nome' ];
$email = $_POST['email'];
$mensagem = $_POST [ 'mensagem' ];

// Valida se os campos não estão vazios e o email é válido

if ( !empty ($nome) & !empty ($email) & filter_var ($email, FILTER_VALIDATE_EMAIL) && !empty ($mensagem)) {

echo "<p style='color: green; '>Feedback enviado com sucesso !< /p>";

} else {
echo "<p style='color: red; '>Por favor, preencha todos os campos corretamente .< /p>";

}

}
?>

</body>
</html>

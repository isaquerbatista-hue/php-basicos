<?php 
// Montagem da URL:

// http://localhost/php-basicos/php-basicos(alunos)/2_opera_variaveis.php?num1=10&num2=5

// Variáveis que recebem valores pela URL (método GET)
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    // Verifica se os valores foram passados (isset)
    // E converte para numeros inteiros
    if (isset($num1)&&($num2)) {
        $num1 = (int) $num1;
        $num2 = (int) $num2;
    }
    $soma = $num1 + $num2;
    $sub = $num1 - $num2;
    $multi = $num1 * $num2;
    $div = $num1 / $num2;

    echo "A soma é $soma <br>";
    echo "A subtração é $sub <br>";
    echo "A multiplicação é $multi <br>";
    echo "A divisão é $div";
?>
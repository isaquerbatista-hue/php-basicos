<!DOCTYPE html>
<html>
<body>
    <!-- Título principal da página -->
    <h2>Calculadora Simples</h2>
    
    <?php
    // Verifica se foram enviados os dois números via GET
    if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
        // Converte os valores recebidos para inteiros
        $numero1 = (int)$_GET['numero1'];
        $numero2 = (int)$_GET['numero2'];
        
        // Realiza as operações matemáticas básicas
        $soma = $numero1 + $numero2;
        $subtracao = $numero1 - $numero2;
        $multiplicacao = $numero1 * $numero2;
        $divisao = $numero1 / $numero2;
        
        // Exibe o título dos resultados
        echo "<h3>Resultados:</h3>";
        
        // Mostra os resultados das operações
        echo "Soma: $soma <br>";
        echo "Subtração: $subtracao <br>";
        echo "Multiplicação: $multiplicacao <br>";
        echo "Divisão: $divisao <br><br>";
        
    }
    ?>

    <!-- Formulário para entrada dos números -->
    <form action="" method="GET">
        <!-- Campo para o primeiro número -->
        <div>
            <label for="numero1">Primeiro número:</label>
            <input type="number" id="numero1" name="numero1" required>
        </div>
        <br>
        <!-- Campo para o segundo número -->
        <div>
            <label for="numero2">Segundo número:</label>
            <input type="number" id="numero2" name="numero2" required>
        </div>
        <br>
        <!-- Botões do formulário -->
        <div>
            <!-- Botão para calcular (enviar o formulário) -->
            <button type="submit">Calcular</button>
            
            <!-- Botão para limpar resultados (recarrega a página sem parâmetros) -->
            <button type="button" onclick="window.location.href=window.location.pathname">
                Limpar Resultados
            </button>
        </div>
    </form>
</body>
</html>
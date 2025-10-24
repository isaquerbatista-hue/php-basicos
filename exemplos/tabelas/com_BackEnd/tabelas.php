<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "Senai@118"; // Substitua pela sua senha, se for diferente
$dbname = "tabelas"; // Substitua pelo nome do seu banco de dados

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Busca os dados da tabela de produtos
$sql_produtos = "SELECT nome, preco, estoque FROM produtos";
$result_produtos = $conn->query($sql_produtos);

$produtos = [];
if ($result_produtos->num_rows > 0) {
    while($row = $result_produtos->fetch_assoc()) {
        $produtos[] = $row;
    }
}

// Busca os dados da tabela de vendas
$sql_vendas = "SELECT trimestre, valor FROM vendas";
$result_vendas = $conn->query($sql_vendas);

$vendas = [];
if ($result_vendas->num_rows > 0) {
    while($row = $result_vendas->fetch_assoc()) {
        $vendas[] = $row;
    }
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tabelas em HTML</title>
    <link rel="stylesheet" href="tabelas.css">
</head>
<body>
    <h1>Trabalhando com Tabelas</h1>
    
    <h2>Tabela de Produtos</h2>
    <table class="tabela-produtos">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?php echo htmlspecialchars($produto['nome']); ?></td>
                <td>R$ <?php echo number_format($produto['preco'], 2, ',', '.'); ?></td>
                <td><?php echo htmlspecialchars($produto['estoque']); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    
    <h2>Tabela com Mesclagem</h2>
    <table class="tabela-vendas">
        <tr>
            <th colspan="2">Vendas por Trimestre</th>
        </tr>
        <?php 
        $total_semestre = 0;
        foreach ($vendas as $venda): 
        $total_semestre += $venda['valor'];
        ?>
        <tr>
            <td><?php echo htmlspecialchars($venda['trimestre']); ?></td>
            <td class="valor">R$ <?php echo number_format($venda['valor'], 2, ',', '.'); ?></td>
        </tr>
        <?php endforeach; ?>
        <tr class="total">
            <td rowspan="2">Total Semestre</td>
            <td class="valor">R$ <?php echo number_format($total_semestre, 2, ',', '.'); ?></td>
        </tr>
    </table>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Mostrar Produtos</title>
</head>
<body>

<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Executa a consulta MYSQL para buscar os dados da view 'vwskate'
$consulta = $cn->query('SELECT * FROM vw_skate');



while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC))
 {
    echo '<p>Modelo: ' . $exibe['nm_skate'] . '</p>';
    echo '<p>Descrição: ' . $exibe['vl_preco'] . '</p>';
    echo '<p>Preço: ' . $exibe['vl_preco'] . '</p>';
    echo '<p>Categoria: ' . $exibe['ds_categoria'] . '</p>';
    echo '<hr>';
}
?>
</body>
</html>

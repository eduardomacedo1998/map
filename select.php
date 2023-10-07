<?php
include_once "./class.php";

$selectdados = new Database("localhost", "root", "", "produtos");

// Obtém os dados do banco de dados
$dados = $selectdados->select("listadeprodutos");


// Exibir os dados em HTML
foreach ($dados as $produto) {
    echo '<div class="produto" style="border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">';
    echo '<img src="' . $produto['imgprod'] . '" alt="' . $produto['nomeprod'] . '" style="max-width: 200px; max-height: 200px;">';
    echo '<h2>' . $produto['nomeprod'] . '</h2>';
    echo '<p><strong>Descrição:</strong> ' . $produto['descricaoprod'] . '</p>';
    echo '<p><strong>Quantidade disponível:</strong> ' . $produto['quantidadeprod'] . '</p>';
    echo '<p><strong>Preço:</strong> $' . $produto['preco'] . '</p>';
    echo '</div>';
}
?>

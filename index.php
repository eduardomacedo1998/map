<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Caixa de busca -->
<input type="text" id="busca" placeholder="Digite o nome do produto">
<button onclick="buscar()">Buscar</button>

<h1> Produtos da loja </h1>

<?php   include "./select.php"; ?>


<script>
function buscar() {
    var termo = document.getElementById('busca').value.toLowerCase();
    var produtos = document.getElementsByClassName('produto');

    for (var i = 0; i < produtos.length; i++) {
        var nomeProduto = produtos[i].getElementsByTagName('h2')[0].innerText.toLowerCase();

        if (nomeProduto.includes(termo)) {
            produtos[i].style.display = 'block';
        } else {
            produtos[i].style.display = 'none';
        }
    }
}
</script>
    
</body>
</html>
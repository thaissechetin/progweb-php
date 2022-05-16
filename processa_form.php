<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>
<body>
<?php
$produto = $_POST["produto"];
$fabricantes = $_POST["fabricante"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$descricao = $_POST["descricao"];
?>

<h1>Dados do produto</h1>

<ul>
    <li>Produto: <?=$produto?></li>
    <li> Fabricante: <?=$id?></li>
    <li>Preço: R$ <?=$preco?></li>
    <li>Quantidade: <?=$quantidade?></li>
    <li>Descrição: <?=$descricao?></li>
</ul>
</body>
</html>
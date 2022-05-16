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

$produto = filter_input(INPUT_POST,"produto",FILTER_SANITIZE_SPECIAL_CHARS);
$nome_fabricante = $_POST["fabricante"];
$preco = filter_input(INPUT_POST, "preco",FILTER_SANITIZE_NUMBER_FLOAT);
$quantidade = filter_input(INPUT_POST, "quantidade",FILTER_SANITIZE_NUMBER_INT); 
$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);
?>

<h1>Dados do produto</h1>

<ul>
    <li>Produto: <?=$produto?></li>
    <li> Fabricante: <?=$nome_fabricante?> </li>
    <li>Preço: R$ <?=$preco?></li>
    <li>Quantidade: <?=$quantidade?></li>
    <li>Descrição: <?=$descricao?></li>
</ul>
</body>
</html>
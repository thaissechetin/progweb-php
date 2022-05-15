<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilosform.css">
    <title>Exercício</title>
</head>
<body>
<h1>Exercício Formulário HTML com PHP</h1>

<?php
$fabricantes = [
    "F0" => "Selecione o fabricante",
    "F1" =>"LG",
    "F2"=> "Apple", 
    "F3" =>"Sony",
    "F4" =>"Motorola"
];
?>


<main id="container">
    <form action="" method="POST">
        <div class="produto">
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
        </div>
    
    
        <div class="fabricante">
            <label for="Fabricante"> Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <?php
                foreach ($fabricantes as $id => $nome_fabricante){?>
                     <option value= <?=$id?>> <?=$nome_fabricante?> </option>
            <?php     
            } 
            ?>
            </select>
        </div>

        <div class="preco"> 
        <label for="preco">Preço:</label>
            <input type="number" step="0.01" name= "preco" id="preco" min="100" max="1000">

        </div>
    
        <div class="qtd">
            <label for="quantidade"> Quantidade:</label>
            <input type="number" name="quantidade" id="quantidade" min="1" max="50">
        </div>
    
        <div class="descricao">
            <label for="mensagem">Descrição:</label><br>
            <textarea name="descricao" id="descricao" cols="30" rows="6"></textarea>
        </div>


    
        <button type="submit" name="cadastrar">Cadastrar Produto</button>

    
    
    
    
    
    </form>
</main>


</body>
</html>
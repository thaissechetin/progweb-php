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

<p>1) Crie um novo arquivo e nele faça um formulário para cadastro (simulação) de produtos com os seguintes campos:</p>

<p>
    - Nome do produto (campo de texto)
    - Fabricante (`select` de opções com pelo menos 4 nomes de fabricantes)
    - Preço (campo de número com valor mínimo de 100 e máximo de 10000, além de suporte à 2 casas decimais para os centavos)
    - Quantidade (campo de número com valor mínimo de 0 e máximo de 50)
    - Descrição (área de texto)
</p>

<main id="container">
    <form action="" method="post">
        <div class="produto">
            <label for="produto">Produto:</label>
            <input type="text" name="produto" id="produto">
        </div>
    
    
        <div class="fabricante">
            <label for="Fabricante"> Fabricante:</label>
            <select name="fabricante" id="fabricante">
                <option>Selecione o fabricante</option>
                <option>Nestlé</option>
                <option> Cacau Show</option>
                <option>Kopenhagen</option>
                <option>Lindit</option>
            </select>
        </div>

        <div class="preco"> 
        <label for="produto">Preço:</label>
            <input type="number" name="produto" id="produto">

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
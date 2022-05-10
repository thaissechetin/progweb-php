<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

<form action="" method="post">
    <div>
        <label for="nome">Produto:</label>
        <input type="text" name="nome" id="nome">
    </div>


    <div>
        <label for="Fabricante"> Fabricante:</label>
        <select name="fabricante" id="fabricante">
            <option>Escolha o fabricante</option>
            <option>Nestlé</option>
            <option> Cacau Show</option>
            <option>Kopenhagen</option>
            <option>Lindit</option>
        </select>
    </div>

    <div>
        <label for="Quantidade"> Quantidade:</label>
        <input type="number" name="Quantidade" id="Quantidade" min="1" max="50">
    </div>

    <div>
        <label for="mensagem">Descrição</label><br>
        <textarea name="mensagem" id="mensagem" cols="30" rows="6"></textarea>
    </div>

    <button type="submit" name="cadastrar">Cadastrar Produto</button>




</form>


</body>
</html>
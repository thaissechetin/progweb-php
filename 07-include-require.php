<?php include "recursos.php";?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inclusão de recursos</title>
</head>
<body>
    <h1>Inclusão de Recursos</h1><hr>


    <h2><?=ESCOLA?></h2>
    <p>Estamos no curso de <?=$curso?></p>

    <ul>
        <?php foreach ($tecnologias as $tecnologia){ ?>
            <li><?=$tecnologia?></li>
       <?php } ?>
    </ul>

    <p>Chapolin Colorado tem 20 anos e é <b> <?= verificaIdade(20)?> </b>de idade.</p>
    <p>Chaves tem 8 anos e é <b> <?=verificaIdade(8)?></b> de idade.</p> <hr>

    <article>
        <h2>Conteúdo qualquer...</h2>
        <?php require "textos.php"?> <!-- ao errar o nome do arquivo para "texto", o require aponta o erro em todos os blocos vizinhos (estudar mais sobre) -->
    </article> <hr>

    <h2>Qualquer outra coisa</h2>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum ut, recusandae ullam veniam quibusdam quod illo, vel quo harum nulla iste fugit aperiam reprehenderit fugiat est consequatur itaque possimus explicabo?</p>
       

    
</body>
</html>
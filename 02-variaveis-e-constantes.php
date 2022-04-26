<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e constantes</title>

</head>
<body>
    <h1>Manipulando dados na memória</h1> <hr>


<?php
    /* Variáveis */
    $curso = "Programador Web";
    $ano = 2022;
    $preco = 2500.42;

    echo "<h2>Saída de dados completa</h2>";
    echo "<p>$curso</p>";
    echo "<div>$ano</div>";
    echo "<p><b>$preco</b></p>";
?> 

<hr>
<h2>Saída de dados intercalando HTML e PHP</h2>
<p> <?php echo $curso ?> </p>
<div> <?php echo $ano ?> </div>
<p> <b> <?php echo $preco ?></b></p><hr>

<!-- ou, sintaxe abreviada de saída -->
<p><?= $curso?></p>
<div><?=$ano?></div>
<p><b><?=$preco?></b></p>
<p>Estamos fazendo o curso de <?=$curso?> no ano de <?=$ano?></p><hr>


<?php
//constantes
//a RECOMENDAÇÃO É CRIAR CONSTANTES COM LETRAS MAIÚSCULAS
//forma 1:
    define("MEU_NOME", "Thaís");

    //Forma 2:
    const ESCOLA = "Senac Penha";
    
    echo "<p>".MEU_NOME."</p>";
    echo "<p>".ESCOLA."</p>";


?>

<p> <?=MEU_NOME?> </P>
<p> <?=ESCOLA?> </P>







</body>
</html>

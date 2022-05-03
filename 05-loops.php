<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops PHP</title>
</head>

<body>
    <h1>Loops (ou laços de repetição)</h1>
    <hr>

    <h2>While (enquanto)</h2>

    <?php
    $i = 1;
    while ($i <= 3) { //ou $i < 4
    ?>

        <p><?= $i ?></p>

    <?php
        $i++; //atualizar a variável de controle
    }
    ?>

    <h2> Do/While (faça/enquanto)</h2>

    <?php
    $j = 1;
    do {
    ?>

        <div style="border:solid 1px grey">
            <h3 style="color:red">Exemplo <?= $j ?></h3>
        </div>

    <?php
        $j++;
    } while ($j <= 5);
    ?>
    <hr>

    <h3>For (para)</h3>

    <?php

    for ($i = 1; $i <= 3; $i++) {
    ?>
        <p>Valor de i é <b><?= $i ?></b></p>

    <?php
    }
    ?>
    <hr>

    <h2>Exercício de array e loop</h2>
    <p>Crie um array contendo os 12 meses do ano.</p>
    <p>Usando o loop, faça o nome dos meses aparecer em uma lista ordenada.</p>

    <?php
    $meses = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
    ?>


    <!--Lista ol inicia e termina independentemente do php  -->
    <ol>
        <?php for ($i = 0; $i < count($meses); $i++) { ?>
            <!-- ÍTENS LISTA DEPENDEM DO PHP FOR -->
            <li><?= $meses[$i] ?></li>
        <?php } ?>
      
    </ol>
    <hr>

    <h2>foreach(para cada)</h2>
    <p>Loop exclusivo para arrays</p>

    <ol>
        <?php foreach ($meses as $mes) { ?>
            <!-- para cada mês dentro de meses -->
            <li> <?= $mes ?></li>
        <?php } ?>
    </ol>
    <hr>


 <h2>foreach com array associativo</h2>
 <p>Formados por pares de chave => valor </p>


    <?php
    $curso = [
        //chave (key) => valor (value)
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "UCS" => 5

    ];

    foreach ($curso as $key => $value){
    ?>

    <p> <?=$key?> - <?=$value?></p>

    <?php 
    }
    ?>








</body>

</htm


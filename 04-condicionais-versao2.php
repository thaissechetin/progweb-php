<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais versão 2 PHP</title>

    <style>
        .aprovado{color: blue;}
        .reprovado{color:red;}
        .recuperação{color: darkorange;}
    </style>

</head>
<body>
    <h1>Condicionais VERSÃO 2</h1><hr>

    <h2>Condicionais simples</h2>

    <?php
        $numero = 5;
        $outroNumero = 1;

        if ($numero > $outroNumero){//inicio do if
    ?>
            <p><?=$numero?> é maior que <?=$outroNumero?>!</p>
    <?php
        }//fim do if
    ?> 

    <h2>Condicional Composta</h2>

    <?php
        $nota1 =10;
        $nota2 = 6;
        $media = ($nota1 + $nota2)/2;
    ?>
        <p>Média: <?=$media?></p>

    <?php
        if ($media >=7){
    ?>     
            <p class="aprovado">Aprovado</p>
    <?php
        } else {
     ?>      
         </p class="reprovado">reprovado </p>
    <?php     
        }
    ?> 

    <h2>Encadeada</h2>

    <?php
    if ($media >=7){
    ?>
       <p class="aprovado"> Aprovado</p>

    <?php
    } elseif( ($media >= 6) && ($media < 7) ) { 
    ?>
         <p class="recuperação"> Recuperação </p>

    <?php
    } else {
    ?>
        <p class="reprovado">Reprovado </p>

    <?php
    }
    ?> 

    <hr>



    <h2>Switch/Case</h2>

    <?php
        $opcao = 1;

        switch($opcao){
            
            case 1: $assunto = "<p> Reclamação </p>"; break;
            case 2: $assunto = "<p> Elogios </p>"; break;
            case 3: $assunto = "<p> Informações </p>"; break;
            default: $assunto = "<p> Falar com um humano"; break;
        }

    ?>

         <p> <?=$assunto?></p>








</body>
</html>
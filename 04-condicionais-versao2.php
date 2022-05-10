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

    <?php
    $numero1 = 15;
    $numero2 = 15;
    
    if ($numero1 >= $numero2) { ?>
    <p> <?=$numero1?> é maior ou igual que <?=$numero2?>. </p>

    <?php
    }
    ?>

    <?php
    $nome1 = "Maria";
    $idade = "6";

    if ($nome1 !== $idade) { ?>
        <p> O nome dela é <?=$nome1?> e ela tem <?=$idade?> anos.</p>
    <?php
    }
    ?>

    <?php
    $n1 = 1;
    $n2 = 8;
    $media = ($n1 + $n2) / 2;

    if ($media >= 6) { ?>
        <p class="aprovado">O aluno tem média <?=$media?> e  está aprovado.</p>
    <?php
    } else {  ?>
        <p class="reprovado"> O aluno tem média <?=$media?> e está reprovado.</p>
    <?php
    }
    ?>

<hr>

<h2>Ingressos</h2>
<p>Estou concorrendo a uma promoção em duas rádios diferentes para ganhar ingressos para o show do Metallica. Se eu ganhar na rário 89FM, levarei ingressos para a Pista Prêmium. Se eu ganhar os ingressos pela rádio Kiss Fm, levarei ingressos para a Pista. Caso não ganhe nenhuma das duas promoções, não irei ao show. Farei uma condicional para dizer se irei no show e em qual setor irei, caso ganhe a promoção em uma das duas rádios. </p>

<?php
$kiss = FALSE;
$oitentaENove = TRUE;

 if ($oitentaENove == TRUE) { ?>
   <!--  <p>Uhuuul, eu vou ver Metallica na Pista Prêmium!!! </p>
 -->
 <?php 
 } elseif ($kiss == TRUE) { ?>
     <!-- <p>Uhuuuul, eu vou ver o Metallica na Pista!</p> -->
     
  <?php   
 } else { ?>
   <!-- <p> Não foi dessa vez...</p> -->

<?php
 }
?>

<hr>


<h3> Revisando o Switch/case</h3>

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
         <p> <?=$assunto?></p> <hr>


         <h1> Chegou a hora de votar na sua  banda  classic favorita!</h1>
         <p>É muito simples, basta digitar a opção desejada!</p>

         <ul class="list" style="list-style: none">
             <li>Digite 1 Para votar nos Stones</li>
             <li>Digite 2 para votar no Queen</li>
             <li>Digite 3 para votar no Led Zeppelin</li>
             <li>Digite 4 para votar nos Beatles</li>
             
         </ul>

         <?php
        $vote = 4;

        switch ($vote) {
            case 1: $banda = "<p> Rolling Stones </p>"; break;
            case 2: $banda = "<p> Queen </p>"; break;
            case 3: $banda = "<p> Led Zeppelin </p>";break;
            case 4: $banda = "<p> Beatles </p>"; break;
            default:$banda = "<p> Votaste Nulo, jovem Mancebo! </p>"; break;  
        }
         ?>

         <p> Patabéns! Você Votou na banda: <?=$banda?>Obrigada e até a próxima!</p>




















































    








</body>
</html>
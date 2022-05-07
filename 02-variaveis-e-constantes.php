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

<?php
    const SHOW_1 = "Kiss";
    const SHOW_2 = "Metallica";
    const SHOW_3 = "Guns n Roses";
    const SHOW_4 = "Iron Maiden";

    define("DATA_SHOW","04/09");
?>

<p>Esse ano vou fui no show do <?=SHOW_1?> e irei no show do <?= SHOW_4?>, que acontece no meu aniversário, no dia <?= DATA_SHOW?>.</p>

<?php
define("NOME_MAE", "Valquíria");
define("NOME_PAI", "Paulo");
?>

<p>Nome da Mãe: <?= NOME_MAE?></p>
<P>Nome do Pai: <?= NOME_PAI?></P>

<?php
define("BATERISTA" , "Phil Collins")
?>
<p> <?= BATERISTA?> foi o segundo baterista do Genesis e acabou se tronando o membro mais famoso e carismático da banda.</p>

<?php
define ("BANDA", "Metallica"); 
define("BAIXISTA", "Cliff Burton");
define("BAIXISTA_2", "Jason Newsted");
define("BAIXISTA_3", "Robert Trujillo");
?>

<p>O primeiro baixista do <?=BANDA?> foi <?= BAIXISTA?>.Ele morreu em um acidente com o ônibus da banda. Depois, <?=BAIXISTA_2?> assumiu a posição e permaneceu na banda durante toda a década de 90. O atual baixista do <?=BANDA?> é o <?=BAIXISTA_3?>. </p>

<?php
const BANDA_0 = "Megadeth";
const BANDA_1 = "Iron Maiden";
const BANDA_2 = "Metallica";
const BANDA_4 = "Led Zeppelin";

?>

<p> E as mais votadas de hoje são as bandas: <?= BANDA_0?>, <?=BANDA_1?>, <?=BANDA_2?> e <?=BANDA_4?>.Demais! </p>

<?php
const BANDAS_NACIONAIS = ["Legião Urbana", "Paralamas do Sucesso", "Capital Inicial"];
?>

<p>Minhas bandas favoritas são: <?= BANDAS_NACIONAIS[0]?> e <?= BANDAS_NACIONAIS[1]?>.</p>


































</body>
</html>

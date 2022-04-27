<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais PHP</title>

    <style>
        .aprovado{color: blue;}
        .reprovado{color:red;}
        .recuperação{color: darkorange;}
    </style>

</head>
<body>
    <h1>Condicionais</h1><hr>

    <h2>Condicionais simples</h2>

    <?php
        $numero = 5;
        $outroNumero = 1;

        if ($numero > $outroNumero){
            echo "<p> $numero é maior que $outroNumero!</p>";
        }
    ?> <hr>

    <h2>Condicional Composta</h2>

    <?php
        $nota1 = 6.5;
        $nota2 = 6;
        $media = ($nota1 + $nota2)/2;
        echo "<p>Média: $media </p>";

        if ($media >=7){
            // versão 1:usar aspas simples para não confundor com as aspas do php
            echo "<p class='aprovado'>Aprovado</p>"; 
        } else {
            //versão 2: usar barra invertida (escape, fazer o elemento ser encarado como texto)
            echo "<p class=\"reprovado\">reprovado </p>";
        }
    ?> <hr>

    <h2>Encadeada</h2>

    <?php
    if ($media >=7){
       echo "<p class='aprovado'>Aprovado</p>";
    } elseif( ($media >= 6) && ($media < 7) ) { 
        echo "<p class='recuperação'> Recuperação </p>";
    } else {
        echo "<p class='reprovado'>Reprovado </p>";
    }

    ?> <hr>

    <h2>Switch/Case</h2>

    <?php
        $opcao = 1;

        switch($opcao){
            case 1: $assunto = "<p> Reclamação </p>"; break;
            case 2: $assunto = "<p> Elogios </p>"; break;
            case 3: $assunto = "<p> Informações </p>"; break;
            default: $assunto = "<p> Falar com um humano"; break;
        }

        echo "<p>$assunto</p>";
    ?>








</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays no PHP</title>
</head>
<body>
    <h1>Usando Arrays no PHP</h1> <hr>

<?php
    //sintaxe com colchetes
    $alunos = ["Maria", "João", "Mônica"];

    //sintaxe usando função array()
    $cursos = array("HTML5", "React", "Node.js", "PHP");

?>

<h3>Acessando os dados</h3>
<ul>
    <li><?=$alunos[2]?></li>
    <li><?=$cursos[1]?></li>
</ul>
<hr>

<h2>Array Associativo</h2>

<?
    $curso = [
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "UCS" => 5

    ];
?>

<h3>Acessando os dados</h3>

<p>
    O curso de <?=$curso["nome"]?> tem <?=$curso["carga_horaria"]?> horas.
</p>

</body>
</html>
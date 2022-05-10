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

<?php
    $curso = [
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "UCS" => 5

    ];
?>

<h3>Acessando os dados</h3>

<p>
    O curso de <?=$curso["nome"]?> tem <?=$curso["carga_horaria"]?> horas
</p>

</body>
</html>


<h2>Funções de debug/depuração</h2>

<pre><?=print_r($cursos)?></pre>
<pre><?=var_dump($cursos)?></pre>

<h2>07/05/2022</h2>
<h2>Revisando Arrays</h2>

<h3>Array com sintaxe usando a função array </h3>


<?php
$guitar = array(" Bruce Springsteen", "Ritchie Sambora", "Keith Richards");
?>

<p>Meu guitarrista favorito é <?= $guitar[2]?>.</p>

<?php
$discos = array("Carvival Of Souls", "Biggers Banquet", "Black Album", "Revolver");
?>

<p>Meus ábuns favoritos na seguinte ordem:</p>
<ol>
    <li><?=$discos[1]?></li>
    <li><?=$discos[2]?></li>
    <li><?=$discos[0]?></li>
    <li><?=$discos[3]?></li>
</ol>

<pre><?= var_dump($discos)?></pre> <hr>
<pre><?= print_r($discos)?></pre> <hr>

<h2> Revisando Arrays Associativos</h2>

<?php
    $curso = [
        "nome" => "Programador Web",
        "carga_horaria" => 240,
        "unidade" => "Penha",
        "UCS" => 5
    ];
?>

<h3>Acessando os dados</h3>

<p>
    O curso de <?=$curso["nome"]?> tem <?=$curso["carga_horaria"]?> horas
</p>

<?php
$rolling_stones = [
    "vocalista" => "Mick Jagger",
    "guitarrista" => "Keith Richards",
    "guitarrista_1" => "Ronnie Wood",
    "baterista" => "Charlie Watts",
    "falecido_1" => "Brian Jones",
    "falecido_2" => "Charlie Watts"
];
?>

<p>A banda Rolling Stones é formada por: <?=$rolling_stones["vocalista"]?>, <?=$rolling_stones["guitarrista"]?>, <?=$rolling_stones["guitarrista_1"]?> e <?=$rolling_stones["baterista"]?>. Os membros já falecidos são <?=$rolling_stones["falecido_1"]?> e <?=$rolling_stones["falecido_2"]?>.</p> <hr>

<?php
$discos = [
    "disco_1" => "Master of Puppets",
    "disco_2" => "Black Album",
    "disco_3" => "Load",
    "banda" => "Metallica"
];
?>

<p><?=$discos["disco_1"]?>, <?=$discos["disco_2"]?> e <?=$discos["disco_3"]?> são álbuns do <?=$discos["banda"]?>.</p>

<?php
$dados = [
    "nome" => "Paulo",
    "idade" => "33",
    "profissao" => "analista de sistemas" 
]
?>

<p><?=$dados["nome"]?> tem <?=$dados["idade"]?> anos e trabalha como <?=$dados["profissao"]?>.</p> <hr>





































































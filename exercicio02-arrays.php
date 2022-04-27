<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02</title>

        <style>
            div {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                border: 2px solid blue;
                display: inline-block;
                margin: 15px;
                padding: 8px;
            }

            ul {
                list-style: none;
                text-align: justify;
            }

            .cliente1 , .cliente2 {
                 background-color: cadetblue;
                 border-radius: 8px;
                 padding: 6px;

            }  
           
        
    
         
        </style>
</head>
<body>
    <h1>Exercício 02</h1>
    <hr>

    <?php
        $cliente1 = ["Paulo Silva", 32, "paulo.silva@gmail.com", "Masc"];   
        $cliente2 = ["Ana Mendes", 40,  "ana.mendes@gmail.com", "Fem"];
    ?>

    <!-- acessando os dados -->

    <div>
        <ul class="cliente1">
            <li>Nome: <?=$cliente1[0]?></li>
            <li>E-mail: <a href="#"><?=$cliente1[2]?></a></li>
            <li>Idade: <?=$cliente1[1]?> anos</li>
        </ul>
        <hr>
        <ul class="cliente2">
            <li>Nome: <?=$cliente2[0]?></li>
            <li>E-mail: <a href=""><?=$cliente2[2]?></a></li>
            <li>Idade: <?=$cliente2[1]?> anos</li>
        </ul>
    </div>



</body>
</html>
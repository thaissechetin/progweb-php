<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03</title>
</head>
<body>
    <h1>Exercício 03:</h1>

    <?php
        $salarioAtual = 500;
        

    
     if ($salarioAtual< 500) {
         $reajuste = $salarioAtual * 1.15;
     } if ($salarioAtual <= 1000) {
         $reajuste = $salarioAtual *1.10;
     } else {
        $reajuste = $salarioAtual * 1.05;
     }

     
     echo "<p> O salário atual é $salarioAtual.</p>";
     echo "<p>O salário com reajuste é de $reajuste.</p>"
     

    
    ?>


</body>
</html>
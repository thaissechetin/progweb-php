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
        $salario = 15000;
        $reajuste = ""; // Declarar a variável inicialmente é algo opcional em PHP. Em JS é obrigatório declarar.
    

     if ($salario < 500) {
         $reajuste = $salario * 1.15;
     } elseif ($salario <= 1000) {
         $reajuste = $salario *1.10;
     } else {
        $reajuste = $salario * 1.05;
     }

    
     
     echo "<p> O salário antes do reajuste é $salario. O salário reajustado é $reajuste.</p>";
     //ou

     ?>


     <p>O salário antigo é R$<?=number_format($salario, 2 , ",", ".")?>. 
        O salário atual é de R$<?=number_format($reajuste, 2 , ",", ".")?>.</p>
     <!-- Esta forma é mais recomendada como boa prática. -->
    

     <!-- 
         number_format (
             valor,
             quantidade de casas decimais,
             "separador de casa decimal", 
             "separador de milhar"
         )
      -->
     
     
     

    
    


</body>
</html>
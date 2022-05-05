<?php
/* Parte 1: identificar o arquivo aberto 
$_SERVER['PHP_SELF'] -> traz os dados completos do endereço
basename($_SERVER['PHP_SELF']) -> extrai apenas o nome.extensão */
$pagina = basename($_SERVER['PHP_SELF']);
echo $pagina;

/* PARTE 2: CONDICIONAL PARA AVALIAR QUAL PAGINA ESRÁ ABERTA  E DEFINOR QUAL TÍTULO USAR */
switch($pagina){
    case 'index.php':$titulo ="Página Inicial";break;
    case 'produtos.php':$titulo ="Produtos";break;
    case 'servicos.php':$titulo = "Serviços";break;
    default: $titulo = "contato";break;
}
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PARTE 3: COLOCAR A VARIÁVEL NO TITLE -->
    <title> <?=$titulo?> Site XYZ</title>
    <link rel="stylesheet" href="css/estilos.css">
    
</head>
<body>
    <header>
        <h1>Site XYZ</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="produtos.php">Produtos</a>
            <a href="servicos.php">serviços</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
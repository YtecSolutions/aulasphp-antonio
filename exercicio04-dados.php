<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 04 (Dados)</title>
</head>
<body>
<h1>Exercício 04 (dados/processamento)</h1>
<hr>
<?php 
$produto = $_POST["produto"];
$fabricante = $_POST["fabricante"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
?>
    <ul>
<li>produto:<?=$produto?></li>

<li>fabricante: <?=$fabricante?></li>

<li>preco:<?=number_format($preco, 2, ',', '.')?></li> 

<li>descricao: <?=$descricao?></li>

</ul>




</body>
</html>
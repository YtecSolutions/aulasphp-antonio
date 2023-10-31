<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays (vetores ee matrizes)</h1>
    <hr>
    <h2>Arrays numéricos/indexados</h2>

    <?php
// Declarando arrays
$bandas = ["Rush","Slayer", "PHP","Design",
"Iron Maiden"];
$cursos = ["HTML5","PHP", "Design","JS"];

//Declarando como constante:

define("UNIDADES_SESC",["Belenzinho","Bertioga"]);

const UNIDADES_SENAC = ["Penha","Tatuapé","São Miguel","Itaquera"];
?>

<h3>Saída de dados de arrays</h3>

<ul>

<li>Bandas que mais gosto: <?=$bandas[0] ?></li>

<li>Assunto estudado: <?=$cursos[1] ?></li>

<li>Unidade SENAC: <?=UNIDADES_SENAC[0]?> </li>

<li>Unidade SESC: <?= UNIDADES_SESC[1]?> </li>


<!-- Mini-exercicios  -->
<!-- -Mostre em que unidade do Senac estamos  -->
<!-- -Mostre os Sesc que fica no litoral -->

</ul>
<hr>

<h2>Array associativo</h2>

<?php
$livro =[
"titulo" => "Senhor dos Anéis",
"autor" => "J.R.R. Tolken",
"ano" => 1954,
"personagens" => ["Frodo", "Legolas"]
];

//outra sintaxe para Array associativo

$filme = array(
    "titulo" => "Velozes e Furiosos",
    "genero" => "Ação"
    
);
?>
<h3>Saída de dados (array associativo)</h3>
<p>Livro: <?=$livro["titulo"]?></p>

<p>O cara que usa flechinhas: <?=$livro["personagens"][1]?></p>
<hr>

<h3>Comandos para analisar a estrutura de arrays: print_r() e var_dump()</h3> 


<!-- Saídas sem formatação -->
<?=print_r($bandas)?>
<br><br>
<?=var_dump($bandas)?>

<pre><?=print_r($bandas)?></pre>
<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($livro)?></pre>

</body>
</html>



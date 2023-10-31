<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicionais IF ELSE </title>
<style>
    
.repor{
    background-color: yellow;
}
.urgente{
    background-color: vermelho;
}

.normal{
     background-color:blue;
}
</style>


</head>
<body>
    <h1>Condicionais</h1>
    <hr>

<h2>Simples (Não tem else) </h2>

<?php

$numero = 100;

if($numero >20){

    echo "<p>$numero é maior que 20. </p>";
}

?>

<h2>Composta (if/else)</h2>

<?php

//Controle de estoque
$produto = "Ultrabook Dell";
$qtdEmEstoque= 010;// o que temos no momento
$qtdCritica = 2; //minimo necessário
?>
<h3>Produto: <?=$produto?></h3>
<h4>Estoque: <?=$qtdEmEstoque?></h4>
<!--  -->
<?php
// Se a quantida em estoque for 
if($qtdEmEstoque<$qtdCritica){

echo "<p class='repor'>É necessário comprar/repor</p>";

//condicional SIMPLES /ANINHADA
if($qtdEmEstoque===0){
   echo "<p class='urgente'>URGENTE</p>";
}

}

else{

    echo "<p class='normal'>O Estoque está normal</p>";
}
?>
</body>
</html>
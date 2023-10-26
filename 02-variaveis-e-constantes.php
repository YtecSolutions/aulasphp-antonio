<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis e Constantes</title>
</head>
<body>
    <h1>Variáveis e Constantes</h1>

<?php
// Variáveis
$curso = "Programador Web";
$ano = 2023;
$area= "Back-End";

//Formas de saídas COMPLETAS VIA PHP

//Estamos no Programador Web em 2023
echo "<p>Estamos no $curso em $ano<p/>";
echo '<p>Estamos no $curso em $ano<p/>'; // vai aparecer uma string
echo '<p>Estamos no'.$curso.'em'.$ano.'<p/>';
echo "<p>Estamos no".$curso."em".$ano."<p/>";

?>
<hr>
<!-- Forma de saída ABREVIADA/SIMPLICIFCADA -->
<p>Estamos no <?=$curso?> em <?=$ano?> </p>

<hr>


<?php
//Constantes
define("AUTOR", "Antonio Ramos Amorim");

//Forma moderna,atual
const EMPRESA= "ABC Tecnologia";
const ANO_FUNDACAO= 2000;
?>
<p>Autor do site: <?=AUTOR?></p>
<p>Nome da Empresa:<?=EMPRESA?> </p>
<p>Fundada em:<?=ANO_FUNDACAO?></p>


</body>
</html>
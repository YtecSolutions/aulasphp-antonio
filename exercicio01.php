<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio01</title>
    
</head>
<body>
    <h1>CADASTRO</h1>

    <?php
// Variáveis
$NOME = "Chapolin";
$idade = 25;

echo "<p>Nome: <i> .$NOME. </i> possui <b>$idade anos </b> <p/>";
?>

<p>Nome: <i><?=$NOME?></i> possui <b><?=$idade?> anos</b> </p>

</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    // usuário, idade, cidade
    // e um dos telefones em uma lista ordenada HTML.
    <?php


    $cadastro = [
        "nome_usuario" => "Chapolin Colorado",
        "senha" => "123Teste",
        "idade" => 30,
        "cidade" => "São Paulo",
        "telefones" => ["11-2135-0300", "11-91234-5678"]


    ]; ?>

    <ol>

        <li><b><i>Nome do usuário</i></b>: <?= $cadastro["nome_usuario"] ?></li>
        <li><b><i>Idade</i></b>: <?= $cadastro["idade"] ?> anos</li>
        <li><b><i>Cidade</i></b>: <?= $cadastro["cidade"] ?></li>
        <li><b><i>Telefone</i></b> : <?= $cadastro["telefones"][0] ?></li>
    </ol>

    <pre><?= print_r($cadastro) ?></pre>
    <pre><?= var_dump($cadastro) ?></pre>




    <!-- Mini-exercicios  -->
    <!-- -Mostre em que unidade do Senac estamos  -->
    <!-- -Mostre os Sesc que fica no litoral -->

    </ol>
    <hr>

</body>

</html>
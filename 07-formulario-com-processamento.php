<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Formulário e processamento juntos</h1>
    <hr>
    <?php
    //Detectando o envio do formulário

    if (isset($POST["enviar"])) {
        echo "Foi setado!";
    }
    ?>

    <form action="" method="post">

        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome">
        <button type="submit" name="enviar">Enviar</button>
    </form>

</body>

</html>
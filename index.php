<?php
if (!empty($_POST['pessoa'] && !empty($_POST['idade']))) {
    $pessoa = htmlentities($_POST['pessoa']);
    $idade = htmlentities($_POST['idade']);

    $mensagem = null;
    if ($pessoa == 'diogo' && $idade == 30) {
        $mensagem = "O nome da pessoa é $pessoa";
    } else {
        $mensagem = "Acesso negado";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>get</h1>
    <form action="dadoa.php" method="get">
        <input type="text" name="pessoa" id="pessoa" placeholder="Digite seu nome">
        <br>
        <input type="text" name="idade" id="idade" placeholder="Digite sua idade">
        <input type="submit" value="Enviar" onclick="enviar()">
    </form>

    <h1>post</h1>
    <form action="" method="post">
        <input type="text" name="pessoa" id="pessoa" placeholder="Digite seu nome">
        <br>
        <input type="text" name="idade" id="idade" placeholder="Digite sua idade">
        <input type="submit" value="Enviar">
    </form>
    <?= $mensagem ?>

    <hr>
</body>

</html>


https://app.b7web.com.br/lesson/e645ce85-27fb-4d41-812e-b985109f8284
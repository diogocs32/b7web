<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     echo 'Formulário enviado via POST';
// }
// operador ?? 
// se a variavel for nula, ela recebe o valor da direita
// nome deste operador: coalescência nula

if (!empty($_POST['login'] && !empty($_POST['senha']))) {
    $login = htmlentities($_POST['login'] ?? '');
    $senha = htmlentities($_POST['senha'] ?? '');

    $msg = null;

    if ($login === 'admin' && $senha === 'admin') {
        $msg = "Login realizado com sucesso!";
    } else {
        $msg = "Login ou senha incorretos!";
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
    <form action="" method="post">
        <input type="text" name="login" id="login" value="<?= $_POST['login'] ?? '' ?>" placeholder="Login">
        <br>
        <input type="password" name="senha" id="senha" value="<?= $_POST['senha'] ?? '' ?>" placeholder="Senha">
        <br>
        <input type="submit" value="Enviar">
    </form>
    <?= $msg ?>
</body>

</html>
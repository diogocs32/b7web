<?php
if (!empty($_GET['pessoa'] && !empty($_GET['idade']))) {
    $pessoa = $_GET['pessoa'] ?? 'Visitante'; // operador de coalescência nula
    $idade = $_GET['idade'] ?? 0;

    echo "O nome da pessoa é $pessoa";
    echo "<br>";
    echo "A idade da pessoa é $idade";
    echo "<br>";
} else {
    // redireciona para a página index.php
    header('Location: index.html');
    exit; // para a execução do script
}

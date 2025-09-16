<?php

// superglobals no php
// variaveis nativas do php
// sempre começam com o simbolo de $
// são escritas em caixa alta
// são arrays associativos
// podem ser acessadas de qualquer lugar do script
// existem varios tipos de superglobals
// $_GET

// via GET ou query string

// $_GET
// armazena dados enviados via URL
// ex: http://localhost/dadoa.php?nome=joao&idade=30
// pode ser acessado de qualquer lugar do script
// é um array associativo
// para acessar os dados, usamos a chave do array
// ex: $_GET['nome']
// ex: $_GET['idade']

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';

// $nome = $_GET['pessoa'];
// $idade = $_GET['idade'];

// echo "O nome da pessoa é $nome";
// echo "<br>";
// echo "A idade da pessoa é".$idade;

// para evitar erros, devemos sempre verificar se o parametro existe na URL
// podemos usar as funções isset() e empty()
// isset() - verifica se a variavel existe
// empty() - verifica se a variavel está vazia

// if (!empty($_GET['campanha'])) {
//     $numero_campanha = $_GET['campanha'];
//     echo 'O número da campanha é ' . $numero_campanha;
// } else {
//     echo 'O parâmetro campanha não existe na URL';
//     exit; // para a execução do script
// }


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

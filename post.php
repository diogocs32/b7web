<?php

// tratamento de dados via POST
// dados enviados via formulário
// html specialchars() - converte caracteres especiais em entidades html
// previne ataques XSS (cross site scripting)
// ex: <script>alert('XSS')</script> vira &lt;script&gt;
// ex: & vira &amp;




if (!empty($_POST['pessoa'] && !empty($_POST['idade']))) {
    $pessoa = htmlentities($_POST['pessoa'] ?? 'Visitante');
    $idade = htmlentities($_POST['idade'] ?? 0);
    echo "O nome da pessoa é $pessoa";
    echo "<br>";
    echo "A idade da pessoa é $idade";
    echo "<br>";
}

<?php

$cadastro = [
    'nome' => 'Anabelle',
    'idade' => 17,
    'email' => 'anabelle12anabelle@gmail.com'
    ];

    foreach ($cadastro as $chave => $valor) {
        echo "O campo $chave tem o valor $valor <br>";
    }
?>
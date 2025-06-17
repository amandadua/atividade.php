<?php

$alunos = [
    "Helber" => [
        "nota" => 8
    ],

    "Anabelle" => [
        "nota" => 9
    ],

    "Anderson" => [
        "nota" => 8
    ],
    ];

    $media = 0;
    echo "<br>";

    foreach ($alunos as $alunoNome => $alunoNota) {
    echo "Nome: " . $alunoNome . "<br>";
    echo "Nota: " . $alunoNota["nota"] . "<br>";

    $media += $alunoNota["nota"] / 3;
    }
    echo "Média da turma: " . number_format($media, 2, '.', '')
?>
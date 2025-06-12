<?php

$aluno1 = "Anderson";
$nota1 = 7.5;
$nota2 = 0;
$nota3 = 0;

$aluno2 = "Amanda";
$nota4 = 8.0;
$nota5 = 9.0;
$nota6 = 10.0;
$media1 = ($nota1 + $nota2 + $nota3) / 3;
$media2 = ($nota4 + $nota5 + $nota6) / 3;

if ($media1 >= 7) {
    echo "$aluno1 foi aprovado com média $media1.<br>";
} else {
    echo "$aluno1 foi reprovado com média $media1.<br>";
}

if ($media2 >= 7) {
    echo "$aluno2 foi aprovado com média $media2.<br>";
} else {
    echo "$aluno2 foi reprovado com média $media2.<br>";
}

?>
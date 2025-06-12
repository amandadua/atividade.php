<?php

$pontoInicial = 100;
$vitoria = 20;
$derrota = 15;

echo "Pontos iniciais: $pontoInicial<br>";

echo "Vitória: " . ($vitoria) . "<br>";
echo "Derrota: " . ($derrota) . "<br>";

echo "Pontos após vitória: " . ($pontoInicial + $vitoria - $derrota) . "<br>";

?>
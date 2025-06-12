<?php

$precoOriginal = 100.00;
$desconto = 0.15;
$valorFinal = $precoOriginal - ($precoOriginal * $desconto);

echo"Valor original: R$", $precoOriginal,"<br>";
echo "Desconto: R$", $desconto,"<br>";
echo "Valor final: R$", $valorFinal,"<br>";

?>
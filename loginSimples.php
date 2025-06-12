<?php

$nomeUser = "blablabla";
$senhaUser = "1234";

$nome1 = "Laura";
$senha1 = "1234";

if ($nomeUser == $nome1 && $senhaUser == $senha1) {
    echo "Login realizado com sucesso!<br>";
} else {
    echo "Usuário ou senha inválidos.<br>";
}

$nome2 = "blablabla";
$senha2 = "1234";
if ($nomeUser == $nome2 && $senhaUser == $senha2) {
    echo "Login realizado com sucesso!<br>";
} else {
    echo "Usuário ou senha inválidos.<br>";
}

?>
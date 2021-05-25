<?php

$idade = 15;
$numerodepessoas = 1;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "apartir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {

echo "Você tem $idade anos.pode entrar sozinho";
} else {
    if ($idade >=16 && $numerodepessoas > 1) {
        echo "você tem $idade anos, está acompanhado (a) , então pode entrar.";
    } else {
    echo  "você só tem $idade anos. você não pode entrar";
    echo PHP_EOL . "É UMA PENA";
    }
}

echo PHP_EOL;
echo "ADEUS!";


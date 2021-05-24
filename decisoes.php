<?php

$idade = 18;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "apartir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18) {

echo "Você tem $idade anos." . PHP_EOL;
echo 'pode entrar';
echo "\n";
} else {
    echo  "você só tem $idade anos. você não pode entrar";

}

echo PHP_EOL;
echo "ADEUS!";
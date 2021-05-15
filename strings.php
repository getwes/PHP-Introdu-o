<?php

$idade = 18;
echo 'olá mundo minha idade é ' . $idade  . 'anos';

echo "olá mundo minha idade é  $idade  anos";

 como quebrar linhas

$idade = 18;

echo "olá mundo!\n";

// caracter especial precisa estar entre "" caracter para quebrar linhas \n
echo "\n";

echo "olá mundo!" . PHP_EOL;

echo "eu tenho $idade anos";
-----------------

// mostrando que o codigo ainda esta em desenvolvimento 
<?php

$idade = 16;

echo "Olá mundo!" . PHP_EOL;
echo "Eu tenho \"$idade\" anos";

echo PHP_EOL . PHP_EOL;

echo "Você só pode entrar, se tiver mais de 18 anos\n";

echo "Você tem $idade anos. Pode entrar";
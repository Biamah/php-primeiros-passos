<?php

$idade = 15;
$nome = "Beatriz";
$numeroPessoas = 2;

echo "voce so pode entrar se tiver mais que 18 anos." . PHP_EOL;
echo "a partir de 16 anos acompanhado" . PHP_EOL;

// pode ser usado || ou "or"
// se não quiser criar duas verificações pode apenas utilizar >= 
// pode usar o and ou &&
if ($idade >= 18 && $nome == "Beatriz"){
    echo "$nome voce tem $idade anos. Pode entrar sozinho." . PHP_EOL;
} else if ($idade >= 16 && $numeroPessoas > 1){
    echo "$nome voce tem $idade anos, mas esta acompanhada. Pode entrar." . PHP_EOL;
} else {
    echo "$nome voce tem $idade não pode entrar." . PHP_EOL;
}

echo PHP_EOL;
echo "Adeus!";
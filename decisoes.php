<?php

$idade = 25;
$nome = "Beatriz";

echo "voce so pode entrar se tiver mais que 18 anos." . PHP_EOL;

// pode ser usado || ou "or"
// se não quiser criar duas verificações pode apenas utilizar >= 
if ($idade == 18 || $idade > 18){
    echo "voce tem $idade anos pode entrar" . PHP_EOL;
}

// pode usar o and ou &&
if ($idade >= 18 && $nome == "Beatriz"){
    echo "$nome pode entrar!";
}
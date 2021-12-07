<?php

$contasCorrentes = [
    50 => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    51 => [
        'titular' => 'Isabela',
        'saldo' => 2000
    ], 
    52 => [
        'titular' => 'Gabriela',
        'saldo' => 3000
    ]
];

foreach ($contasCorrentes as $indice => $conta) {
    echo $indice;
    echo $conta['titular'] . PHP_EOL;
}

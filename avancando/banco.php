<?php

function exibeMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}

$contasCorrentes = [
    '000.000.000-00' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ], 
    '000.000.000-01' => [
        'titular' => 'Isabela',
        'saldo' => 2000
    ], 
    '000.000.000-03' => [
        'titular' => 'Gabriela',
        'saldo' => 3000
    ]
];

$contasCorrentes['000.000.000-03'] ['saldo'] -= 500; 



foreach ($contasCorrentes as $indice => $conta) {
    exibeMensagem($indice . '' . $conta['titular'] . '' . $conta['saldo']);
}

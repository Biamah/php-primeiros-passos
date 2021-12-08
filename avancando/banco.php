<?php

function exibeMensagem(string $mensagem) 
{
    echo $mensagem . PHP_EOL;
}

function sacar(array $conta, float $valorASacar) : array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem( mensagem: "Voce não pode sacar!");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function depositar(array $conta, float $valorADepositar) : array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem( mensagem: "Deposito precisa ser positivos");
    }
    return $conta;
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

$contasCorrentes['000.000.000-03'] = sacar($contasCorrentes['000.000.000-03'], valorASacar: 500);
$contasCorrentes['000.000.000-01'] = depositar($contasCorrentes['000.000.000-01'], valorADepositar: 900);

foreach ($contasCorrentes as $indice => $conta) {
    exibeMensagem( mensagem: $indice . '' . $conta['titular'] . '' . $conta['saldo']);
}


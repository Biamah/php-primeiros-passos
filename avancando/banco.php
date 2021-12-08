<?php

require_once 'funcoes.php';

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

titularLetrasMaiusculas($contasCorrentes['000.000.000-01']);

foreach ($contasCorrentes as $indice => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
    exibeMensagem( 
        mensagem:"$indice $titular $saldo" 
    );
}


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

unset($contasCorrentes['000.000.000-02']);

titularLetrasMaiusculas($contasCorrentes['000.000.000-01']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>
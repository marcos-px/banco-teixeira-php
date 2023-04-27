<?php

require_once '../functions/functions.php';

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => 'Tamara',
        'saldo' => 10000
    ],
    "123.456.789-11" => [
        'titular' => 'Léo',
        'saldo' => 300
    ],
    "123.456.789-12" => [
        'titular' => 'Clara',
        'saldo' => 30000
    ],
];


$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 500);

unset ($contasCorrentes['123.456.789-12']);

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) : ?>
            <dt>
                <h3>
                    <?= $conta['titular']; ?> - <?= $cpf; ?>
                </h3>
            </dt>
            <dd>
                <?= $conta['saldo']; ?>
            </dd>
            <dl>
            <?php endforeach; ?>
            </body>
</html>
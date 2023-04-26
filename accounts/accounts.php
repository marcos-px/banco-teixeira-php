<?php

$contasCorrentes = [
    "123.456.789-10" => [
        'titular' => 'Marcos',
        'saldo' => 1000
    ],
    "123.456.789-11" => [
        'titular' => 'Léo',
        'saldo' => 10000
    ], 
    "123.456.789-12" => [
        'titular' => 'Clara',
        'saldo' => 30000
    ],
];

$contasCorrentes["123.151.456-15"] = [
    'titular' => 'Claudia',
    'saldo' => 2000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $conta['titular'] . ' - ' . $cpf . PHP_EOL;
}
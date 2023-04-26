<?php

$conta1 = [
    'titular' => 'Marcos',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Léo',
    'saldo' => 10000
];
$conta3 = [
    'titular' => 'Clara',
    'saldo' => 30000
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
};
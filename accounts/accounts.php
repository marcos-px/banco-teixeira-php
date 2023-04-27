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

titularComLetrasMaiusculas($contasCorrentes['123.456.789-10']);

$contasCorrentes['123.456.789-10'] = sacar($contasCorrentes['123.456.789-10'], 500);

$contasCorrentes['123.456.789-12'] = depositar($contasCorrentes['123.456.789-12'], 500);

unset ($contasCorrentes['123.456.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {
   ['titular' => $titular , 'saldo' => $saldo] = $conta;

    exibeMensagem(
        "$cpf $titular $saldo"
    );
}

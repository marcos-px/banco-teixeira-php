<?php

function sacar(array $conta, float $valorASacar): array
{

    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Saldo Insuficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function depositar(array $conta, $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function exibeMensagem(string $mensagem)
{
    echo $mensagem . PHP_EOL;
}
;


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

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem($cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);
}
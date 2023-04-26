<?php

function sacar($conta, $valorASacar)
{
    
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem ("Saldo Insuficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem ($mensagem) 
{
    echo $mensagem . PHP_EOL;
};

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
$contasCorrentes['123.456.789-11'] = sacar($contasCorrentes['123.456.789-11'], 500);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem( $cpf . ' ' . $conta['titular'] . ' ' . $conta['saldo']);
};
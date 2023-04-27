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
    echo $mensagem . '<br>';
};

function titularComLetrasMaiusculas(array & $conta)
{ 
    exibeMensagem(
    $conta['titular'] = mb_strtoupper($conta['titular'])

    );
}

function exibeConta (array $conta)
{
    echo "<li>Titular: $conta[titular]. Saldo: {$conta['saldo']}</li>";
    
}
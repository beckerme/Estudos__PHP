<?php

function depositar(array $conta, float $valorADpositar) : array
{
    if($valorADpositar > 0){
        $conta['Saldo'] =+ $valorADpositar;
    } else {
        exibeMensagem(mensagem: "Depositos precisam ser positivos");
    }
    return $conta;
}

function sacar(array $conta, float $valorASacar) : array
{
    if( $valorASacar > $conta['Saldo']){
        exibeMensagem(mensagem: "Você não pode sacar esse valor.");
    }else {
        $conta['Saldo'] -= $valorASacar;
    }

    return $conta;
} //funcao

function exibeMensagem($mensagem)
{ // sub - rotina 
    echo $mensagem . PHP_EOL;
}

function titularUpperCase( array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}
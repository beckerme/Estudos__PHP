<?php

$conta1 = [
    'titular' => 'Marcos',
    'Saldo' => 1000
];

$conta2 = [
    'titular' => 'Marta',
    'Saldo' => 10000
];

$conta3 = [
    'titular' => 'Alberto',
    'Saldo' => '500'
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]['titular']. PHP_EOL;
    echo $contasCorrentes[$i]['Saldo']. PHP_EOL;
}
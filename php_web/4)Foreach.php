<?php
$contasCorrentes = [
    2340 => [
        'titular' => 'Marcos',
        'Saldo' => 1000
    ], 
    4590 =>[
        'titular' => 'Marta',
        'Saldo' => 10000
    ], 
    2780 => [
        'titular' => 'Alberto',
        'Saldo' => '500'
    ]
];

foreach($contasCorrentes as $id => $conta){
    echo $conta['titular'] . PHP_EOL;
    echo $conta['Saldo'] . PHP_EOL . PHP_EOL;
    // echo $nome . PHP_EOL;
}

//se quisermos adicionar um novo item com chave vaiza, por exemplo: $contasCorrentes [] [ 'titular' => 'Claudia', saldo => 932039 ] ao darmos echo a chave para esse item sera o proximo valor numerico disponível, se o array só conter string, sua chave sera igual a 0, que no caso é o proximo numero. PS:. Isso não acontece com listas simples, ao usarmos uma chave vazia em uma lista SIMPLES como $idade = [1, 2, 3, 4,...] para adicionar $idade[] = 40;, mandara o item 40 para o ultimo índice disponível.
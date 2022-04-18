<?php

require_once '6)funcoes.php'; // include serve para arquivos que nao sao obrigatorios no programa diferente do rquire. Se eu tentar colocar tanto o include quanto o require duas vezes o codigo mostrara erro, porem com o include_onde as coisas sao diferentes.
// a funcao require_once verifica se o arquivo ja foi incluido.

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
        'Saldo' => 400
    ]
];

$contasCorrentes['2340'] = sacar($contasCorrentes['2340'], valorASacar: 123);
$contasCorrentes['2780'] = depositar($contasCorrentes['2780'], valorADpositar: -300);
titularUpperCase(conta: $contasCorrentes['2780']);

foreach($contasCorrentes as $id => $conta){
    exibeMensagem(
        mensagem: "$id {$conta['titular']} $conta[Saldo]" //com chaves e sem chaves
    );
}
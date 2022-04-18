<?php

$array = [
    1 => 'a',
    '1' => 'b', // esse indice sobrescreve o indice acima pois o php tenta converter o mesmo de string pra inteiro e conseguiu, convertendo-o para a chave 1 que antes recebia o valor de 'a' e substituiu a mesma para o valor de 'b'
    1.5 => 'c', //aqui acontece a mesma coisa.
    true => 'd',
    'qualquer_coisa' => 'e'
];
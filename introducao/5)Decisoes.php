<?php

$idade = 14;
$numeroDePessoas = 2;

echo "Você só pode entrar se tiver mais do que 18 anos ou a partir de 16 anos acompanhado por um adulto" . PHP_EOL;

if ($idade >= 18){
    echo "Você tem $idade anos " . PHP_EOL ."Você pode entrar sozinho!";
} else if($idade >= 16 && $numeroDePessoas > 1){
        echo "voce tem $idade anos" . PHP_EOL . "Voce pode entrar";
    } else {
        echo "Você tem $idade anos" . PHP_EOL . "Você não pode entrar sozinho";
    }

echo PHP_EOL . "Adeus";
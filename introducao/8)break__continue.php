<?php
$contador = 1;

// for($contador = 1; $contador <= 15; ++$contador) {
//     if($contador == 13){
//         echo "JULIA" . PHP_EOL;
//     }else {
//         echo $contador . PHP_EOL;
//     }

// }

// maneira diferente

// for($contador = 1; $contador <= 15; ++$contador) {
//     if($contador != 13){
//         echo $contador . PHP_EOL;
//     }
// }

// com coninue

for($contador = 1; $contador <= 15; ++$contador) {
    if($contador == 13){
        continue;
    }
    echo $contador . PHP_EOL;

}
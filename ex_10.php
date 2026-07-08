<?php

function CalcularMedia($notas){

    $maiorNota = 0;
    $quantidade = 5;

    for($i = 0; $i<$quantidade; $i++){
        if($notas[$i] > $maiorNota){
            $maiorNota = $notas;
        }
    }

     return($notas);

}

$notas = [];
$quantidade = 5;

for ($i = 0; $i < $quantidade; $i++) {
    $notas[] = mt_rand(1, 100);
}

echo "Maior nota: " . CalcularMedia($notas);

?>
<?php

function calcularFormula($x,$y){

    if(($x + $y) == 0){
        return "não foi possivel realizar a divisão por zero";
    };

    $resultado = ((pow($x,2) + pow($y,2)) / ($x+$y));

    return $resultado;

};

$x = 10;
$y = 20;

echo "valor de x é: $x <br>";
echo "valor de y é: $y <br>";

echo calcularFormula($x,$y);

?>
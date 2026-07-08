<?php

function calcularDesconto($valor){

    if($valor >= 1000){
        $desconto = 0.7;
    }
    elseif($valor >= 500){
        $desconto = 0.8;
    }
    elseif($valor >= 100){
        $desconto = 0.9;
    }
    elseif($valor < 100){
        $desconto = 1;
    }

    $resultado = ($valor * $desconto);

    echo "O valor original é $valor <br>";
    echo "O desconto é de: " . (-$desconto * 100 + 100) . "%<br>";
    return("O resultado é: $resultado");
}

echo calcularDesconto(550);

?>
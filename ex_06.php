<?php

function converterTemperatura($x, $origem, $destino){

echo "Temperatura: $x<br>";
echo "De: $origem<br>";
echo "Para: $destino<br>";

if($origem == "celsius"){
    if($destino == "Fahrenheit"){
        $resultado = (($x * 1.8) + 32);
        return("O resultado é $resultado");
    }
    if($destino == "Kelvin"){
        $resultado = ($x + 273);
        return("O resultado é $resultado");
    }
}

if($origem == "Fahrenheit"){
    if($destino == "celsius"){
        $resultado = (($x - 32) / 1.8);
        return("O resultado é $resultado");
    }
    if($destino == "Kelvin"){
        $resultado = ((($x - 32) / 1.8) + 273);
        return("O resultado é $resultado");
    }
}

if($origem == "Kelvin"){
    if($destino == "Fahrenheit"){
        $resultado = ((($x - 273) * 1.8) + 32);
        return("O resultado é $resultado");
    }
    if($destino == "celsius"){
        $resultado = ($x - 273);
        return("O resultado é $resultado");
    }
}

}

$resultado = 0;
$origem = " ";
$destino = " ";

echo converterTemperatura(23, "Kelvin", "Fahrenheit");

?>
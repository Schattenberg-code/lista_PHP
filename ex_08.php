<?php

function ordenarNomes($nomes){

    $resultado = explode(", ",$nomes);
    sort($resultado);
    $nomes = Implode(", ",$resultado);
    return("Nomes organizados: $nomes");

}

$nomes = "Caio, Fix, Hercilio, Nordeley, Lucas, Davi, Batista";

Echo "Nomes tudo errado: $nomes<br><br>";
echo ordenarNomes("$nomes");

?>
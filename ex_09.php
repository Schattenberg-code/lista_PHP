<?php

function analisarNumero($numero){

    $primo = 1;
    $multiplicador = 0;

    for($i = 2; $i<$numero; $i++){
        if($numero % $i == 0){
            $primo = 0;
            break;
        }
    } if($primo == 1){
        echo ("Esse número é primo<br>");
    } else {
        echo ("Esse número não é primo<br>");
    }


    for($i = 1; $i<$numero; $i++){
        if($numero % $i == 0){
            $multiplicador += $i;
        }
    } if($multiplicador == $numero){
        echo ("Esse número é perfeito<br>");
    } else {
        echo ("Esse número não é perfeito<br>");
    }


    if($numero % 2 == 0){
        echo ("Esse número é par");
    } else {
        echo ("Esse número é impar");
    }

    return("<br><br>o número escolhido é: " . $numero);

}

echo analisarNumero(8128);

?>
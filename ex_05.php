<?php

function contadordevogais($texto){
preg_match_all('/[aeiouáéíóúãõâêîôû]/i', $texto, $matches);
return count($matches[0]);
};

function contadordeconsoante($texto){
preg_match_all('/[bcdfghjklmnpqrstvwxyz]/i', $texto, $matches);
return count($matches[0]);
};

function analisarTexto($texto){

$quantCarac = (strlen($texto));
$quantPalav = str_word_count($texto);
$quantVogais = contadordevogais($texto);
$quantConsoante = contadordeconsoante($texto);

    return "A quantidade de caracteres é: $quantCarac <br>A quantidade de palavras é: 
    $quantPalav <br>A quantidade de vogais é : $quantVogais<br>A quantidade de consoantes é: $quantConsoante";

}

$texto = "socorram me subi no ônibus em marrocos";
echo "$texto<br>";
echo ($resultado = analisarTexto($texto));



?>
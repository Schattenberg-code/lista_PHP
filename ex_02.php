<!-- Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de textos.
Crie uma função chamada inverterTexto() que receba uma string e retorne o texto completamente invertido.
Além disso, exiba a quantidade de caracteres existentes na string original. -->

<?php

function inverterTexto($texto){

$texto = strrev($texto);

return "A palavra invertida é: $texto";

};

$texto = "cebola";
$qntTexto = (strlen($texto));

echo inverterTexto($texto);
echo ("<br> quantidade de caracteres é: $qntTexto");

?>
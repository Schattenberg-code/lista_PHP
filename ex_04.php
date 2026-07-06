<?php

// Uma empresa deseja gerar senhas temporárias para seus colaboradores.
// Crie uma função chamada gerarSenha() que receba a 
// quantidade de caracteres desejada e retorne uma senha aleatória contendo 
// letras maiúsculas, minúsculas, números e caracteres especiais.

function gerarSenha($tamanho){

    $maiusculo = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $minusculo = "abcdefghijklmnopqrstuvwxyz";
    $caracteres = "!@#$%&*)_-={?:<^~";
    $numeros = "123456789";

    $todos = $maiusculo . $minusculo . $numeros . $caracteres;

    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $indice = random_int(0, strlen($todos) - 1);
        $senha .= $todos[$indice];
    }

    return $senha;

};

$tamanho = 12;

echo gerarSenha($tamanho);

?>
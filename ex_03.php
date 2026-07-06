<?php

// Um sistema de cadastro precisa proteger informações sensíveis dos usuários.
// Crie uma função chamada mascararCpf() que receba um CPF e substitua todos os caracteres por *, 
// mantendo visíveis apenas os quatro últimos dígitos.
// Retorne o CPF mascarado.

function mascararCpf($cpf){

    $cpf = (string) $cpf;

    $cpf = "***.***.*" . substr($cpf, -5);

    return $cpf;
};

$cpf = "968.418.729-41";
echo "seu cpf é: $cpf <br>";
echo "seu cpf mascarado é: ";
echo mascararCpf($cpf);
?>
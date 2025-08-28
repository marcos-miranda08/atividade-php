<?php
    //Esta e uma função
    //Inicio da funçaõ saudação
    function saudacao($nome){
    return "Olá, $nome!";
    }
    //Fim da função saudação

    echo saudacao("Marcos");
    echo ("-----------------<br>");

//definição da função
function nomedaFuncao ($parametro1, $parametro2) {
    // Codigo que sera executado
    $resultado = $parametro1 + $parametro2;
    return $resultado; //retorna um valor
}
//chamando a função 
  $frase = saudacao("Marcos");
  $soma = nomedaFuncao(5, 10);
  echo "$frase, resultado é: $soma";
  ?>
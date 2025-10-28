<?php
    $texto = "natan";

    echo "Seu nome invertido é: " . strrev($texto);
    $texto_invertido = strrev($texto);
    if($texto == $texto_invertido){
        echo "<br/>Seu nome é um palíndromo!";
    } else {
        echo "<br/>Seu nome não é um palíndromo!";
    }
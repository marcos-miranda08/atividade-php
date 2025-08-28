<?php
function calcularMedia($num1, $num2, $num3) {
    $media = ($num1 + $num2 + $num3) / 3;
    return $media;
   $num1 = post("num1");
   $num2 = post("num2");
   $num3 = post("num3");

    $resultado = calcularMedia($num1, $num2, $num3);
    echo "A média é: " . $resultado;
    echo "Os números da média são: $num1, $num2, $num3";
    echo "o resultado da média é: $resultado";

    
}
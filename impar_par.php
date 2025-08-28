<?php

function impar_par($numero) {
    if ($numero % 2 == 0) {
        return "O número $numero é par.";
    } else {
        return "O número $numero é ímpar.";
    }
} 
echo impar_par(5);
?>
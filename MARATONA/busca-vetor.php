<?php
$vetor =[0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$busca = 15;
$encontrou = false;
foreach ($vetor as $i $valor){
    if ($valor == $busca){
        echo "Número encontrado na posição $i";
        $encontrou = true;
        break;
    }
}
if (!$encontrou){
    echo "Número não encontrado";
}
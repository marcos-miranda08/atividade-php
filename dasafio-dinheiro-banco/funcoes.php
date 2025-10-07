<?php
function media($a1, $a2, $a3, $a4, $a5){
    $media = ($a1+$a2+$a3+$a4+$a5)/5;
    return ($media);
}

function soma($a1, $a2, $a3, $a4, $a5){
    $soma = ($a1 + $a2 + $a3 + $a4 + $a5);
    return ($soma);
}
function maior($a1, $a2, $a3, $a4, $a5){
    $mr = [$a1,$a2,$a3,$a4,$a5];
    $maior = max($mr)
    return ($maior);
}
function menor($a1, $a2, $a3, $a4, $a5){
    $nr = [$a1,$a2,$a3,$a4,$a5];
    $menor = max($nr)
    return ($menor);
}
function delta($a, $b, $c){
    $delta=($b**2-4*$a*$c);
    return ($delta);
}
function x1($a,$b, $delta){
    return(-$b+$delta**0.5)/(2*$a);
}
function x2($a,$b, $delta){
    return(-$b-$delta**0.5)/(2*$a);
}
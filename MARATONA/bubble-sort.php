<?php
$vetor =[5,3,8,4,2];
$n = count($vetor);
for ($i = 0; < $n;$i++){
    for ($j = 0; $j < $n -1 -$i;$j++){
        if ($vetor[$j] > $vetor[$j +1]){
            $aux = $vetor[$j];
            $vetor[$j] = $vetor[$j +1];
            $vetor[$j +1] = $aux;
        }
    }
}
print_r($vetor);
?> 
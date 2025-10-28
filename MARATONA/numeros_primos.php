<?php
for ($n = 2; $n <= 50; $n++){
    $primo = true;
    for ($i = 2; $i <=sqrt($n);$i++){
        if ($n % $i ==o){
            $primo = false;
            break;
        }
    }
    if ($primo) echo "$n <br>";
}
?>
<?php

    // programa em PHP que mostre os primeiros 10 números da sequência de Fibonacci.
    $n1 = 1;
    $n2 = 1;
    echo "Sequência de Fibonacci:<br>";
    echo $n1 . "<br>";
    echo $n2 . "<br>";
    for ($i = 3; $i <= 10; $i++) {
        $n3 = $n1 + $n2;
        echo $n3 . "<br>";
        $n1 = $n2;
        $n2 = $n3;
    }
?>
</body>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
</html>
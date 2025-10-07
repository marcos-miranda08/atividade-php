<?php
// um programa em PHP que calcule a soma de todos os números pares de 1 até 100.

$soma = 0;
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        $soma += $i;
    }
}
echo "A soma de todos os números pares de 1 até 100 é $soma.<br>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma dos Números Pares</title>
</head>
<body>
</body>
</html>
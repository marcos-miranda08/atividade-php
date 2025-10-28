<?php

//um programa em PHP que verifique se uma palavra é palíndromo.

$palavra = isset($_GET['palavra']) ? $_GET['palavra'] : '';
$palavra_invertida = strrev($palavra);
if ($palavra === $palavra_invertida && $palavra !== '') {
    echo "A palavra '$palavra' é um palíndromo.<br>";
} elseif ($palavra !== '') {
    echo "A palavra '$palavra' não é um palíndromo.<br>";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificador de Palíndromo</title>
</head>
<body>
    <form method="get" action="">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" value="<?php echo htmlspecialchars($palavra); ?>">
        <button type="submit">Verificar Palíndromo</button>
    </form>
</body>
</html>
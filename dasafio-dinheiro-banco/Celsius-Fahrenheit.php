<?php

// um programa em PHP que converta uma temperatura em Celsius para Fahrenheit.
$celsius = isset($_GET['celsius']) ? (float)$_GET['celsius'] : 0;
$fahrenheit = ($celsius * 9/5) + 32;
echo "$celsius °C é igual a $fahrenheit °F.<br>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <form method="get" action="">
        <label for="celsius">Digite a temperatura em Celsius:</label>
        <input type="number" step="0.1" id="celsius" name="celsius" value="<?php echo $celsius; ?>">
        <button type="submit">Converter para Fahrenheit</button>
    </form>
</body>
</html>
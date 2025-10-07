<?php

    // um programa em PHP que receba uma string e a exiba invertida.
    $string = isset($_GET['string']) ? $_GET['string'] : '';
    $string_invertida = strrev($string);
    if ($string !== '') {
        echo "A string invertida é: '$string_invertida'.<br>";
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inversor de String</title>
</head>
<body>
    <form method="get" action="">
        <label for="string">Digite uma string:</label>
        <input type="text" id="string" name="string" value="<?php echo htmlspecialchars($string); ?>">
        <button type="submit">Inverter String</button>
    </form>
</body>
</html>
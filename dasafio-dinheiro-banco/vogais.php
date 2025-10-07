<?php

 //um programa em PHP que conte o número de vogais em uma palavra.

$palavra = isset($_GET['palavra']) ? $_GET['palavra'] : '';
$vogais = preg_match_all('/[aeiouAEIOU]/', $palavra, $matches);
echo "A palavra '$palavra' tem $vogais vogais.<br>";
?>
<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador de Vogais</title>
</head>
<body>
    <form method="get" action="">
        <label for="palavra">Digite uma palavra:</label>
        <input type="text" id="palavra" name="palavra" value="<?php echo htmlspecialchars($palavra); ?>">
        <button type="submit">Contar Vogais</button>
    </form>
</body>
</html>
<?php
//programa em PHP que converta um número decimal em binário.
$decimal = isset($_GET['decimal']) ? (int)$_GET['decimal'] : 0;
$binario = decbin($decimal);
echo "O número decimal $decimal em binário é $binario.<br>";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decimal para Binário</title>
</head>
<body>
    <form method="get" action="">
        <label for="decimal">Digite um número decimal:</label>
        <input type="number" id="decimal" name="decimal" value="<?php echo $decimal; ?>">
        <button type="submit">Converter para Binário</button>
    </form>
</body>
</html>
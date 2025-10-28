<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="potencia.php" method="post">
        <p>Digite um número</p>
            <input type="text" name="numero"><br><br>
        <p>Digite a potência a ser elevada:</p>
            <input type="text" name="potencia"><br><br>
            <input type="submit" value="calcular">
</body>
</html>

<?php
    $numero = $_POST['numero'] ?? '';
    $potencia = $_POST['potencia'] ?? '';
    echo 'Potência:' . pow($numero,$potencia);
?>
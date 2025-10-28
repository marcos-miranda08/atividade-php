<?php
$numeros = array();
$soma = 0;

echo "<form method='post'>";
for ($i = 1; $i <= 3; $i++) {
    echo "Número $i: <input type='number' name='num$i' required><br>";
}
echo "<input type='submit' value='Calcular'>";
echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    for ($i = 1; $i <= 3; $i++) {
        $numeros[] = $_POST["num$i"];
    }
    $soma = array_sum($numeros);
    $media = $soma / count($numeros);
    $maior = max($numeros);
    $menor = min($numeros);

    echo "Soma: $soma<br>";
    echo "Média: $media<br>";
    echo "Maior: $maior<br>";
    echo "Menor: $menor<br>";
}
?>
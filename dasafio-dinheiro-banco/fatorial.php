<?php
echo "<form method='post'>";
echo "Digite um número: <input type='number' name='numero' min='0' required><br>";
echo "<input type='submit' value='Calcular Fatorial'>";
echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["numero"]);
    $fatorial = 1;

    for ($i = 1; $i <= $num; $i++) {
        $fatorial *= $i;
    }

    echo "Fatorial de $num é: $fatorial<br>";
}
?>
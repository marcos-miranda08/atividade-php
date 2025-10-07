<?php
<?php
echo "<form method='post'>";
echo "Digite um número: <input type='number' name='numero' required><br>";
echo "<input type='submit' value='Mostrar Tabuada'>";
echo "</form>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = intval($_POST["numero"]);
    echo "<h3>Tabuada de $num:</h3>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $num * $i;
        echo "$num x $i = $resultado<br>";
    }
}
?>
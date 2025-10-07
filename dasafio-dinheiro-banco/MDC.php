<?php
    function mdc($a, $b) {
        while ($b != 0) {
            $t = $b;
            $b = $a % $b;
            $a = $t;
        }
        return $a;
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form method="post">
            <label for="num1">Número 1:</label>
            <input type="number" id="num1" name="num1" required>
            <br>
            <label for="num2">Número 2:</label>
            <input type="number" id="num2" name="num2" required>
            <br>
            <input type="submit" value="Calcular MDC">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);
            $resultado = mdc($num1, $num2);
            echo "O MDC de $num1 e $num2 é: $resultado";
        }
        ?>
    </body>
    </html>
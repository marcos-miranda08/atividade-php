<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $premio = htmlspecialchars($_POST['premio']);
    $min = (int)$_POST['min'];
    $max = (int)$_POST['max'];
    
    // Validação do intervalo
    if ($min >= $max) {
        $erro = "O número mínimo deve ser menor que o máximo!";
    } else {
        $numero = rand($min, $max);

        // Cria um registro do sorteio
        $sorteio = [
            "premio" => $premio,
            "numero" => $numero,
            "min" => $min,
            "max" => $max,
            "data" => date("d/m/Y H:i:s")
        ];

        // Inicializa o histórico se não existir
        if (!isset($_SESSION['historico'])) {
            $_SESSION['historico'] = [];
        }

        array_unshift($_SESSION['historico'], $sorteio);
        if (count($_SESSION['historico']) > 1000) {
            array_pop($_SESSION['historico']);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Sorteio de Rifa</title>
    <link rel="stylesheet" href="sorteio.css">
</head>
<body>
<div class="container">
    <h1>Sorteio de Rifa</h1>

    <section class="formulario">
        <form method="POST">
            <label for="premio">Prêmio:</label>
            <input 
                type="text" 
                id="premio" 
                name="premio" 
                required
            >
            <div class="intervalo">
                <label for="min">Número Inicial:</label>
                <input 
                    type="number" 
                    id="min" 
                    name="min" 
                    value="1" 
                    min="1" 
                    required
                >
                <label for="max">Número Final:</label>
                <input 
                    type="number" 
                    id="max" 
                    name="max" 
                    value="1000" 
                    min="2" 
                    required
                >
            </div>
            <button type="submit">Sortear</button>
        </form>
        <?php if (isset($erro)): ?>
            <p class="erro"><?= $erro ?></p>
        <?php endif; ?>
    </section>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST" && !isset($erro)): ?>
        <section class="resultado">
            <h2>🎉 Resultado do Sorteio</h2>
            <p><strong>Prêmio:</strong> <?= $premio ?></p>
            <p><strong>Rifa premiada:</strong> Nº <?= $numero ?></p>
            <p><strong>Intervalo do sorteio:</strong> <?= $min ?> a <?= $max ?></p>
            <p><strong>Data e hora:</strong> <?= date("d/m/Y H:i:s") ?></p>
        </section>
    <?php endif; ?>

    <?php if (!empty($_SESSION['historico'])): ?>
        <section class="historico">
            <h2>🕒 Últimos Números Sorteados</h2>
            <ul>
                <?php foreach ($_SESSION['historico'] as $item): ?>
                <?php
                    // evita warnings se chaves estiverem ausentes e sanitiza a saída
                    $itemPremio  = htmlspecialchars($item['premio'] ?? '');
                    $itemNumero  = isset($item['numero']) ? (int)$item['numero'] : '?';
                    $itemMin     = isset($item['min']) ? (int)$item['min'] : '?';
                    $itemMax     = isset($item['max']) ? (int)$item['max'] : '?';
                    $itemData    = htmlspecialchars($item['data'] ?? '');
                ?>
                <li>
                    <strong><?= $itemPremio ?></strong> — 
                    Rifa nº <?= $itemNumero ?> 
                    (Intervalo: <?= $itemMin ?> a <?= $itemMax ?>)
                    <span>(<?= $itemData ?>)</span>
                </li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

</div> <!-- .container -->
</body>
</html>
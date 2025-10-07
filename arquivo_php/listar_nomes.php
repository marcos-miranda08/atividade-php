<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar listar_pessoas</title>
</head>
<body style=" text-align: center; margin-top: 20%;  font-family: Arial, Helvetica, sans-serif;  background-color: rgb(204, 204, 204); ">
    <form action="listar_pessoas.php" method="post">
        <label> nome da pessoa a ser atendida: </label>
        <input type="text" name="cliente" required><br><br>
        <input type="submit" value="Listar">
    </form>
    <h3 style="color: blue;"> Lista de atendimento
    <?php
        $nome_atendimento = $_POST['cliente'] ?? '';
        $arquivo = fopen("atendimento.txt", "a");
        fwrite($arquivo, "$nome_atendimento\n");
        fclose($arquivo);

        $arquivo = fopen("atendimento.txt", "r"); // Abre o arquivo para leitura
        while (!feof($arquivo)) { // Enquanto não for o fim do arquivo
        echo fgets($arquivo) . "<br>"; // Lê uma linha do arquivo
        }
        fclose($arquivo);


    ?>
</body>
</html>
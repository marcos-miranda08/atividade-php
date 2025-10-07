<?php
    $arquivo = fopen("dados.txt", "w"); // Abre o arquivo para escrita (cria se não existir)
    fwrite($arquivo, "Primeira linha de texto\n");
    fclose($arquivo);
    echo "Arquivo alterado com sucesso!";

?>
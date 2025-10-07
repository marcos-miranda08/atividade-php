<?php
    $arquivo = fopen("dados.txt", "r"); // Abre o arquivo para leitura
    while (!feof($arquivo)) { // Enquanto não for o fim do arquivo
    echo fgets($arquivo) . "<br>"; // Lê uma linha do arquivo
    }
    fclose($arquivo); // Fecha o arquivo

?>
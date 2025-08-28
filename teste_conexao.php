<?php

require 'funcoes.php';
$nome_bd = "mongo";
$msg = banco_de_dados($nome_bd);
echo $msg;
<?php
function conecta($usuario, $senha) {
    if ($usuario === "admin" && $senha === "1234"){
      header("Location: painel.php");
      exit;
    } else {
      //Codidica a mensagempara evitar problemas com acentuação
      $msg = urldecode ("Usuario ou senha invalidos!");
      header("Location: index.php?msg=$msg");
      exit;
    }
}
?>
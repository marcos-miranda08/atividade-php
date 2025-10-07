<?php
  if($_SERVER["REQUEST_METHOD"] == "POST") {  
    //linha abaixo
    $topicos = simplexml_load_file("topicos.xml");
    $id = inrval ($_POST["id"]);
    $comentario = $topicos->topico[$id]->comentarios->addChild("comentario");
    $comentario->addChild("nome", $_POST["nome"]);
    $comentario->addChild("mensagem", $_POST["mensagem"]);
    $topicos->asXML("topicos.xml");
    header("Location: listas.php");
  }
  ?>
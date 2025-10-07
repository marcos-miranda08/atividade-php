<?php
  session_start();
  if(!isset($_SESSION["usuario"])){
    echo "Você precisa estar logado para criar um tópico.";
    exit();
  }
    if($_SERVER["REQUEST_METHOD"] == "POST") {  
        //linha abaixo
        $topicos = simplexml_load_file("topicos.xml");
        $novo= $topicos->addChild("topico");
        $novo->addChild("autor", $_SESSION["usuario"]);
        $novo->addChild("titulo", $_POST["titulo"]);
        $novo->addChild("mensagem", $_POST["mensagem"]);
        $novo->addChild("comentarios"); 
        $topicos->asXML("topicos.xml");
        echo "Tópico criado com sucesso! <a href='listas.php'>Clique aqui</a> para ver os tópicos.";
    }  else  {
        ?>
        <form method="post">
            Título: <input type="text" name="titulo" required><br>
            Mensagem: <textarea name="mensagem" required></textarea><br>
            <input type="submit" value="Criar Tópico">
        </form>
        <?php
    } ?>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {  
    //linha abaixo
  $usuarios = simplexml_load_file("usuarios.xml");
  $novo= $usuarios->addChild("usuario");
  $novo->addChild("nome", $_POST["nome"]);
  $novo->addChild("celular", $_POST["celular"]);
  $novo->addChild("email", $_POST["email"]);
  $novo->addChild("senha", md5 ($_POST["senha"]));
  $usuarios->asXML("usuarios.xml");
  echo "Usuário cadastrado com sucesso! <a href='login.html'>Clique aqui</a> para fazer login.";
}  else  {
    ?>
    <form method="post">
        Nome: <input type="text" name="nome" required><br>
        Celular: <input type="text" name="celular" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Cadastrar">
    </form>
    <?php
  } ?>
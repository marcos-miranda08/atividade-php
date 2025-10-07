<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarios = simplexml_load_file("usuarios.xml");
    foreach ($usuarios->usuario as $usuario) {
        if ($usuario->email == $_POST["email"] && $usuario->senha == md5($_POST["senha"])) {
            $_SESSION["usuario"] = (string)$usuario->nome;
            header("Location: listas.php");
            exit();
        }
    }
    echo "Email ou senha incorretos. <a href='login.html'>Tente novamente</a>.";
} else {
    ?>
    <form method="post">
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <input type="submit" value="Login">
    </form>
    <?php
} ?>

<?php
//classe Pai dos usuários
class Usuario {
    protected $nome;
    protected $email;   

    public function __construct($nome, $email) {
        $this->nome = $nome;
        $this->email = $email;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function exibirInfo() {
        return "Nome: " . $this->getNome() . "<br>Email: " . $this->getEmail() . "<br>";
    }
}
?>
    
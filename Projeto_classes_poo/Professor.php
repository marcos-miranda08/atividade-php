<?php
  require_once 'Usuario.php';

    //classe filha dos usuários
    class Professor extends Usuario {
        private $disciplina;
        
        public function __construct($nome, $email, $disciplina) {
            parent::__construct($nome, $email);
            $this->disciplina = $disciplina;
        }
        public function getDisciplina() {
            return $this->disciplina;
        }
        public function exibirInfo() {
            return parent::exibirInfo() . "Disciplina: " . $this->getDisciplina() . "<br>";
        }
        public function darAula() {
            return $this->getNome() . " está dando aula de " . $this->getDisciplina() . ".<br>";
        }
    }
?>
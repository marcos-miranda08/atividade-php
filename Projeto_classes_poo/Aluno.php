<?php
  require_once 'Usuario.php';

    //classe filha do Alunos
    class Aluno extends Usuario {
        private $matricula;
        
        public function __construction($nome, $email, $matricula) {
            parent::__construct($nome, $email);
            $this->matricula = $matricula;
        }
        public function getMatricula() {
            return $this->matricula;
        }
        public function exibirInfo() {
            return parent::exibirInfo() . "Curso: " . $this->getMatricula() . "<br>";
        }
        public function estudar() {
            return $this->getNome() . " está estudando " . $this->getMatricula() . ".<br>";
        }
    }
?>
<?php

class Aluno {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function estudar(){
        echo "{$this->nome} está estudando e tem {$this->idade} anos.";
    }
}

// Criando Objetos

$dani = new Aluno ("Dani", 16);
$ray = new Aluno ("Rayanne", 17);
$dani->estudar();


?>
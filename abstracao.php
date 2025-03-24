<?php

abstract class Pessoa{
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
}

class Aluno extends Pessoa{
}

class Professor extends Pessoa{
    
}

$zani = new Aluno ("Zanirato", 12);
echo $zani->nome . "É ele";
?>
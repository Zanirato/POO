<?php

class Aluno{
    public $nome;
    public $idade;
    private $nota;

    public function __construct($nome, $idade, $nota)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->nota = $nota;
    }
    public function verNota(){
        return $this->nota;
    }
}

$luski = new Aluno ("Daniluski", 17, 0);

echo $luski->nome;
echo $luski->verNota();
?>
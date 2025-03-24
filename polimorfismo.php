<?php

class Pessoa {
    public $nome;
    public function __construct($nome) {
        $this->nome = $nome;
    }
    public function apresentar(){
        echo "Olá, sou {$this->nome}";
    }
}

// A classe Aluno herda de Pessoa e sobrescreve o método apresentar

class Aluno extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Meu nome é {$this->nome} e sou aluno.<br>";
    }
}

class Professor extends Pessoa{
    public function apresentar()
    {
        echo "Oi! Sou o Professor {$this->nome}.<br>";
    }
}

$lais = new Aluno ("Lais", 13);
$nadja = new Professor ("Nadja");


echo $lais -> apresentar();
echo $nadja -> apresentar();
?>
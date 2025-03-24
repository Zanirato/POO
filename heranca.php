<?php

class Pessoa {
    public $nome;
    public $idade;

    public function __construct($nome, $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        
    }
    public function apresentar(){
        echo "Olá, sou {$this->nome} e tenho{$this->idade} anos.";
    }
}

// A Classe Aluno herdar de Pessoas
class Aluno extends Pessoa{
    public function estudar(){
        echo "{$this->nome} está estudando";
    }
} 

// A Classe Professor herda de Pessoas
class Professor extends Pessoa{
    public function ensinar(){
        echo "Professor {$this->nome} está ensinando";
    }
} 

// criando Objetos
$lais = new Aluno ("Laís", 16);
$nadja = new Professor ("Nadja", 24);

echo $lais -> estudar();
echo $nadja -> ensinar();
echo $lais -> apresentar();
echo $nadja -> apresentar();
?>
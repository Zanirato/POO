class Pessoa {
    constructor(nome){
        // o constructor é um método tradicional
        this.nome = nome;
    };

    apresentar =  () => console.log (`Olá, meu nome é ${this.nome}.`);
}

class Aluno extends Pessoa{
    apresentar = () => console.log(`Olá, meu nome é ${this.nome} e sou um aluno.`);

}

class Professor extends Pessoa{
    apresentar = () => console.log(`Olá, meu nome é ${this.nome} e sou um professor.`);
}

const lais = new Aluno("Lais");
const raul = new Professor("Raul");


lais.apresentar();
raul.apresentar();
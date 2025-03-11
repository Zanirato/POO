class Pessoa {
    constructor(nome){
        
        if(this.constructor === Pessoa){
            throw new error ("Já existe alguém com esse nome.")
        }
        this.nome = nome
    };
}

class Aluno extends Pessoa{
    apresentar = () => console.log(`Olá, meu nome é ${this.nome} e sou um aluno.`);
}

const lais = new Aluno("Lais");

lais.apresentar();
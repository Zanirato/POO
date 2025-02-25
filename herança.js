// Criando a classe Aluno
class Pessoa {
    constructor(nome, idade){
        // o constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
    apresentar = () => console.log(`Olá sou ${this.nome} e tenho ${this.idade} anos.`);
}

class Aluno extends Pessoa{
    aprender = () => console.log(`Aluno ${this.nome} está estudando.`);

}

class Professor extends Pessoa{
    ensinar = () => console.log(`Professor ${this.nome} está ensinando.`);

}

const lais = new Aluno("Lais", 16);
const raul = new Professor("Raul", 28);
const dani = new Aluno("Dani", 17);
const nadja = new Professor("Nadja", 22);

// console.log(lais.nome)
// console.log(lais.verNota())
lais.apresentar();
raul.apresentar();
lais.aprender();
raul.ensinar();
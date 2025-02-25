// Criando a classe Aluno
class Aluno {
    constructor(nome, idade){
        // o constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
    }
    feliz = () => console.log(`${this.nome} de ${this.idade} anos está feliz.`);
}

const lais = new Aluno("Lais", 16)
const dani = new Aluno("Dani", 17)
const luski = new Aluno("Daniluski", 17)
const ray = new Aluno("Ray", 17)

console.log(lais.nome)

lais.feliz();
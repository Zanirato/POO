// Criando a classe Aluno
class Aluno {
    #nota
    constructor(nome, idade, nota){
        // o constructor é um método tradicional
        this.nome = nome;
        this.idade = idade;
        this.#nota = nota;
    }
    feliz = () => console.log(`${this.nome} de ${this.idade} anos está feliz por ter tirado ${this.#nota} pontos na prova de HTML.`);

    verNota = () =>  this.#nota
}

const lais = new Aluno("Lais", 16, 74)

// console.log(lais.nome)
// console.log(lais.verNota())
lais.feliz();
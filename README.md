# POO
 
## Classe
Modelo para criar vários objetos.


## Objeto (propriedade - atributo, método - ação)
Representação de algo do mundo real.



## Pilares 
Abstração, encapsulamento, herança, polimorfismo

``Aluno`` é um modelo para criar alunos (pessoas)
``Constructor`` (nome, idade) cria propriedades 
``this.nome`` ``this.idade`` significam esse objeto
Podemos criar várias passoas sem repetir o código

## Encapsulamento

**Encapsulamento** permite proteger informações privadas, evitando mudanças acidentais. 


**Exemplo:** 

Um aluno tem uma nota secreta



## Herança 

``Herança`` permite que uma classe aproveite caracteristicas de outras, evitando repetição.


**Exemplo:** cria a classe ``Pessoa`` que contêm nome e idade, depois criar ``aluno`` e ``professor`` que herdam as características de ``Pessoa``.

``Pessoa``é a classe base e contêm as propriedade em comum (nome, idade)

``Aluno e Professor`` herdam de pessoa

``Aluno`` tem o método ``estudar()`` e ``Professor`` tem o método ``ensinar()``  criamos os objetos e usamos os seus métodos



## Polimorfismo

``Polimorfismo`` permite que objetos recebam o mesmo método que outra classe existente, mas com comportamentos diferentes. 


**Exemplo:** 

``Pessoa`` tem um método padrão ``apresentar()``;

``Aluno`` e ``Professor`` herdam esse método, mas reescrevem para exibir mensagens diferentes.

Mesmo método, mas comportamentos diferentes = polimorfismo.



## Abstração 

``Abstração`` permite criar classes que não podem ser instanciadas diretamente, servindo apenas como **modelo base**  por outras classes. Evitando criação de objetos genéricos.


**Explicação:**

A classe ``Pessoa`` não pode ser instanciada diretamente.

O ``if`` no ``constructor`` impede que objetos iguais sejam criados.

``Aluno`` herda de ``Pessoa``, então pode ser instanciado normalmente.

Isso garante que ``Pessoa`` funcione como modelo para outras classes.
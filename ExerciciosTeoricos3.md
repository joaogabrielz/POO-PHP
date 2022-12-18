- 1) "De inclusão", "Paramétrico", "oObrecarga", "SObreposição" são quatro tipos de?
   > R: Polimorfismo

- 2) Quando se utiliza, dentro de uma mesma classe, um mesmo nome de método para muitos métodos diferentes, estamos utilizando oconceito de
   > R: Sobrecarga

- 3) De acordo com os conceitos de POO relacioe as colunas
   > R: 
1 - Classe Abstrata -> Nunca será instanciado
2 - Classe Final-> Não pode ser SuperClasse
3 - Metodo Abstrato -> Deve ter implementação na Sub-Classe
4 - Metodo Final ->  Não pode ser sobrescrito

- 4) Falso ou verdadeiro
   > R: v - f - v -f 
1 - A especialização permite que voce remova da classe filha comportamento e atributos (V) (Pode colocar o metodo em branco..)
2 - A SuperClasse herda os atributos e comportamentos da subclasse (F)
3 - Os métodos de acesso privado não são herdados pela filha (V) (São herados so nao visiveis, mas a questao do concurso diz que se nao esta visivel nao é herdado)
4 - Protegido é o nivel de acesso onde se 'restringe' o acesso á classe atual e ás suas filhas (F) (Não restringe, Permite o acesso a essas)

- 5) O polimorfismo permite que um unico ____ expresse muitos comportamentos diferentes. Um tipo de polimorfismo é ____, que permite que possa ser desclarado o mesmo ____ varias vezes, sendo que cada declaração difere simplesmente no(a) ____ e ____ de argumentos.
   > R: Nome, Sobrecarga, Metodo, Número e Tipo.

- 6) Faz parte da assinatura de um metodo (verdadeiro ou falso)
   > R: 1, 2, 5
1 - Seu nome (V)
2 - A quantidade de parametros (V)
3 - A quantidade de linhas de codigo (F)
4 - A posicao de metodo na classe (F)
5 - Os tipos dos seus parametros (V)
6 - O tipo de retorno do metodo (F)

- 7) Considerando a declaração de metodo a seguir:
   > Metodo tarefa (a, b: Inteiro): Real
Qual seria a unica linha invalida para realizar a 'Sobrecarga' desse metodo dentro da 'mesma classe'?
A - Metodo tarefa (): Inteiro
B - Metodo tarefa (x:Inteiro, y: Real): Logico
C - Metodo tarefa (x, y: Inteiro): Inteiro
D - Metodo tarefa (a, b: Real): Real
   > R: Sobrecarga = colocar o mesmo metodo na classe e ter assinaturas diferentes (Quantidade e TIpo de parametros diferentes), entao: Invalida ( (C) - Metodo tarefa (x, y: Inteiro): Inteiro ).

- 8) Considerando a declaração de metodo a seguir:
   > Metodo tarefa (a, b: Inteiro): Real
Qual seria a unica linha invalida para realizar a 'Sobreposicao' desse metodo dentro da 'outra classe'?
A - @Sobrepor Metodo tarefa (x, y: Inteiro): Logico
B - Metodo tarefa (x:Inteiro, y: Inteiro): Real
C - @Sobrepor Metodo tarefa (a, b: Real): Inteiro
D - Metodo tarefa (): Real
   > R: Sobreposicao, mesma assinatura (Mesma quantidade e Tio dos parametros) entao: Valida ( (A) - @Sobrepor Metodo tarefa (x, y: Inteiro): Logico )


- 9) Considerando as declarações a seguir:
1 - Classe Abstrata A
2 - Classe Final B
3 - Classe C estende X
   Qual seria a unica linha invalida para declarar uma classe D?
   > R: Invalida, Classe D estende B (Pois Classe Final nao pode ter Sub-Classes(filhos))

- 10) Considerando os seguintes metodos sobrecarregados:
1 - Metodo x()
2 - Metodo x(a, b: Inteiro)
3 - Metodo x(x: Real)
3 - Metodo x(n: Caractere, m: Inteiro)
    Qual seria a unica linha invalida para realizar a chamada ao metodo x()?
A - x()
B - x(3, 7)
C - x(3.7)
D - x("Teste")
   > R: Invalida,  D - ("Teste")



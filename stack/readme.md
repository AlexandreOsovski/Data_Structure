## LIFO (Last In, First Out)

`LIFO` é um conceito fundamental em estruturas de dados, onde o último elemento adicionado a uma estrutura é o primeiro a ser removido. É semelhante ao comportamento de uma pilha de pratos, onde o último prato colocado sobre a pilha é o primeiro a ser retirado.

### Funcionamento

Em uma estrutura `LIFO`, os elementos são adicionados e removidos apenas de uma extremidade, chamada de topo. As operações principais são:

- **Push**: Adiciona um elemento ao topo da pilha.
- **Pop**: Remove e retorna o elemento do topo da pilha.

### Aplicações

As pilhas `LIFO` são utilizadas em uma variedade de aplicações na programação, incluindo:

- **Processamento de Expressões**: Para avaliar expressões matemáticas ou linguagens de programação que usam notação polonesa reversa.
- **Rastreamento de Chamadas de Função**: Em linguagens de programação, a pilha é usada para rastrear chamadas de função e retornos de maneira eficiente.
- **Gerenciamento de Memória**: Em sistemas operacionais, a pilha é usada para gerenciar a alocação e liberação de memória para funções e variáveis locais.

### Implementando

### Criando a classe

```php
<?php
namespace stack;

class stack {

}
?>
```

### Definindo as Propriedades da Classe

A seguir está a definição das propriedades da classe `Stack` em PHP:

```php
<?php
namespace stack;

class Stack {
    private int $size; // Representa o tamanho da pilha, definido como um inteiro.

    private array $structure; // Define a estrutura da pilha como um array.

    const MAX_WIDTH = 11; // Define um tamanho máximo para a pilha.
}
?>
```

### Construtor da Classe: Inicializando os Atributos

No construtor da classe, definido como `__construct()`, ocorre a inicialização dos atributos da classe `Stack`. Neste momento, as propriedades da classe, como o tamanho da pilha (`$size`) e a estrutura de dados que a representa (`$structure`), são inicializadas. Essa etapa é essencial para garantir que a pilha esteja em um estado inicial válido e pronto para receber elementos.

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];

        // É importante notar que a definição da constante `MAX_WIDTH` não é estritamente necessária neste contexto, uma vez que já foi atribuído um valor a ela. De fato, o mesmo poderia ter sido feito com os outros atributos da classe. No entanto, minha preferência pessoal é sempre inicializá-los dentro do construtor.

    }
}
?>
```

### Destrutor da Classe

O destrutor da classe, definido como `__destruct()`, permite que a instância da classe seja destruída quando não é mais necessária. No contexto da classe `Stack`, o destrutor pode ser usado para liberar recursos e limpar a memória ocupada pela pilha quando ela não é mais utilizada.

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }
}
?>
```

### Construindo os Métodos

Aqui estão as funções que compõem a classe `Stack`:

- **Função PUSH**: Definida como pública, esta função não possui um retorno com valor válido e recebe um item como parâmetro. Ela adiciona o item ao topo da pilha.

- **Função POP**: Também definida como pública, esta função não possui um retorno com valor válido e não recebe nenhum parâmetro. Ela remove e retorna o item do topo da pilha.

- **Função EMPTY**: Esta função verifica se a pilha está vazia e retorna um booleano indicando se há itens dentro da pilha.

- **Função getInfoStructure**: Esta função retorna informações sobre a estrutura da pilha. Ela retorna um array com duas chaves: "size" e "memory_used". A chave "size" retorna o tamanho atual da pilha, enquanto a chave "memory_used" retorna a quantidade de memória usada para criar a pilha, expressa em gigabytes (GB).

- **Função itemsStack**: Esta função retorna todos os itens presentes na pilha como um array.

Essas funções fornecem as operações básicas para manipular uma pilha LIFO e acessar informações sobre sua estrutura.

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }

    public function push($item):void
    {
    }

    public function pop():void
    {
    }

    public function empty(): bool
    {
    }

    public function getInfoStructure():array
    {
    }

    public function itemsStack():array
    {
    }
}
?>
```

### Construindo a Lógica do Método `PUSH`

O método `push` é responsável por adicionar um elemento ao topo da pilha. Sua lógica é descrita da seguinte maneira:

- Primeiramente, é construída uma condição para verificar se a pilha está cheia. Isso é uma prática comum de programação defensiva para evitar que a pilha atinja um tamanho excessivo. A verificação é feita com base no valor definido na constante `MAX_WIDTH`. Se a pilha estiver cheia, uma mensagem de aviso é retornada usando `echo`, informando "the structure is full".

- Caso a pilha não esteja cheia, o elemento é adicionado à pilha. Isso é feito acessando a estrutura da pilha (`$this->structure`) e atribuindo o novo item à próxima posição disponível na pilha. O índice da próxima posição é determinado pelo tamanho atual da pilha, acessado através de `$this->size`. Em seguida, o tamanho da pilha é incrementado em 1, para refletir a adição do novo elemento.

O uso de `self::` permite acessar as propriedades e métodos da própria classe, garantindo um código mais organizado e coeso.

Essa lógica garante que os novos elementos sejam adicionados à pilha de forma ordenada, seguindo o princípio `LIFO` (Last In, First Out).

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }

    public function push($item):void
    {
        if ($this->size > self::MAX_WIDTH) {
            echo 'the structure ins full';
        } else {
            $this->structure[$this->size] = $item;
            $this->size++;
        }
    }

    public function pop():void
    {
    }

    public function empty(): bool
    {
    }

    public function getInfoStructure():array
    {
    }

    public function itemsStack():array
    {
    }
}
?>
```

### Construindo a Lógica do Método `POP`

O método `pop` é responsável por remover e retornar o elemento do topo da pilha. Sua lógica segue o mesmo princípio do método `push`, porém de forma inversa.

- Primeiramente, é verificado se a pilha está vazia. Isso é feito utilizando a função `empty()` do PHP, que retorna um booleano indicando se a pilha está vazia ou não. Se a pilha estiver vazia, uma mensagem é retornada informando "This structure is empty", indicando que a pilha já está vazia e não há nada para ser removido.

- Caso a pilha não esteja vazia, o método procede removendo o último item da pilha. Isso é feito utilizando a função `unset($this->structure[$this->size - 1])`, que remove o item do topo da pilha. Em seguida, o tamanho da pilha é decrementado em 1, reduzindo o valor de `$this->size`.

Essa lógica garante que apenas o elemento mais recentemente adicionado à pilha seja removido, mantendo a ordem `LIFO` (Last In, First Out).

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }

    public function push($item):void
    {
        if ($this->size > self::MAX_WIDTH) {
            echo 'the structure ins full';
        } else {
            $this->structure[$this->size] = $item;
            $this->size++;
        }
    }

    public function pop():void
    {
        if($this->empty()){
            echo 'this structure is empty';
        }else{
            unset($this->structure[$this->size - 1]);
            $this->size--;
        }
    }

    public function empty(): bool
    {
        return empty($this->structure);
    }

    public function getInfoStructure():array
    {
    }

    public function itemsStack():array
    {
    }
}
?>
```

### Construindo a Lógica do Método `getInfoStructure` (Personalizável)

Neste método, o objetivo é fornecer informações sobre a estrutura da pilha de uma maneira personalizável. Primeiramente, é criado um array para armazenar essas informações. Em seguida, são atribuídas duas chaves a esse array: "size" e "memory_used".

- A chave "size" é preenchida com o número de elementos presentes na pilha, utilizando a função `count()` do PHP, que retorna um inteiro representando o tamanho da pilha.
- A chave "memory_used" é preenchida com a quantidade de memória usada pela pilha. Para isso, é utilizada a função `memory_get_usage()`, que retorna o uso de memória em bytes. Posteriormente, esse valor é convertido de bytes para kilobytes e, em seguida, para gigabytes para facilitar a compreensão.

Esse método fornece uma maneira flexível de obter informações detalhadas sobre a estrutura da pilha, incluindo seu tamanho e uso de memória.

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }

    public function push($item):void
    {
        if ($this->size > self::MAX_WIDTH) {
            echo 'the structure ins full';
        } else {
            $this->structure[$this->size] = $item;
            $this->size++;
        }
    }

    public function pop():void
    {
        if($this->empty()){
            echo 'this structure is empty';
        }else{
            unset($this->structure[$this->size - 1]);
            $this->size--;
        }
    }

    public function empty(): bool
    {
        return empty($this->structure);
    }

    public function getInfoStructure():array
    {
        $array = [];
        $array = [
            "size" => count($this->structure),
            "memory_used" => memory_get_usage() / 1024 / 1024
        ];
        return $array;
    }

    public function itemsStack():array
    {
    }
}
?>
```

### Construindo a Lógica do Método `itemsStack`

Neste método, a lógica é simples: retorna a estrutura da pilha. Essa função exibe informações sobre a estrutura da pilha, incluindo todos os itens presentes nela.

```php
<?php
namespace stack;

class stack {
    private int $size;
    private array $structure;
    const MAX_WIDTH = 11;

    public function __construct(){
        $this->size = 0;
        $this->structure = [];
    }

    public function __destruct()
    {
        unset($this->structure);
    }

    public function push($item):void
    {
        if ($this->size > self::MAX_WIDTH) {
            echo 'the structure ins full';
        } else {
            $this->structure[$this->size] = $item;
            $this->size++;
        }
    }

    public function pop():void
    {
        if($this->empty()){
            echo 'this structure is empty';
        }else{
            unset($this->structure[$this->size - 1]);
            $this->size--;
        }
    }

    public function empty(): bool
    {
        return empty($this->structure);
    }

    public function getInfoStructure():array
    {
        $array = [];
        $array = [
            "size" => count($this->structure),
            "memory_used" => memory_get_usage() / 1024 / 1024
        ];
        return $array;
    }

    public function itemsStack():array
    {
       return $this->structure;
    }
}
?>
```

### Usando a Classe

Para usar a classe `Stack`, primeiro precisamos instanciá-la. Se estivermos usando a classe em outro arquivo, também precisamos incluir o arquivo onde a classe está definida. Em seguida, podemos usar um loop `for()` para adicionar a quantidade de itens desejada à pilha. Depois, usamos o método `pop()` para remover um item da pilha. Neste exemplo, ao fazer isso, a contagem dos itens restantes será `9`. Em seguida, podemos recuperar todos os itens `(1 a 9)` usando o método `itemsStack()`. Além disso, podemos chamar o método `getInfoStructure()` para obter informações sobre o tamanho da pilha e a quantidade de memória usada. Finalmente, se desejarmos limpar a pilha criada, podemos chamar o método `__destruct()`.

```php
<?php
    $stack = new stack();
    for($i = 0; $i < 10; $i++ ){
        $stack->push($i);
    }
    $stack->pop();

    var_dump($stack->itemsStack());
    var_dump($stack->getInfoStructure())
    $stack->__destruct();
?>
```

<hr>

## Funções em PHP: array_push() e array_pop()

Antes de explorarmos as funções prontas do PHP para manipulação de arrays, é crucial que tenhamos compreendido previamente o funcionamento da estrutura LIFO (Last In, First Out), pois isso nos permitirá entender melhor como essas funções operam.

### Criando a Estrutura LIFO do Zero com as funções prontas do PHP

Vamos começar criando nossa própria implementação da estrutura LIFO em PHP. Em seguida, exploraremos como as funções `array_push()` e `array_pop()` se relacionam com essa estrutura.

```php
<?php
    namespace stack;

    class Stack {
        // Implementação da classe Stack aqui...
    }
?>
```

### array_push()

A função array_push() é usada para adicionar um ou mais elementos ao final de um array. Ela recebe como argumentos o array em que os elementos serão adicionados e os elementos a serem adicionados. Vale ressaltar que essa função altera o array original.

```php
$stack = [];
array_push($stack, "elemento1", "elemento2", "elemento3");
print_r($stack);

// Saída: Array ( [0] => elemento1 [1] => elemento2 [2] => elemento3 )
?>
```

### array_pop()

Por outro lado, a função array_pop() (assim como aprendido anteriormente) é utilizada para remover e retornar o último elemento de um array. Essa função é especialmente útil quando estamos lidando com a estrutura LIFO, pois ela opera de acordo com o princípio de remover o último elemento que foi adicionado, seguindo a ordem LIFO.

Essas funções desempenham um papel importante na manipulação de arrays em PHP, e entender como elas operam é essencial para um desenvolvimento eficaz.

```php
<?php

    array_push($stack, "elemento1", "elemento2", "elemento3");

    echo "Pilha antes de array_pop():\n";
    print_r($stack);

    // Removendo o último elemento da pilha usando array_pop()
    $ultimoElemento = array_pop($stack);

    // Imprimindo o último elemento removido e a pilha atualizada
    echo "Último elemento removido: $ultimoElemento\n";
    echo "Pilha após array_pop():\n";
    print_r($stack);
?>
```

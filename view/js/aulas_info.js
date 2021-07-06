var aulas = [
    {
    titulo: 'Variáveis',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: `
    <div>
        <br>
        <p>Variáveis são<span class="negrito">&ensp;contêineres&ensp;</span>para armazenar dados (valores).</p>
        <p style="display: flex;">Neste exemplo,<span class="negrito">&ensp;x&ensp;</span>, <span class="negrito">&ensp;y&ensp;</span>e<span class="negrito">z&ensp;</span>são variáveis, declarada com a <span class="negrito">&ensp;var&ensp;</span> palavra-chave:</p>
        <br>
        <h3 style="color: white;">Exemplo:</h3>
        <br>
        <div class="example">
            <p><span class="var">&ensp;var&ensp;</span> x = <span class="negrito">&ensp;5</span>;</p>
            <p><span class="var">&ensp;var&ensp;</span> y = <span class="negrito">&ensp;6</span>;</p>
            <p><span class="var">&ensp;var&ensp;</span> z = x + y;</p>
        </div>
        <br>
        <br>
        <p>A partir do exemplo acima, você pode esperar:</p>
        <br>
        <ul>
            <li> x armazena o valor 5</li>
            <li> y armazena o valor 6</li>
            <li> z armazena o valor 11</li>
        </ul>
        <br>
        <br>
        <h2 style="color: white;">Muito parecido com álgebra</h2>
        <br>
        <p>Neste exemplo,<span style="background-color:#403c3c; border-radius: 6px;"><span class="negrito">&ensp;price1</span>,<span class="negrito">&ensp;price2&ensp;</span></span>e<span style="background-color:#403c3c; border-radius: 6px;"><span class="negrito">&ensp;total&ensp;</span></span>são variáveis:</p>
        <br>
        <h3 style="color: white;">Exemplo:</h3>
        <br>
        <div class="example">
            <p><span class="var">&ensp;var&ensp;</span> price1 = <span class="negrito">&ensp;5</span>;
            <p>
            <p><span class="var">&ensp;var&ensp;</span> price2 = <span class="negrito">&ensp;6</span>;
            <p>
            <p><span class="var">&ensp;var&ensp;</span> total = price1 + price2;
            <p>
                <br>
                <br>
            <p>Na programação, assim como na álgebra, usamos variáveis (como o preço1) para manter os valores.</p>
            <p>Na programação também usamos variáveis nas expressões (total = preço1 + preço2).</p>
            <p>A partir do exemplo acima, você pode calcular o total como 11.</p>
        </div>
        <br>
        <br>
        <h2 style="color: white;">Identificadores JavaScript</h2>
        <br>
        <p>Todas as<span class="negrito">&ensp;variáveis&ensp;</span>JavaScript devem ser<span class="negrito">&ensp;identificadas&ensp;</span>com<span class="negrito">&ensp;nomes exclusivos</span>.<br><br>
            Esses nomes exclusivos são chamados de<span class="negrito">&ensp;identificadores</span>.<br><br>
            Os identificadores podem ser nomes curtos (como x e y) ou nomes mais descritivos (idade, soma, volume total).<br><br>
            As regras gerais para construir nomes para variáveis (identificadores únicos) são:
        </p>
        <br>
        <ul>
            <li> Os nomes podem conter letras, dígitos, sublinhados e cifrões</li>
            <li> Os nomes devem começar com uma letra</li>
            <li> Os nomes também podem começar com $ e _ (mas não os usaremos neste tutorial)</li>
            <li> Os nomes diferenciam maiúsculas de minúsculas (y e Y são variáveis diferentes)</li>
            <li> Palavras reservadas (como palavras-chave JavaScript) não podem ser usadas como nomes</li>
        </ul>
        <br>
        <br>
        <h2 style="color: white;">Tipos de dados JavaScript</h2>
        <br>
        <p>No JavaScript existem alguns tipos de variáveis:</p>
        <br>
        <p>
            <span class="negrito">String&ensp;</span>: Armazena texto.<br><br>
        <div class="example">
            <br>
            <p><span class="var">&ensp;var&ensp;</span> fruit = <span style="color: #E86E35;">"Bananinha"</span>;</p>
            <p><span class="var">&ensp;var&ensp;</span> flavor = <span style="color: #E86E35;">'Que gostoso'</span>;</p>
        </div>
        <br>
        <span class="negrito">Int&ensp;</span>: Números inteiros (ex: 1, 55, 123).<br><br>
        <div class="example">
            <br>
            <p><span class="var">&ensp;var&ensp;</span> day =<span class="negrito">&ensp;01</span>;</p>
            <p><span class="var">&ensp;var&ensp;</span> year =<span class="negrito">&ensp;2021</span>;</p>
        </div>
        <br>
        <span class="negrito">Double&ensp;</span>: Números com casas decimais (ex : 5.12, 10.01, 500.100).<br><br>
        <div class="example">
            <br>
            <p><span class="var">&ensp;var&ensp;</span> pi =<span class="negrito">&ensp;3.14</span>;</p>
            <p><span class="var">&ensp;var&ensp;</span> height =<span class="negrito">&ensp;1.68</span>;</p>
        </div>
        <br>
        <span class="negrito">Boolean&ensp;</span>: Apenas armazena dois valores TRUE e FALSE.<br><br>
        <div class="example">
            <br>
            <p><span class="var">&ensp;var&ensp;</span> foo =<span style="color: #FFD400;">&ensp;true</span>;</p>
            <p><span class="var">&ensp;var&ensp;</span> bar =<span style="color: #FFD400;">&ensp;false</span>;</p>
        </div>
        <br>
        <span class="negrito">Função&ensp;</span>: Armazena um conjunto de comandos para serem executados pelo computador.<br><br>
        <span class="negrito">Arrays&ensp;</span>: Armazena uma lista de valores.<br><br>
        <span class="negrito">Objetos&ensp;</span>: Armazena as propriedades de um objeto.<br><br>
        </p>
    </div>`,
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'Função',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: `
    <div>
        <br>
        <p>Uma função de JavaScript é um bloco de código projetado para realizar uma tarefa específica.</p>
        <p>Uma função JavaScript é executada quando "algo" a invoca (chama).</p>
        <br>
        <h3 style="color: white;">Exemplo:</h3>
        <br>
        <div class="example">
            <span class="var">function</span> myFunction(<span class="negrito">p1</span>, <span class="negrito">p2</span>) {<br><span style="color:red">
            </span>  &nbsp; <span class="var">return</span> <span class="negrito">p1</span> * <span class="negrito">p2</span>;&nbsp;&nbsp;<span style="color:red">
            </span><span style="color:green">// A função retorna o produto de p1 e p2<br></span><span style="color:red">
            </span>}<br>
        </div>
        <br>
        <br>
        <h2 style="color: white;">Sintaxe da função JavaScript</h2>
        <br>
        <p>Uma função JavaScript é definida com a<span class="negrito">&ensp;function&ensp;</span>palavra - chave, seguida por um<span class="negrito">&ensp;nome&ensp;</span>, seguida por parênteses<span class="negrito">&ensp;()&ensp;</span><br><br>
            Os nomes das funções podem conter letras, dígitos, sublinhados e cifrões (mesmas regras das variáveis).<br><br>
            Os parênteses podem incluir nomes de parâmetros separados por vírgulas:
            <span class="negrito">( parâmetro1, parâmetro2, ... )</span><br><br>
            O código a ser executado, pela função, é colocado entre chaves:<span class="negrito">&ensp;{}</span>
        </p>
        <br>
        <h3 style="color: white;">Exemplo:</h3>
        <br>
        <div class="example">
            <span class="var">function</span>
            <em>name</em>(<em><span class="negrito">parameter1</span>, <span class="negrito">parameter2</span>, <span class="negrito">parameter3</span></em>) {<br><span style="color:red">
            </span>  &nbsp; <span style="color:green">// <em>Código a ser executado</em><br></span><span style="color:red">
            </span>}
        </div>
        <br>
        <br>
        <p>Os<span class="negrito">&ensp;parâmetros da&ensp;</span>função são listados entre parênteses () na definição da função.<br><br>
            Os<span class="negrito">&ensp;argumentos da&ensp;</span>função são os<span class="negrito">&ensp;valores&ensp;</span>recebidos pela função quando ela é chamada.<br><br>
            Dentro da função, os argumentos (os parâmetros) se comportam como variáveis ​​locais.
            <br>
            <br>
        <h2 style="color: white;">Invocação de Função</h2>
        <br>
        <p>O código dentro da função será executado quando "algo"<span class="negrito">&ensp;invocar&ensp;</span>(chamar) a função:</p>
        <ul>
            <li>Quando ocorre um evento (quando um usuário clica em um botão)</li>
            <li>Quando é invocado (chamado) a partir do código JavaScript</li>
            <li>Automaticamente (auto-invocado)</li>
        </ul>
        <br>
        <br>
        <h2 style="color: white;">Retorno da Função</h2>
        <p>Quando o JavaScript atinge uma<span class="negrito">&ensp;return&ensp;</span>instrução, a função para de ser executada.<br><br>
            Se a função foi chamada a partir de uma instrução, o JavaScript "retornará" para executar o código após a instrução de chamada.<br><br>
            As funções geralmente calculam um valor de<span class="negrito">&ensp;retorno</span>. O valor de retorno é "retornado" de volta ao "chamador":
        </p>
        <br>
        <h3 style="color: white;">Exemplo:</h3>
        <br>
        <div class="example">
            <span class="var">let</span> x = myFunction(<span class="negrito">4</span>, <span class="negrito">3</span>);&nbsp;&nbsp;&nbsp;<span style="color:green">// A função é chamada, o valor de retorno terminará em x<br></span><br>
            <span class="var">function</span> myFunction(<span class="negrito">a</span>, <span class="negrito">b</span>) {<br><span class="negrito">
            </span>  &nbsp; <span class="var">return</span> <span class="negrito">a</span> * <span class="negrito">b</span>;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span class="negrito">
            </span><span style="color:green">// A função retorna o produto de a e b<br><span class="negrito">
            </span></span>}<br></span>
            <br>
            O resultado em x será: <span class="negrito">12</span>
        </div>
    </div>`,
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'if else',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: ``,
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'Switch',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: '',
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'While',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: '',
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'For',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: '',
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'Object',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: '',
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    },
    {
    titulo: 'Arrays',
    video: 'https://www.youtube.com/embed/3K3MMtoG8rY',
    texto: '',
    enunciado:`
    <div class="atividade" id="atividade">
        <p>Faça tal coisa blablalbla</p>
    </div>
    `,
    descricao:'Rapido',
    valor:`function x() {
    console.log("Hello world!");
    }`,
    duracao:'2 min',
    }
    ]
<h1>BLOG LARAVEL - API RESTful</h1>

<p>Um pequeno blog criado com o framework Laravel, possuindo tanto uma interface web quanto uma API RESTful com autenticação OAuth2.</p>

<h3>INSTALAÇÃO</h3>

<p>Clone o repositório <br/>
<code> git clone https://github.com/wilterson/BlogLaravel-API-RESTful.git blog-laravel</code></p>

<p>Acesse a pasta do projeto<br/>
<code>cd blog-laravel</code></p>

<p>Instale as dependências do projeto<br/>
<code>composer install</code></p>

<p>Crie o arquivo .env<br/>
<code>cp .env.example .env</code></p>

<p>Crie uma nova chave para o projeto<br/>
<code>php artisan key:generate</code></p>

<h3>Editando o arquivo .env</h3>
<p>Edite o arquivo .env e coloque as informações do seu Banco de Dados, nas seguintes linhas<br/>
<code>DB_CONNECTION=mysql </code>
<code>DB_HOST=</code>
<code>DB_PORT=</code>
<code>DB_DATABASE=</code>
<code>DB_USERNAME=</code>
<code>DB_PASSWORD=</code></p>

<h3>Criando as tabelas do banco.</h3>
<p>Depois de editar o arquivo .env com as informações do banco de dados, rode o seguinte comando para criar as tabelas do banco de dados.<br/>
<code>php artisan migrate --seed</code></p>

<p>Após executar os comandos acima, o projeto estará configurado. Bansta rodar o seguinte comando para poder acessá-lo:<br/>
<code>php artisan serve</code></p>

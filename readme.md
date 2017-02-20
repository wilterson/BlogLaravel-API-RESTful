<h1>BLOG LARAVEL - API RESTful</h1>

<p>Um pequeno blog criado com o framework Laravel, possuindo tanto uma interface web quanto uma API RESTful com autenticação OAuth2.</p>

<h3>INSTALAÇÃO</h3>

<p>Clone o repositório <br/></p>
<code> git clone https://github.com/wilterson/BlogLaravel-API-RESTful.git blog-laravel</code>

<p>Acesse a pasta do projeto</p><br/>
<code>cd blog-laravel</code>

<p>Instale as dependências do projeto</p><br/>
<code>composer install</code>

<p>Crie o arquivo .env</p><br/>
<code>cp .env.example .env</code>

<p>Crie uma nova chave para o projeto</p><br/>
<code>php artisan key:generate</code>

<h3>Editando o arquivo .env</h3>
<p>Edite o arquivo .env e coloque as informações do seu Banco de Dados.</p>
<code>
DB_CONNECTION=mysql
DB_HOST=
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
</code>

<h3>Criando as tabelas do banco.</h3>
<p>Depois de editar o arquivo .env com as informações do banco de dados, rode o seguinte comando para criar as tabelas do banco de dados.</p>
<code>php artisan migrate --seed</code>

<p>Após executar os comandos acima, o projeto estará configurado. Bansta rodar o seguinte comando para poder acessá-lo:</p>
<code>php artisan serve</code>

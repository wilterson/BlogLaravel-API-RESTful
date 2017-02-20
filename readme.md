

<a href='#english'>English</a> | 
<a href='#portugues'>Portugês</a>

<br/><br/><br/>
<div>
<h1>BLOG LARAVEL - API RESTful</h1>

<p>A small blog created with the Laravel framework, having both a web interface and a RESTful API with OAuth2 authentication.</p>

<h3>INSTALLATION</h3>

<p>Clone the repository<br/>
<code> git clone https://github.com/wilterson/BlogLaravel-API-RESTful.git blog-laravel</code></p>

<p>Access the project folder<br/>
<code>cd blog-laravel</code></p>

<p>Install the project dependencies<br/>
<code>composer install</code></p>

<p>Create the .env file<br/>
<code>cp .env.example .env</code></p>

<p>With the <code> vim .env </ code> command, edit the information for your database.</p>

<h3>Editing the .env file</h3>
<p>First, you must have create a database in your SGBD</p>
<p>Edit the .env file and replace the database information in following lines.<br/>

<pre>
<code>DB_CONNECTION= 
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
</code>
</pre>
</p>

<p>Create a new key for the project<br/>
<code>php artisan key:generate</code></p>

<h3>Creating the Database tables.</h3>
<p>After you edit the .env file with the database information, run the following command to create the database tables.<br/>
<code>php artisan migrate --seed</code></p>

<p>After executing the commands above, the project is configured. Now run the following command to access it:<br/>
<code>php artisan serve</code></p>

<br/>

<p><b>Note:</b> The system documentation (diagrams, use cases) is located in the "documentation" folder, at the root of the project.</p>
</div>

<br/><br/>

<div id="portugues">
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

<p>Com o comando <code>vim .env</code>, edite as informações referentes ao seu banco de dados.</p>

<h3>Editando o arquivo .env</h3>
<p>Edite o arquivo .env e coloque as informações do seu Banco de Dados, nas seguintes linhas<br/>

<pre>
<code>DB_CONNECTION= 
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
</code>
</pre>
</p>

<p>Crie uma nova chave para o projeto<br/>
<code>php artisan key:generate</code></p>

<h3>Criando as tabelas do banco.</h3>
<p>Depois de editar o arquivo .env com as informações do banco de dados, rode o seguinte comando para criar as tabelas do banco de dados.<br/>
<code>php artisan migrate --seed</code></p>

<p>Após executar os comandos acima, o projeto estará configurado. Bansta rodar o seguinte comando para poder acessá-lo:<br/>
<code>php artisan serve</code></p>

<br/>

<p><b>Obs:</b> A documentação do sistema (diagramas, use cases) se encontram na pasta "documentation", na raiz do projeto.</p>
</div>
# Teste-Desenvolvedor-Jr

_Meu primeiro projeto em Laravel_

### O que precisará ter instalado no computador:
  * Composer
  * Visual Studio Code (outro outro programa para ler o código)
  * Xampp
  * Git (foi necessaria a sua instalação por conta de um erro, o laravel precisava do git)
<br><br>
## 1. Preparando o ambiente

### Laravel

 Você terá que criar um projeto laravel por meio de linhas de comando do composer, no terminal do VSCode. O comando é:
*__<p>composer create-project laravel/laravel Teste</p>__*

<p> Criará os seguintes arquivos </p>

![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/pasta_laravel.png)

### MySql

 Para o banco dados vamos usar o XAMPP, abra o painel de controle e após isso abra o PhpMyAdmin clicando no botão _admin_. Depois crie um banco de dados chamado _restaurante_.
Agora podemos importar o arquivo _restaurante.sql_ para dentro do novo banco de dados criado

![img](https://github.com/AndressaCristiny/Teste-Desenvolvedor-Jr/blob/main/Imgs/importar_bd.png)
<br><br>
## 2. Onde colocar cada arquivo .php

### EventController.php
 O arquivo deve ser inserido dentro de _app\Http\Controllers_
 
 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/EventController.png)
 <br>
 
 Creio que o erro esteja relacionado a algo de minhas configurações. Mas senão fosse esse pequeno imprevisto, eu conseguiria consumir a API, passar para uma variavel e após isso salvar no banco de dados e também mostrar as informações da API para o usuário.

### Produto.php
 Colocar dentro de _app\Models_

 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/models.png)

### Ibge.php
Colocar dentro de _app\Models_

 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/models.png)

### restaurante.blade.php
 Apague o arquivo "Welcome.blade.php" e coloque o arquivo "restaurante.blade.php dentro" de _resource\views_
 
 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/views.png)

### Pasta "php"
O arquivo deve ser inserido dentro de _resource\views_

![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/views.png)

### web.php
 Copie o conteudo de dentro do arquivo e cole no já existente ou substitua por esse arquivo do github. _routes\_

![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/routes.png)

### api.php
Copie o conteudo de dentro do arquivo e cole no já existente ou substitua por esse arquivo do github. _routes\_

![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/routes.png)

<br><br>
## 3. Soluções sobre os erros

 Como dito, está é a minha primeira vez desenvolvendo um projeto em Laravel. Consegui me adaptar bem durante esses 3 dias, surgiam alguns erros/bugs uma hora ou outra, mas consegui desenvolver bem. Porém surgiu o seguinte erro:
 
 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/error.png)

 Eu consegui criar a API da lista de produtos, mas não consegui puxar as informações da API como eu esperava, os códigos que usei para consumir a API são
 
![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/use.png)

![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/ibge.png)

**_API criada com sucesso_**
![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/api.png)

Creio que o erro se origina de alguma configuração minha. Senão fosse por esse imprevisto, eu conseguiria consumir a API para salvar no banco de dados

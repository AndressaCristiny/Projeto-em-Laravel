# Teste-Desenvolvedor-Jr

_Meu primeiro projeto em Laravel_

### O que precisará ter instalado no computador:
  * Composer
  * Visual Studio Code (outro outro programa para ler o código)
  * Xampp
  * Git (foi necessaria a sua instalação por conta de um erro, o laravel precisava do git)

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

## 2. Onde colocar cada arquivo .php

### EventController.php
 O arquivo deve ser inserido dentro de _app\Http\Controllers_
 
 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/EventController.png)

### Produto.php
 Colocar dentro de _app\Models_

 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/models.png)

### Ibge.php
Colocar dentro de _app\Models_

 ![img](https://raw.githubusercontent.com/AndressaCristiny/Teste-Desenvolvedor-Jr/main/Imgs/models.png)

### restaurante.blade.php
### Pasta "php"
### web.php
### api.php

1- Criar migration e model
  . php artisan make:model Pessoa -m
  i. Isso cria migration e model.

2- Editar as migration & Criar as tabelas
   . editar de acordo com os campos necessários
   . php artisan migrate --Isso cria as tabelas no banco.

3- Criar o Controller
  . php artisan make:Controller PessoaController --Resource  **Isso cria um controller com métodos para CRUD.

4- Configurar as rotas
 . em routes/web.php

 5- implementar o Controller
    .onde tvamos Configurar os metodos

6- configurara model em Model Pessoa.php

7- Criar as views Blade
  

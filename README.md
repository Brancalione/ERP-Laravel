Este é um projeto de ERP onde é possível manipular produtos e estoque dos mesmo.

Para rodar este projeto é necessário ter o PHP 8.0.30 V e Laravel 9 V

Mais informações em 
https://laravel.com/docs/9.x/installation

Banco de dados utilizado: MYSQL
Necessário criar o data-base manualmente com o nome: "loja"

Ao abrir seu IDE, executar os comandos:

composer global require laravel/installer /n
php artisan migrate /n
php artisan db:seed --class=ProductsSeeder /n
php artisan serve






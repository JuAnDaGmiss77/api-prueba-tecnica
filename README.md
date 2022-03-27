## Api realizada en laravel 8 y mysql
## siga las indicaciones
- cambie el nombre del archivo .env.example a .env
- la api necesitara generar una key despues de clonado 
- llene los siguientes campos del archivo .env: MAIL_USERNAME MAIL_PASSWORD
- dichos campos corresponden a un email de gmail y la contraseña, la cuenta de gmail a utilizar debera tener habilitada la opcion -> Permitir el acceso de apps menos seguras: SÍ

## recomendacion
en el archivo .env puede cambiar el nombre de la base de datos modificando -> DB_DATABASE=laravel
## ejecute los siguientes comandos en la raiz del proyecto
- composer install
- php artisan migrate
- php artisan serve

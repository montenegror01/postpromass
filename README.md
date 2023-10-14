Para probar en local yo utilizo laragon en donde al se puede probar el presente proyecto

1.- Ya que se tiene laragon instalado y funcionando se crea una carpeta en www llamada postpromass

2.- Se ingresa mediante consola a la dirección de la carpeta y se realiza lo siguiente:

    1. git clone https://github.com/montenegror01/postpromass.git
    2. composer install
    3. Se crea una base de datos llamada postpromass
    3. php artisan key:generate
    4. php artisan migrate
    5. Para ver el proyecto se ingresa a postpromass.test (si es el caso de que laragon por default te crea esa url al iniciar los servicios.


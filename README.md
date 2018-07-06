# Curso de PHP con Laravel
# laratter
Proyecto para el Curso de Laravel de Platzi
### Trayectoria del curso:
#### Instalación de Laravel
- Debe estar instalado php, ya sea el entorno XAMPP o WAMP.
- Debe estar instalado composer
- Una vez teniendo esto, se procede a instalar Laravel mediante la siguiente instrucción:
    ```
    composer global require "laravel/installer" 
    laravel new nuevo-proyecto
    ```
#### Inicia el Proyecto de Laravel
Comenzaremos lanzando nuestro servidor de larevel y para inicializar el servidor utilizamos el comando “php artisan serve”

    ```
    php artisan serve
    ```
    
Laravel nos genera todos los archivos necesarios para nuestro web app ahora seguiremos construyendo nuestra aplicación, modificaremos 
nuestros archivos de rutas y cómo mostrar html en laravel, comenzaremos editando el archivo web.php aquí observamos que tenemos en 
view: welcome, este es el archivo que se nos mostró al entrar a localhost:8000 y lo podemos editar para ver los cambios.

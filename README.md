# Evaluación Backend - API de Regiones, Provincias, Ciudades y Calles 

## Requisitos
* PHP 8.2 o superior
* Composer
* Servidor de base de datos (MySQL 5.7)


## Instalación
* Clonar el repositorio.
* Instalar dependencias `composer install`
* Copiar el archivo de configuración `cp .env.example .env`
* Configurar el archivo `.env`
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_de_datos
DB_USERNAME=tu_usuario
DB_PASSWORD=tu_contraseña
```
* Ejecutar:
* * `php artisan key:generate`
* * `php artisan migrate --seed`
* * `php artisan serve`


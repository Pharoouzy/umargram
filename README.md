#UmarGram
## Configuration

You can setup the development environment with the system you prefer. Recomended:
- [Laravel Valet](https://laravel.com/docs/5.8/valet) (available on OS X and Linux). 
- [Homestead](https://laravel.com/docs/5.8/homestead) (available on Windows, OS x and Linx).
- Any other development environment.

## Installation

Install the backend dependencies:

```bash
composer install
```

Set the application key:

```bash
php artisan key:generate
```



Setup the database. You have to create a databases for the application.

Rename the setup _.env.example_ configuration file to _.env_ adding the credential to connect the DB:

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ibdb
DB_USERNAME=usuario_mysql
DB_PASSWORD=password_mysql
```



Launch migrations and seeds:

```bash
php artisan migrate --seed
```

This applications has been developed using __Mailtrap__ service to manage email. Setup in the __.env__ file with the credentials of that service:

```
MAIL_DRIVER=log
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
```

After that the application should work without problems.

# Swagger

Laravel password reset.

### Installing

Install package using Composer:

```
        composer require paulkatipunan/swagger
```

Register the package's service provider in config/app.php:

```
        'providers' => [

                PaulKatipunan\ServiceProvider::class,

            ],

```

Run the Artisan's command:

```
        php artisan vendor:publish --provider="PaulKatipunan\ServiceProvider"

```
This will publish the swagger ui blade file and swagger files in laravel public folder

```

```
Look at the swagger.yaml file in public folder and look at the example POST and GET 
```

Run the Artisan's command:

```
        php artisan serve

```
Add visit http://127.0.0.1:8000/api-documentation




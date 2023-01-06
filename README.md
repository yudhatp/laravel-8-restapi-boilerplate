## Laravel 8 Rest API Boilerplate  

This is a boilerplate for Laravel 8 Rest API with JWT Authentication.


## Author

Yudha T. Putra


## How To

- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider
- php artisan jwt:secret
- php artisan migrate


## Routes

- Login, Register, Logout, Refresh
- CRUD Categories


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
# laravel-middleware-ssl
Laravel middleware for handling SSL

## Sources
- [Laravel middleware documentation](https://laravel.com/docs/5.6/middleware)
- [Laravel package creation](https://devdojo.com/blog/tutorials/how-to-create-a-laravel-package)

## Installation 
1. Add provider to config/app.php
```bash
'providers' => [
    // ...
    se\eab\php\laravel\middleware\ssl\provider\EabSslServiceProvider::class,
];
```
<?php

namespace se\eab\Providers;

use Illuminate\Support\ServiceProvider;

class EabSSLServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        
        $this->publishes([
            __DIR__.'SSLMiddleware.php' => app_path("Http/Middleware/EabMiddlewareSSL.php")
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

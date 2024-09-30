<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Middleware global
    ];

    protected $routeMiddleware = [
        // Middleware untuk route
        'role' => \App\Http\Middleware\CheckRole::class,
    ];
}

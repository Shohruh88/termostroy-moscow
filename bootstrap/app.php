<?php
//
//use Illuminate\Foundation\Application;
//use Illuminate\Foundation\Configuration\Exceptions;
//use Illuminate\Foundation\Configuration\Middleware;
//
//return Application::configure(basePath: dirname(__DIR__))
//    ->withRouting(
//        web: __DIR__.'/../routes/web.php',
//        commands: __DIR__.'/../routes/console.php',
//        health: '/up',
//    )
//    ->withMiddleware(function (Middleware $middleware) {
//        $middleware->alias([
//            'locale' => \App\Http\Middleware\LocaleMiddleware::class,
//        ]);
//    })
//    ->withExceptions(function (Exceptions $exceptions) {
//        //
//    })->create();
//


use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Bu yerda kerakli middleware'larni yozasiz

        // Route middleware sifatida 'locale' ni alias qilamiz
        $middleware->alias([
            'locale' => \App\Http\Middleware\LocaleMiddleware::class,
        ]);

        // (ixtiyoriy) Agar 'locale' middleware'ni global qilib ishlatmoqchi bo‘lsangiz:
        // $middleware->global(\App\Http\Middleware\LocaleMiddleware::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();

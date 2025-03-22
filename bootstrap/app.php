<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Exceptions\Handler as ExceptionsHandler;
use Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode;

return Application::configure(dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up'
    )
    ->withMiddleware(function ($middleware) {
        // Añadir middleware aquí
        $middleware->push(CheckForMaintenanceMode::class);
    })
    ->withExceptions(function (ExceptionsHandler $exceptions) {
        // Configurar excepciones aquí
        $exceptions->reportable(function ($e) {
            // Manejo de excepciones
        });
    })
    ->create();

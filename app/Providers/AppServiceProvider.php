<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * Este método es utilizado para registrar cualquier servicio o clase
     * en el contenedor de servicios de Laravel. Aquí puedes registrar
     * bindings, interfaces o cualquier cosa que se necesite al inicio.
     */
    public function register(): void
    {
        // Ejemplo: Registra un servicio, interfaz o clase en el contenedor
        // $this->app->bind(SomeInterface::class, SomeService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * Este método es ejecutado después de que todos los servicios han sido registrados.
     * Se utiliza para inicializar cualquier configuración de servicios que
     * debe ejecutarse después del registro, como la configuración de rutas,
     * eventos, o cualquier otro aspecto de la aplicación.
     */
    public function boot(): void
    {
        // Ejemplo: Registrar una vista compartida
        // view()->share('key', 'value');

        // Si es necesario, puedes configurar algún comportamiento en particular,
        // por ejemplo, si quieres que todos los valores de un campo en la base de datos 
        // se conviertan a minúsculas puedes hacer algo como esto:
        // \Illuminate\Support\Facades\Schema::defaultStringLength(191);
    }
}


<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Artisan;

abstract class TestCase extends BaseTestCase
{
    /**
     * Set up the application for the test.
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        // Puedes añadir configuraciones adicionales que necesitas antes de cada prueba
        // Por ejemplo, ejecutar migraciones:
        Artisan::call('migrate');
    }

    /**
     * Tear down the application after the test.
     *
     * @return void
     */
    public function tearDown(): void
    {
        // Puedes agregar limpieza después de las pruebas si es necesario
        Artisan::call('migrate:reset');

        parent::tearDown();
    }
}

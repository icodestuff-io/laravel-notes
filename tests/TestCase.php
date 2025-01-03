<?php

declare(strict_types=1);

namespace Icodestuff\LaravelNotes\Tests;

use Icodestuff\LaravelNotes\Tests\Stubs\Models\User;
use Orchestra\Testbench\TestCase as BaseTestCase;


abstract class TestCase extends BaseTestCase
{
    /* -----------------------------------------------------------------
     |  Main Methods
     | -----------------------------------------------------------------
     */

    public function setUp(): void
    {
        parent::setUp();

        $this->migrate();;
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            \Icodestuff\LaravelNotes\LaravelNotesServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application   $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        // Laravel App Configs
        $app['config']->set('auth.model', User::class);

        // Laravel Messenger Configs
        $app['config']->set('notes.authors.model', User::class);
    }

    /* -----------------------------------------------------------------
     |  Other Methods
     | -----------------------------------------------------------------
     */

    /**
     * Migrate the tables.
     */
    protected function migrate(): void
    {
        $migrations = array_map('realpath', [
            __DIR__.'/../database/migrations',
            __DIR__.'/fixtures/migrations',
        ]);

        foreach ($migrations as $path) {
            $this->loadMigrationsFrom($path);
        }
    }
}

<?php

namespace Demency\Commons;

use Illuminate\Support\ServiceProvider;

class CommonsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if (class_exists('CreateCommonsTables')) {
            return;
        }

        $stub      = realpath(dirname(__DIR__).'/tests/database/migrations/') . '/';
        $target    = database_path('migrations') . '/';

        $this->publishes([
            $stub . '0000_00_00_000000_create_commons_tables.php'        => $target . date('Y_m_d_His', time()) . '_create_commons_tables.php',
        ], 'migrations');

        $this->publishes([
            __DIR__ . '/../tests/config/commons.php' => config_path('commons.php'),
        ], 'config');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}

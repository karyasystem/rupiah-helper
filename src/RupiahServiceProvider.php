<?php

namespace Karyasystem\RupiahHelper;

use Illuminate\Support\ServiceProvider;

class RupiahServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('rupiah-helper', function () {
            return new Rupiah();
        });
    }

    public function boot()
    {
        // Publikasi konfigurasi
        $this->publishes([
            __DIR__ . '/../config/rupiah.php' => config_path('rupiah.php'),
        ], 'config');
    }
}

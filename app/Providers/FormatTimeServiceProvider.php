<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FormatTimeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        require_once app_path() . '/Helpers/FormatTime.php';
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}

<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Symfony\Component\Console\Helper\ProgressBar;

class ConsoleStylesProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        ProgressBar::setFormatDefinition(
            'custom_format',
            'Custom Format: Progress %percent%'
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

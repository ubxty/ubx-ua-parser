<?php

namespace Ubxty\UAParser;

use Illuminate\Support\ServiceProvider;
use Ubxty\UAParser\Services\UAParserService;

class UAParserServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton('ua-parser', function ($app) {
            return new UAParserService($app['request']->header('User-Agent'));
        });

        $this->mergeConfigFrom(__DIR__.'/../config/ua-parser.php', 'ua-parser');
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/ua-parser.php' => config_path('ua-parser.php'),
        ], 'config');
    }
}

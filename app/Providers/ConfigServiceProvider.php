<?php

namespace App\Providers;

use App\Config\Config;
use App\Config\Loaders\ArrayLoader;
use League\Container\ServiceProvider\AbstractServiceProvider;

class ConfigServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        'config'
    ];

    public function register()
    {
        $container = $this->getContainer();

        $container->share('config', function() {

            $loader = new ArrayLoader([
                'app' => base_path('config/app.php')
            ]);

            return (new Config())->load([$loader]);
        });
    }
}
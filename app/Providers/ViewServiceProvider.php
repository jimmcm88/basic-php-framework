<?php

namespace App\Providers;

use App\Views\View;
use League\Container\ServiceProvider\AbstractServiceProvider;
use Twig_Environment;
use Twig_Loader_Filesystem;

class ViewServiceProvider extends AbstractServiceProvider
{
    protected $provides = [
        View::class
    ];

    public function register()
    {
        $container = $this->getContainer();

        $container->share(View::class, function() {
            $loader = new Twig_Loader_Filesystem(__DIR__ . '/../../views');
            $twig = new Twig_Environment($loader, [
                'cache' => false
            ]);

            return new View($twig);
        });




    }
}
<?php

use League\Container\Container;

$container = new Container;

$container->delegate(
    new \League\Container\ReflectionContainer()
);

$container->addServiceProvider(new \App\Providers\AppServiceProvider());
$container->addServiceProvider(new \App\Providers\ViewServiceProvider());
$container->addServiceProvider(new \App\Providers\ConfigServiceProvider());
<?php

use App\Config\Config;
use League\Route\RouteCollection;

session_start();

require_once __DIR__ . '/../vendor/autoload.php';

try {
    $dotenv = (new Dotenv\Dotenv(__DIR__ . '/..//'))->load();
} catch(Dotenv\Exception\InvalidPathException $e) {
    //
}

require_once __DIR__ . '/container.php';

$route = $container->get(RouteCollection::class);


require_once __DIR__ . '/../routes/web.php';

$response = $route->dispatch(
    $container->get('request'), $container->get('response')
);
<?php

namespace App\Controllers;

use App\Views\View;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class HomeController
{

    public function __construct(View $view)
    {
        $this->view = $view;
    }

    public function index(RequestInterface $request, ResponseInterface $response)
    {
        return $this->view->render($response, 'home.twig');
    }
}
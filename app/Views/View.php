<?php

namespace App\Views;

use Psr\Http\Message\ResponseInterface;

class View
{
    protected $twig;


    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function render(ResponseInterface $response, $view, $data = [])
    {
        $response->getBody()->write(
            $this->twig->render($view, $data)
        );

        return $response;
    }
}
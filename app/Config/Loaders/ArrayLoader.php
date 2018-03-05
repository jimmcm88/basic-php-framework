<?php

namespace App\Config\Loaders;

use App\Config\Loaders\Loader;

class ArrayLoader implements Loader
{
    protected $files;

    public function __construct(array $files)
    {
        $this->files = $files;
    }

    public function parse()
    {

    }
}
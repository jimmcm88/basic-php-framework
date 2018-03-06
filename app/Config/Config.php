<?php

namespace App\Config;

use App\Config\Loaders\Loader;

class Config
{
    protected $config = [];

    public function load(array $loaders)
    {
        foreach ($loaders as $loader) {
            if (!$loader instanceof Loader) {
                continue;
            }
            $this->config = array_merge($this->config, $loader->parse());
        }
        return $this;
    }

    public function get($key, $defualt = null)
    {
        $filtered = $this->config;

        foreach (explode('.', $key) as $segment) {
            if ($this->exists($filtered, $segment)) {
                $filtered = $filtered[$segment];
                continue;
            }

            return;
        }

        return $filtered ?? $defualt;
    }

    public function exists(array $config, $key)
    {
        return array_key_exists($key, $config);
    }
}
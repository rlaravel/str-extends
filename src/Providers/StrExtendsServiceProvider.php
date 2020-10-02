<?php

namespace Rlaravel\StrExtends\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str as LaravelStr;
use Rlaravel\StrExtends\Str;

/**
 * Class StrExtendsServiceProvider
 * @package Rlaravel\StrExtends\Providers
 */
class StrExtendsServiceProvider extends ServiceProvider
{
    /**
     * @throws \ReflectionException
     */
    public function boot()
    {
        LaravelStr::mixin(new Str);

        $this->registerHelpers();
    }

    public function registerHelpers()
    {
        if (file_exists($file = app_path(__DIR__ . '/../helpers.php')))
        {
            require $file;
        }
    }
}
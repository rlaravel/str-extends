<?php

namespace Rlaravel\StrExtends\Test;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Rlaravel\StrExtends\Providers\StrExtendsServiceProvider;

/**
 * Class TestCase
 * @package Rlaravel\StrExtends\Test
 */
class TestCase extends BaseTestCase
{
    /**
     * @param \Illuminate\Foundation\Application $app
     * @return array|string[]
     */
    protected function getPackageProviders($app)
    {
        return [StrExtendsServiceProvider::class];
    }
}
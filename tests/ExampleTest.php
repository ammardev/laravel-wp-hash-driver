<?php

namespace Ammardev\LaravelWpHashDriver\Tests;

use Orchestra\Testbench\TestCase;
use Ammardev\LaravelWpHashDriver\LaravelWpHashDriverServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelWpHashDriverServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}

<?php

namespace Ammardev\LaravelWpHashDriver;

use Illuminate\Support\ServiceProvider;

class LaravelWpHashDriverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app['hash']->extend('wp', function() {
            return new WordpressHasher;
        });
    }
}

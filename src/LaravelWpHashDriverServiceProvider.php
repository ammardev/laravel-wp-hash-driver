<?php

namespace Ammardev\LaravelWpHashDriver;

use Illuminate\Support\ServiceProvider;

class LaravelWpHashDriverServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->make('hash')->extend('wp', function() {
            return new WordpressHasher;
        });
    }
}

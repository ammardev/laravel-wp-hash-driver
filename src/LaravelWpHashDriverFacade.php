<?php

namespace Ammardev\LaravelWpHashDriver;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ammardev\LaravelWpHashDriver\Skeleton\SkeletonClass
 */
class LaravelWpHashDriverFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-wp-hash-driver';
    }
}

<?php

namespace Ammardev\LaravelWpHashDriver\Tests;

use Orchestra\Testbench\TestCase;
use Ammardev\LaravelWpHashDriver\LaravelWpHashDriverServiceProvider;
use Illuminate\Support\Facades\Hash;

class WordpressHashDriverTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelWpHashDriverServiceProvider::class];
    }

    /** @test */
    public function check_migrated_password()
    {
        $this->assertTrue(Hash::driver('wp')->check('123456', '$P$BL0GR/Qo4U0HUypZD/N3iUDTGZumqp.'));
    }

    /** @test */
    public function check_package_hashed_password()
    {
        $hashed = Hash::driver('wp')->make('123456');
        $this->assertTrue(Hash::driver('wp')->check('123456', $hashed));
    }

    /** @test */
    public function check_wrong_password()
    {
        $hashed = Hash::driver('wp')->make('123456');
        $this->assertFalse(Hash::driver('wp')->check('abcdefg', $hashed));
    }
}

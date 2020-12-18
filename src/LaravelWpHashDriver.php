<?php

namespace Ammardev\LaravelWpHashDriver;

use Hautelook\Phpass\PasswordHash;
use Illuminate\Contracts\Hashing\Hasher;

class WordpressHasher implements Hasher
{
    protected $hasher;

    public function __construct()
    {
        $this->hasher = new PasswordHash(8, true);
    }

    /**
     * Get information about the given hashed value.
     *
     * @param  string  $hashedValue
     * @return array
     */
    public function info($hashedValue)
    {
        return [];
    }

    /**
     * Hash the given value.
     *
     * @param  string  $value
     * @param  array  $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        return $this->hasher->HashPassword($value);
    }

    /**
     * Check the given plain value against a hash.
     *
     * @param  string  $value
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        if (strlen($hashedValue) <= 32) {
            return hash_equals($hashedValue, md5($value));
        }
        return $this->hasher->CheckPassword($value, $hashedValue);
    }

    /**
     * Check if the given hash has been hashed using the given options.
     *
     * @param  string  $hashedValue
     * @param  array  $options
     * @return bool
     */
    public function needsRehash($hashedValue, array $options = [])
    {
        return false;
    }
}


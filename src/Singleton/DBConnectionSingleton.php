<?php

namespace App\Singleton;

class DBConnectionSingleton
{
    private static ?DBConnectionSingleton $instance = null;

    private function __construct()
    {
    }

    private function __clone(): void
    {
    }

    public static function getConnection(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function doSomething(): string
    {
        return 'It worked!';
    }
}
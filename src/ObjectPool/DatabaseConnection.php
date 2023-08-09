<?php

namespace App\ObjectPool;

class DatabaseConnection
{
    private static ?DatabaseConnection $instance = null;

    private function __construct()
    {
        // private constructor to prevent direct instantiation
    }

    public static function getInstance(): self
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function query(string $query): void
    {
        // Execute the given query...
        echo "Executing query: $query\n";
    }
}
<?php

namespace App\ObjectPool;

class DatabaseConnectionPool
{
    private array $availableConnections = [];
    private array $inUseConnections = [];

    public function get(): DatabaseConnection
    {
        if (count($this->availableConnections) === 0) {
            $connection = DatabaseConnection::getInstance();
            $this->inUseConnections[] = $connection;
            return $connection;
        } else {
            $connection = array_pop($this->availableConnections);
            $this->inUseConnections[] = $connection;
            return $connection;
        }
    }

    public function release(DatabaseConnection $connection): void
    {
        $index = array_search($connection, $this->inUseConnections, true);
        if ($index !== false) {
            unset($this->inUseConnections[$index]);
            $this->availableConnections[] = $connection;
        }
    }
}

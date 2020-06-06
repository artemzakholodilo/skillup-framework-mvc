<?php

namespace App\Db;

// Singleton
class Connection
{
    private static $connection = null;
    private static $dsn = 'mysql:dbname=php_lessons;host=127.0.0.1';

    /**
     * Connection constructor.
     * @todo finish with singleton
     */
    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (is_null(self::$connection)) {
            self::$connection = new \PDO(self::$dsn, 'artem', '1111');
            return self::$connection;
        } else {
            return self::$connection;
        }
    }
}
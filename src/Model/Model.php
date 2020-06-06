<?php

namespace App\Model;

use App\Db\Connection;

abstract class Model
{
    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::getInstance();
    }

    abstract protected function getFields();

    public function getConnection()
    {
        return $this->connection;
    }

    public function save()
    {

    }
}
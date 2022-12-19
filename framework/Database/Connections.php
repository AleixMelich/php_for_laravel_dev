<?php

namespace Framework\Database;

use PDO;

class Connection
{
    private $config;

    public function __construct($config)
    {
        $this->config = $config;
    }

    function connectDB(){ //Dependency injection
        return new PDO(
            $this->config['database']['databasetype'] . ':host=' . $this->config['database']['host'] . ';dbname=' . $this->config['database']['name'],
            $this->config['database']['user'],
            $this->config['database']['password']);
    }
}
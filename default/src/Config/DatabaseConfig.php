<?php

//When this class will be called and assigned it will contain env file variables for the database connection 
class DatabaseConfig {
    private $db;
    private $userName;
    private $pass;
    private $host;
    private $dsn;

    public function __construct() {
        $this->db = getenv('MYSQL_DATABASE');
        $this->userName = getenv('MYSQL_USER');
        $this->pass = getenv('MYSQL_PASSWORD');
        $this->host = getenv('DB_HOST');

        foreach ([
            'DB_HOST' => $this->host, 'MYSQL_DATABASE' => $this->db, 'MYSQL_USER' => $this->userName, 'MYSQL_PASSWORD' => $this->pass
            ] as $name => $values) {
                if (empty($values)) throw new  Exception('Missing conifg: '. $name);
            }
        $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=utf8mb4";
    }

    public function getUserName() {
        return $this->userName;
    }
    
    public function getPassword() {
        return $this->pass;
    }

    public function getDsn() {
        return $this->dsn;
    }
}

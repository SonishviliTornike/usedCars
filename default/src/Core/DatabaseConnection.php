<?php


class DatabaseConnection {
    private $pdo;

    public function __construct(private DatabaseConfig $config) {
        try {
            $this->pdo = new PDO($config->getDsn(), $config->getUserName(), $config->getPassword(), [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);

        } catch (PDOException $e) {
            error_log('Error: ' . $e->getMessage() . ' in ' . $e->getFile() . ':' . $e->getLine());

            die('Database connection failed.');
        } 


    }

    public function getDatabaseConnection() {
        return $this->pdo;
    }
}
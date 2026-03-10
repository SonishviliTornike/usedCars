<?php

class DatabaseTable {
    public function __construct(private PDO $pdo, private string $table, private string $vin){ }


    public function insert() {
        
    }
}
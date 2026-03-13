<?php


require_once __DIR__ . '/../src/Config/DatabaseConfig.php';


$config = new DatabaseConfig();

$envData = $config->getDatabaseConfiguration();

print_r($envData);
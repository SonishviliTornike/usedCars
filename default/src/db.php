<?php 


$db = getenv('MYSQL_DATABASE');

$user = getenv('MYSQL_USER');

$pass = getenv('MYSQL_PASSWORD');

$dsn = "mysql:hostname=mysql;dbname=$dbl;charset=utf8mb4";


try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
}catch(PDOException $e) {
    error_log($e->getMessage());
    die('Database connection failed.');
}
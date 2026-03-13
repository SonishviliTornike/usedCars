<?php

require_once __DIR__ . '/../src/Config/DatabaseConfig.php';

require_once __DIR__ . '/../src/Core/DatabaseConnection.php';


$pageTitle = 'Home';

$siteName = 'Used Cars'; 


$config = new DatabaseConfig();


$pdo = new DatabaseConnection($config);

include __DIR__ . '/../templates/layout.html.php';
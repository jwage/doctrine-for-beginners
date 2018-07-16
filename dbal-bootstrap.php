<?php
// dbal-bootstrap.php
require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\DBAL\Configuration;
use Doctrine\DBAL\DriverManager;

$config = new Configuration();

$params = [
    'dbname' => 'doctrine_for_beginners',
    'user' => 'root',
    'password' => '',
    'host' => 'localhost',
    'driver' => 'pdo_mysql',
];

// $params = array(
//     'driver' => 'pdo_sqlite',
//     'path' => 'database_file.sqlite',
// );

return DriverManager::getConnection($params, $config);

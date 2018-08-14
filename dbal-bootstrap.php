<?php
// dbal-bootstrap.php
require_once 'vendor/autoload.php';

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

$connection = DriverManager::getConnection($params, $config);
$connection->connect();

return $connection;

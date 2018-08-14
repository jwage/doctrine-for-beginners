<?php
// examples/11-resultset-caching.php
$connection = require __DIR__ . '/../dbal-bootstrap.php';

use Doctrine\Common\Cache\ArrayCache;
use Doctrine\DBAL\Cache\QueryCacheProfile;

$cache = new ArrayCache();
$config = $connection->getConfiguration();
$config->setResultCacheImpl($cache);

$sql = 'SELECT * FROM users';
$statement = $connection->executeQuery(
    $sql, [], [], new QueryCacheProfile(0, 'get_all_users_cache_key')
);

$users = $statement->fetchAll();

$statement->closeCursor();

print_r($users);

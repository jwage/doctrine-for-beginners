<?php
// examples/06-query-builder-select.php
$connection = include dirname(__DIR__) . '/dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

$queryBuilder
    ->select('id', 'username')
    ->from('users')
    ->where('username = :username')
    ->setParameter('username', 'jwage')
;

// SELECT id, username FROM users WHERE username = :username
$statement = $queryBuilder->execute();

$users = $statement->fetchAll();

print_r($users);

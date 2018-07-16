<?php
// examples/17-query-builder-inspecting-sql.php
$connection = include dirname(__DIR__) . '/dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

$queryBuilder
    ->select('id', 'username')
    ->from('users')
    ->where('username = :username')
    ->setParameter('username', 'jwage')
;

// SELECT id, username FROM users WHERE username = :username
echo $queryBuilder->getSql();

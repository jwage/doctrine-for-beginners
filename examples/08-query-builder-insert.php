<?php
// examples/08-query-builder-insert.php
$connection = include dirname(__DIR__) . '/dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

$queryBuilder
    ->insert('users')
    ->setValue('username', ':username')
    ->setValue('status', ':status')
    ->setParameter('username', 'ocramius')
    ->setParameter('status', 'active')
;

// INSERT INTO users (username, status) VALUES(:username, :status)
$numRowsInserted = $queryBuilder->execute();

echo $numRowsInserted; // 1

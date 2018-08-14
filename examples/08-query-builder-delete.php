<?php
// examples/08-query-builder-delete.php
$connection = include __DIR__ . '/../dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

$queryBuilder
    ->delete('users')
    ->where('username = :username')
    ->setParameter('username', 'ocramius')
;

// DELETE FROM users WHERE username = :username
$numRowsDeleted = $queryBuilder->execute();

echo $numRowsDeleted; // 1

<?php
// examples/07-query-builder-insert.php
$connection = include __DIR__ . '/../dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

// alias users as u, the same as we did on update
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

<?php
// examples/07-query-builder-update.php
$connection = require __DIR__ . '/../dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

$queryBuilder
    ->update('users', 'u')
    ->set('u.username', ':username')
    ->setParameter('username', 'jonwage')
;

// UPDATE users u SET u.username = :username
$numRowsUpdated = $queryBuilder->execute();

echo $numRowsUpdated; // 1

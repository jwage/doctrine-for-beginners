<?php
// examples/09-query-builder-inspecting-sql.php
$connection = include __DIR__ . '/../dbal-bootstrap.php';

$queryBuilder = $connection->createQueryBuilder();

$queryBuilder
    ->select('id', 'username')
    ->from('users')
    ->where('username = :username')
    ->setParameter('username', 'jwage')
;

echo $queryBuilder->getSql();

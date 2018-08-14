<?php
// examples/04-executing-queries.php
$connection = require __DIR__ . '/../dbal-bootstrap.php';

$connection->executeQuery('INSERT INTO users SET username = :username, status = :status', [
    'username' => 'jwage',
    'status' => 'active',
]);

$users = $connection->fetchAll('SELECT * FROM users');

print_r($users);

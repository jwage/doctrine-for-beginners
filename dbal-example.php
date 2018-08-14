<?php
// dbal-example.php
$connection = require __DIR__ . '/dbal-bootstrap.php';

$createTableSql = <<<SQL
CREATE TABLE users (
    id INT AUTO_INCREMENT NOT NULL,
    username VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB;
SQL;

$connection->executeQuery($createTableSql);
$connection->insert('users', [
    'username' => 'jwage',
]);

$users = $connection->fetchAll('SELECT id, username FROM users');

print_r($users);

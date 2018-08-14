<?php
// examples/01-add-to-schema.php
$connection = require __DIR__ . '/../dbal-bootstrap.php';

$schema = new Doctrine\DBAL\Schema\Schema();
$usersTable = $schema->createTable('users');
$usersTable->addColumn('id', 'integer', ['autoincrement' => true, 'notnull' => true]);
$usersTable->addColumn('username', 'string', ['length' => 32]);
$usersTable->setPrimaryKey(['id']);

$queries = $schema->toSql($connection->getDatabasePlatform());

foreach ($queries as $query) {
    $connection->executeQuery($query);
}

print_r($queries);

// CREATE TABLE users (id INT UNSIGNED NOT NULL, username VARCHAR(32) NOT NULL, UNIQUE INDEX UNIQ_1483A5E9F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE = InnoDB

<?php
// examples/01-add-to-schema.php
$connection = include __DIR__ . '/../dbal-bootstrap.php';

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

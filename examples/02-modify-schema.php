<?php
// examples/02-modify-schema.php
$connection = include dirname(__DIR__) . '/dbal-bootstrap.php';

$fromSchema = $connection->getSchemaManager()->createSchema();
$toSchema = clone $fromSchema;

$usersTable = $toSchema->getTable('users');
$usersTable->addColumn('status', 'string', ['length' => 8]);

$queries = $fromSchema->getMigrateToSql($toSchema, $connection->getDatabasePlatform());

foreach ($queries as $query) {
    $connection->executeQuery($query);
}

print_r($queries);

// ALTER TABLE users ADD status VARCHAR(8) NOT NULL

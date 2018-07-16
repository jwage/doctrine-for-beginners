<?php
// examples/02-inspect-schema.php
$connection = include dirname(__DIR__) . '/dbal-bootstrap.php';

$schemaManager = $connection->getSchemaManager();

$databases = $schemaManager->listDatabases();

$tables = $schemaManager->listTables();

foreach ($tables as $table) {
    echo $table->getName() . "\n";

    $columns = $schemaManager->listTableColumns($table->getName());

    foreach ($columns as $column) {
        echo " - " . $column->getName() . "\n";
    }

}

$usersTable = $schemaManager->listTableDetails('users');

$views = $schemaManager->listViews();

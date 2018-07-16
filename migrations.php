<?php
// migrations.php
return [
    'name' => 'Doctrine for Beginners Migrations',
    'migrations_namespace' => 'App\Migrations',
    'table_name' => 'doctrine_migration_versions',
    'column_name' => 'version',
    'column_length' => 255,
    'executed_at_column_name' => 'executed_at',
    'migrations_directory' => '/data/projects/doctrine-for-beginners/src/Migrations',
    'all_or_nothing' => true,
];

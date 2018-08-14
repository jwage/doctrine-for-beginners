<?php
// examples/10-transactions.php
$connection = require __DIR__ . '/../dbal-bootstrap.php';

use Doctrine\DBAL\Connection;

$connection->beginTransaction();
try {
    $connection->executeQuery('UPDATE users SET status = :status WHERE username = :username', [
        'status' => 'inactive',
        'username' => 'jonwage'
    ]);

    throw new Exception('Triggering exception which causes rollback.');

    $connection->commit();
} catch (Exception $e) {
    $connection->rollBack();

    throw $e;
}

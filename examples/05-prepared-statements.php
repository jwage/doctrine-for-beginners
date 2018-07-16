<?php
// examples/05-prepared-statements.php
$connection = include dirname(__DIR__) . '/dbal-bootstrap.php';

// NO
// $sql = "SELECT * FROM users WHERE username = '" . $_GET['username']. "'";

// YES

$sql = 'SELECT * FROM users WHERE username = :username AND status = :status';
$statement = $connection->prepare($sql);
$statement->bindValue('username', 'jwage');
$statement->bindValue('status', 'active');
$statement->execute();

$users = $statement->fetchAll();

print_r($users);

// or

$users = $connection->fetchAll('SELECT * FROM users WHERE username = :username AND status = :status', [
    'username' => 'jwage',
    'status' => 'active',
]);

print_r($users);

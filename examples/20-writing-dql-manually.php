<?php
// examples/20-writing-dql-manually.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

$query = $entityManager->createQuery('SELECT u FROM App\Entities\User u WHERE u.status = :status');

$users = $query->execute([
    'status' => 'inactive',
]);

print_r($users);

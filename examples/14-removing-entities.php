<?php
// examples/14-removing-entities.php
$entityManager = require __DIR__ . '/../orm-bootstrap.php';

use App\Entities\User;

$user = $entityManager->getRepository(User::class)
    ->findOneByUsername('ocramius');

$entityManager->remove($user);
$entityManager->flush();

// DELETE FROM users WHERE id = ?

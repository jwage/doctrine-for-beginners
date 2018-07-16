<?php
// examples/13-updating-entities.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

use App\Entities\User;

$user = $entityManager->getRepository(User::class)
    ->findOneByUsername('jonwage');

$user->setStatus('inactive');

$entityManager->flush();

// UPDATE users SET status = ? WHERE id = ?

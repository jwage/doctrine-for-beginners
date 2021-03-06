<?php
// examples/18-using-entity-repositories.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

use App\Entities\User;

$userRepository = $entityManager->getRepository(User::class);

$inactiveUsers = $userRepository->findInactiveUsers();

print_r($inactiveUsers);

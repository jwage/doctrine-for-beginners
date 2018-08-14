<?php
// examples/15-querying-entities.php
$entityManager = require __DIR__ . '/../orm-bootstrap.php';

use App\Entities\User;

// find one user by username
$user = $entityManager->getRepository(User::class)
    ->findOneByUsername('jonwage');

echo $user->getUsername(); // jonwage

// find all inactive users
$qb = $entityManager->createQueryBuilder()
    ->select('u')
    ->from(User::class, 'u')
    ->where('u.status = :status')
    ->setParameter('status', 'inactive');

$query = $qb->getQuery();

// SELECT u0_.id AS id_0, u0_.username AS username_1, u0_.status AS status_2 FROM users u0_ WHERE u0_.status = ?
$users = $query->execute();

print_r($users);

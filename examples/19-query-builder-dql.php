<?php
// examples/19-query-builder-dql.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

use App\Entities\User;

$qb = $entityManager->createQueryBuilder()
    ->select('u')
    ->from(User::class, 'u')
    ->where('u.status = :status')
    ->setParameter('status', 'inactive');

// SELECT u FROM App\Entities\User u WHERE u.status = :status
echo $qb->getDql();

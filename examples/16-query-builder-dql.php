<?php
// examples/16-query-builder-dql.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

use App\Entities\User;

$qb = $entityManager->createQueryBuilder()
    ->select('u')
    ->from(User::class, 'u')
    ->where('u.status = :status')
    ->setParameter('status', 'inactive');

echo $qb->getDql();

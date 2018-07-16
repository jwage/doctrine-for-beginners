<?php
// src/Entities/UserRepository.php
namespace App\Entities;

use Doctrine\ORM\EntityRepository;

final class UserRepository extends EntityRepository
{
    public function findInactiveUsers() : array
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->where('u.status = :status')
            ->setParameter('status', 'inactive')
            ->getQuery()
            ->execute();
    }
}

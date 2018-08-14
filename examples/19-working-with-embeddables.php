<?php
// examples/19-working-with-embeddables.php
$entityManager = require __DIR__ . '/../orm-bootstrap.php';

use App\Entities\Address;
use App\Entities\User;

$user = $entityManager->getRepository(User::class)
    ->findOneByUsername('jonwage');

$user->setAddress(new Address(
    '1552 Lauderdale Lane',
    '37022',
    'Bethpage',
    'USA'
));

$entityManager->flush();

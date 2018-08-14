<?php
// examples/16-working-with-embeddables.php
$entityManager = require __DIR__ . '/../orm-bootstrap.php';

use App\Entities\Address;
use App\Entities\User;

$user = $entityManager->getRepository(User::class)
    ->findOneByUsername('jonwage');

$user->changeAddress(new Address(
    '1552 Lauderdale Lane',
    '37022',
    'Bethpage',
    'USA'
));

$entityManager->flush();

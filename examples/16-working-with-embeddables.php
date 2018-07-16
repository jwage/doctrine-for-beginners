<?php
// examples/16-working-with-embeddables.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

use App\Entities\Address;
use App\Entities\User;

$user = $entityManager->getRepository(User::class)
    ->findOneByUsername('jonwage');

$address = new Address();
$address->setStreet('1552 Lauderdale Lane');
$address->setPostalCode('37022');
$address->setCity('Bethpage');
$address->setCountry('USA');

$user->setAddress($address);

$entityManager->flush();

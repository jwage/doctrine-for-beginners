<?php
// examples/12-creating-entities.php
$entityManager = include dirname(__DIR__) . '/orm-bootstrap.php';

use App\Entities\Article;
use App\Entities\User;

$user = new User();
$user->setUsername('ocramius');

$article = new Article($user);
$article->setTitle('Test Article');
$article->setBody('Test article body');

$entityManager->persist($user);
$entityManager->persist($article);
$entityManager->flush();

// INSERT INTO users (username, status, address_street, address_postal_code, address_city, address_country) VALUES (?, ?, ?, ?, ?, ?)
// INSERT INTO articles (title, body, user_id) VALUES (?, ?, ?)

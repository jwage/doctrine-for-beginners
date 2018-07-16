<?php
// orm-bootstrap.php
require_once __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$connection = include('dbal-bootstrap.php');

$paths = [__DIR__.'/src/Entities'];
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

return EntityManager::create($connection, $config);

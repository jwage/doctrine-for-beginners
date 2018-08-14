<?php
// orm-bootstrap.php
require __DIR__ . '/vendor/autoload.php';

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$connection = require __DIR__ . '/dbal-bootstrap.php';

$paths = [__DIR__.'/src/Entities'];
$isDevMode = true;

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

return EntityManager::create($connection, $config);

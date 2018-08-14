<?php
// cli-config.php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$entityManager = require __DIR__ . '/orm-bootstrap.php';

return ConsoleRunner::createHelperSet($entityManager);

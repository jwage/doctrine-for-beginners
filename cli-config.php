<?php
// cli-config.php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

$entityManager = include('orm-bootstrap.php');

return ConsoleRunner::createHelperSet($entityManager);

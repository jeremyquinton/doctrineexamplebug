<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once "vendor/autoload.php";

// Load entity configuration from PHP file annotations
// This is the most versatile mode, I advise using it!
// If you don't like it, Doctrine also supports YAML or XML
$isDevMode = true;
$config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"), $isDevMode);

// Set up database connection data
$conn = array(
    'driver'   => 'pdo_pgsql',
    'host'     => 'postgres',
    'dbname'   => 'api',
    'user'     => 'api',
    'password' => 'api'
);

$entityManager = EntityManager::create($conn, $config);


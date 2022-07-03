<?php
    use Doctrine\ORM\Tools\Setup;
    use Doctrine\ORM\EntityManager;

    require_once 'vendor/autoload.php';

    $isDevMode = true;
    $proxyDir = null;
    $cache = null;
    $useSimpleAnnotationReader = false;
    $config = Setup::createAnnotationMetadataConfiguration(array(__DIR__."/src"),$isDevMode,$proxyDir,$cache,$useSimpleAnnotationReader);

    $conn = array(
        'driver' => 'pdo_mysql',
        'host' => 'localhost',
        'dbname' => 'oop',
        'user' => 'root',
        'password' => ''
    );

    $entityManager = EntityManager::create($conn, $config);

//DEV-MODE INFO
//($enable = true [Enables more options in admin dashboard (DEV-MODE)])
//($enable = false [Disables options in admin dashboard (DEV-MODE OFF)])
// $DevName - provides DEV name
// By these two parameters checks if DEV-MODE options should be enabled or not!
// DEV-MODE includes [admin dashboard users approval and changing web sites styles!]

//By default (as it set below) you can accept or decline approvals (if $enabled = false)
//This option is disabled!
    class Dev {
        public $DevName = 'Admin';
        public $enabled = true;
    }
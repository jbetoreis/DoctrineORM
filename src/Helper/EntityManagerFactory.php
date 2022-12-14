<?php

namespace beto\doctrineorm\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    public function getEntityManager():EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';
        $config = Setup::createAnnotationMetadataConfiguration([$rootDir . '/src' ], isDevMode: true);
        $connection = ['driver' => 'sqlsrv', 'path' => $rootDir . '/var/data/banco.mdf'];
        return EntityManager::create($connection, $config);
    }
}

?>
<?php

namespace Beto\Doctrineorm\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;

class EntityManagerFactory
{
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../..';

        // é um array pq ele pode buscar em mais de um lugar
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . '/src'],
            true
        );
        $connection = [
            'driver' => 'pdo_pgsql',
            'path' => $rootDir . '/var/data/banco.pgsql'
        ];
        return EntityManager::create($connection, $config);
    }
}    
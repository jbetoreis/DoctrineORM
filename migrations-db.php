<?php

use Doctrine\DBAL\DriverManager;

return [
    'driver'         => 'pdo_pgsql',
    'user'           => 'postgres',
    'password'       => 'admin',
    'host'           => 'localhost',
    'port'           => 5432,
    'dbname'         => 'postgres',
    'charset'        => 'UTF-8',
];

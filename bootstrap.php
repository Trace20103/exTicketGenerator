<?php
/**
 * Project : exTicketGenerator
 *
 * @author Trace
 * @licence MIT
 */

/**
 * Project : exTicketGenerator
 *
 * @author Trace
 * @licence MIT
 */

require 'vendor/autoload.php';
$cfg = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration([
    __DIR__ . '/src'
], true);
$connectionParams = [
    'dbname' => 'exticket',
    'user' => 'root',
    'password' => 'keklol123',
    'host'=> 'localhost',
    'driver' => 'pdo_mysql'
];
$ent = \Doctrine\ORM\EntityManager::create($connectionParams, $cfg);
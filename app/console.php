<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

require __DIR__.'/../vendor/autoload.php';

use Bisaga\Infrastructure\Console\PingCommand;
use Symfony\Component\Console\Application;

$application = new Application();

// Demo command 
$application->add(new PingCommand());

//Migrations commands 
$application->add(new \Doctrine\DBAL\Migrations\Tools\Console\Command\DiffCommand());
$application->add(new \Doctrine\DBAL\Migrations\Tools\Console\Command\ExecuteCommand());
$application->add(new \Doctrine\DBAL\Migrations\Tools\Console\Command\GenerateCommand());
$application->add(new \Doctrine\DBAL\Migrations\Tools\Console\Command\MigrateCommand());
$application->add(new \Doctrine\DBAL\Migrations\Tools\Console\Command\StatusCommand());
$application->add(new \Doctrine\DBAL\Migrations\Tools\Console\Command\VersionCommand());

$application->run();


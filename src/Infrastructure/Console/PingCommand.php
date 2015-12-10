<?php
/*
 * The MIT License (MIT)
 * Copyright (c) Bisaga
 */

namespace Bisaga\Infrastructure\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class PingCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('worklog:ping')
            ->setDescription('Work log echo command, test if server is processing messages.')
            ->addArgument(
                'pong',
                InputArgument::OPTIONAL,
                'What server response with, pong is default.'
            )
            ->addOption(
               'yell',
               null,
               InputOption::VALUE_NONE,
               'If set, the ping echo will yell in uppercase letters.'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $pong = $input->getArgument('pong');
        if ($pong) {
            $text = $pong;
        } else {
            $text = 'Pong.';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
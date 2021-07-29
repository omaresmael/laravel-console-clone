<?php

namespace Illuminate\Console;

use Symfony\Component\Console\Command\Command as BaseCommand;
use Symfony\Component\Console\Input\InputArgument;

abstract class Command extends BaseCommand
{

    public function __construct()
    {
        parent::__construct($this->name);

        $this->addArgument('argument', InputArgument::OPTIONAL, 'Argument');

        $this->setDescription($this->description);

        $this->setCode(fn () => $this->handle());
    }
    public function ask($question)
    {
        return readline("\n$question");
    }

    public function argument()
    {
        return $_SERVER['argv'][2];
    }

    public function info($string)
    {
        echo "$string\n";
    }


}
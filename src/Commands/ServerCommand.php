<?php

namespace Illuminate\Console\Commands;

use Illuminate\Console\Command;

class ServerCommand extends Command
{
    protected $name = 'serve';

    protected $description = 'Run The built in php server';

    public function handle()
    {
       shell_exec('php -S localhost:8000');
    }


}
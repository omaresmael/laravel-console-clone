<?php

namespace Illuminate\Console\Commands;

use Illuminate\Console\Command;

class TinkerCommand extends Command
{
    protected $name = 'tinker';

    protected $description = 'interact with your application';

    public function handle()
    {
        while(true) eval($this->ask('>>>'));
    }


}
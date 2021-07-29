<?php

namespace Illuminate\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class MakeCommand extends Command
{
    protected $name = 'make:command';

    protected $description = 'Create a command class';

    public function handle()
    {
        $name = $this->argument();
        $template = file_get_contents(
          __DIR__ .'/../../stubs/command.stub'
        );
        $contents = str_replace('{{$name}}',$name,$template);
        file_put_contents(__DIR__."/$name.php",$contents);

        $this->info('Console Command Created Successfully');
    }


}
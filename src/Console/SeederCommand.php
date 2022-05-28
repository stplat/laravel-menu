<?php

namespace Stsp\LaravelMenu\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class SeederCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'menu:seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Unpack the files associated with the menu';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../stubs/seeder.stub';
    }


    protected function getPath($name)
    {
        return 'database/seeders/MenuSeeder.php';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::OPTIONAL, 'The name of the seeder.'],
        ];
    }
}

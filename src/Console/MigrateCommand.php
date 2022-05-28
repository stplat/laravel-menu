<?php

namespace Stsp\LaravelMenu\Console;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MigrateCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'menu:migrate';

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
        return __DIR__ . '/../stubs/migration.stub';
    }


    protected function getPath($name)
    {
        $currentDate = date('Y_m_d_his');
        return 'database/migrations/' . $currentDate . '_create_menus_table.php';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::OPTIONAL, 'The name of the migration.'],
        ];
    }
}

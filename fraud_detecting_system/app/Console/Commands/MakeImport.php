<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MakeImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:import {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new import class';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = $this->argument('name');

        // Your logic to create the import class goes here...

        $this->info('Import class created successfully.');

        return 0;
    }
}

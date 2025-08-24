<?php

namespace Daan0101\Accessify\Console;

use Illuminate\Console\Command;

class Install extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'accessify:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install the Accessify package';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        if ($this->confirm('Do you want to continue with the installation?')) {
            $this->call('vendor:publish', [
                '--tag' => 'accessify-migrations',
            ]);
            $this->call('migrate');
            $this->info('Installing Accessify...');
        }

        $this->info('Accessify installed successfully.');

        return Command::SUCCESS;
    }
}

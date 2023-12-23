<?php

namespace Dedecube\Support\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class EnvInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install .env files for GitHub Actions';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        Artisan::call('env:generate');
        Artisan::call('env:ignore');
    }
}

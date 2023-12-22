<?php

namespace Dedecube\Support\Commands;

use Dedecube\Support\Facades\Support;
use Illuminate\Console\Command;

class EnvGenerateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate .env files from .env.example';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $envFiles = $this->getEnvFilesFromConfig();

        foreach ($envFiles as $envFile) {
            $this->generateEnvFile($envFile);
        }
    }

    private function getEnvFilesFromConfig(): array
    {
        return Support::getEnvFilesFromConfig();
    }

    private function generateEnvFile(array $envFile): void
    {
        $this->info('Generating '.$envFile['name']);

        $command = [
            'cp',
            base_path('.env.example'),
            base_path($envFile['name']),
        ];

        shell_exec(implode(' ', $command));
    }
}

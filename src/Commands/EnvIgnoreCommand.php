<?php

namespace Dedecube\Support\Commands;

use Dedecube\Support\Facades\Support;
use Illuminate\Console\Command;

class EnvIgnoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:ignore';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add .env.* files to .gitignore';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $envFiles = $this->getEnvFilesFromConfig();

        foreach ($envFiles as $envFile) {
            $this->ignoreEnvFile($envFile);
        }
    }

    private function ignoreEnvFile(array $envFile): void
    {
        $this->info('Ignoring '.$envFile['name']);

        $command = [
            'echo',
            $envFile['name'],
            '>>',
            base_path('.gitignore'),
        ];

        shell_exec(implode(' ', $command));
    }

    private function getEnvFilesFromConfig(): array
    {
        return Support::getEnvFilesFromConfig();
    }
}

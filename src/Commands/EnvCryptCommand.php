<?php

namespace Dedecube\Support\Commands;

use Dedecube\Support\Facades\Support;
use Illuminate\Console\Command;

class EnvCryptCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'env:crypt';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Encrypt .env files for GitHub Actions';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $envFiles = $this->getEnvFilesFromConfig();

        if (!file_exists(config('dedecube-support.env.output'))) {
            mkdir(config('dedecube-support.env.output'), 0777, true);
        }

        foreach ($envFiles as $envFile) {
            $this->encryptEnvFile($envFile);
        }
    }

    private function encryptEnvFile(array $envFile): void
    {
        $this->info('Encrypting '. $envFile['name']);

        $command = [
            'gpg',
            '--symmetric',
            '--cipher-algo AES256',
            '--batch',
            '--yes',
            '--passphrase '. $envFile['passphrase'],
            '--output '. config('dedecube-support.env.output') .'/'. $envFile['name'] .'.gpg',
            base_path($envFile['name']),
        ];

        shell_exec(implode(' ', $command));
    }

    private function getEnvFilesFromConfig(): array
    {
        return Support::getEnvFilesFromConfig();
    }
}

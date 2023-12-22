<?php

namespace Dedecube\Support;

class Support
{
    public function isGpgInstalled(): bool
    {
        $command = 'gpg --version';

        $output = shell_exec($command);

        return str_contains($output, 'gpg (GnuPG)');
    }

    public function getEnvFilesFromConfig(): array
    {
        return config('dedecube-support.env.files');
    }
}

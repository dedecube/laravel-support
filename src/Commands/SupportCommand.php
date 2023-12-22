<?php

namespace Dedecube\Support\Commands;

use Illuminate\Console\Command;

class SupportCommand extends Command
{
    public $signature = 'laravel-support';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

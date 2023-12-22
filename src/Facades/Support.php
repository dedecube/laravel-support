<?php

namespace Dedecube\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dedecube\Support\Support
 *
 * @method static bool isGpgInstalled()
 * @method static array getEnvFilesFromConfig()
 */
class Support extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Dedecube\Support\Support::class;
    }
}

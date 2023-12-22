<?php

namespace Dedecube\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dedecube\Support\Support
 */
class Support extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dedecube\Support\Support::class;
    }
}

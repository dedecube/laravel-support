<?php

namespace Dedecube\Support\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Dedecube\Support\SupportServiceProvider;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [
            SupportServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app): void
    {
        config()->set('database.default', 'testing');
    }
}

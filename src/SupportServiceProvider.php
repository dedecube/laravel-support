<?php

namespace Dedecube\Support;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Dedecube\Support\Commands\SupportCommand;

class SupportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-support')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-support_table')
            ->hasCommand(SupportCommand::class);
    }
}

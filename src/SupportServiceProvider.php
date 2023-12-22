<?php

namespace Dedecube\Support;

use Dedecube\Support\Commands\EnvCryptCommand;
use Dedecube\Support\Commands\EnvGenerateCommand;
use Dedecube\Support\Commands\EnvIgnoreCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->name('dedecube-support')
            ->hasConfigFile();
    }
}

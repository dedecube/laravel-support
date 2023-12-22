<?php

use Dedecube\Support\Facades\Support;

it('check that gpg is installed', function () {
    $hasGpg = Support::isGpgInstalled();

    expect($hasGpg)->toBeBool();
});

it('retrieves environment files from config', function () {
    $envFiles = Support::getEnvFilesFromConfig();

    expect($envFiles)->toBeArray()->toHaveCount(2);

    foreach ($envFiles as $envFile) {
        expect($envFile)->toBeArray()->toHaveKeys(['name', 'passphrase']);
    }
});

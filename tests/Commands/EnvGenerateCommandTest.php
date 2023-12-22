<?php

use Illuminate\Support\Facades\Artisan;

it('was registered', function () {
    expect(collect(Artisan::all()))
        ->has('env:generate')
        ->toBeTrue();
});

it('generates env files', function () {
    file_put_contents(
        base_path('.env.example'),
        'APP_NAME="Laravel"'
    );

    $this
        ->artisan('env:generate')
        ->assertExitCode(0);

    expect(file_exists(base_path('.env.prestage')))
        ->toBeTrue();

    expect(file_exists(base_path('.env.stage')))
        ->toBeTrue();

    // Delete all .env.* files
    unlink(base_path('.env.example'));
    unlink(base_path('.env.prestage'));
    unlink(base_path('.env.stage'));
});

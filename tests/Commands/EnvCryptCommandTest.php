<?php

use Illuminate\Support\Facades\Artisan;

it('was registered', function () {
    expect(collect(Artisan::all()))
        ->has('env:crypt')
        ->toBeTrue();
});

it('encrypts env files', function () {
    file_put_contents(
        base_path('.env.example'),
        'APP_NAME="Laravel"'
    );

    $this
        ->artisan('env:generate')
        ->assertExitCode(0);

    $this->artisan('env:crypt')
        ->assertExitCode(0);

    expect(file_exists(config('dedecube-support.env.output') . '/.env.prestage.gpg'))
        ->toBeTrue()
        ->and(file_exists(config('dedecube-support.env.output') . '/.env.stage.gpg'))
        ->toBeTrue();
});

<?php

use Illuminate\Support\Facades\Artisan;

it('was registered', function () {
    expect(collect(Artisan::all()))
        ->has('env:ignore')
        ->toBeTrue();
});

it('ignores env files', function () {
    $this->artisan('env:ignore')
        ->assertExitCode(0);

    $gitIgnore = file_get_contents(base_path('.gitignore'));

    expect($gitIgnore)
        ->toContain('.env.prestage');

    expect($gitIgnore)
        ->toContain('.env.stage');
});

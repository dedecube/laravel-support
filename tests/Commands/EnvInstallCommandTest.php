<?php

use Illuminate\Support\Facades\Artisan;

it('was registered', function () {
    expect(collect(Artisan::all()))
        ->has('env:install')
        ->toBeTrue();
});

<?php

it('publishes config file', function () {
    $this->artisan('vendor:publish --tag=dedecube-support-config')->assertExitCode(0);

    expect(file_exists(config_path('dedecube-support.php')))->toBeTrue();
});

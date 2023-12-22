<?php

return [
    'env' => [
        'files' => [
            [
                'name' => '.env.prestage',
                'passphrase' => env('SUPPORT_ENV_PRESTAGE_PASSPHRASE', 'prestage'),
            ],
            [
                'name' => '.env.stage',
                'passphrase' => env('SUPPORT_ENV_STAGE_PASSPHRASE', 'stage'),
            ],
        ],
        'output' => base_path('.github/actions/create-env-file'),
    ],
];

<?php

return [
    'DB' => [
        'Connections' => [
            'Default' => [
                'dbname' => getenv('TYPO3_DB_NAME'),
                'host' => getenv('TYPO3_DB_HOST'),
                'password' => getenv('TYPO3_DB_PASSWORD'),
                'port' => getenv('TYPO3_DB_PORT'),
                'user' => getenv('TYPO3_DB_USER'),
                'driver' => 'mysqli',
                'charset' => 'utf8mb4',
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
            ],
        ],
    ],
];

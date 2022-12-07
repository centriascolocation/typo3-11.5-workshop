<?php

return array_replace_recursive(
    include dirname(__DIR__) . '/common.php',
    [
        'EXTENSIONS' => [
            'backend' => [
                'loginFootnote' => 'Ansible Workshop',
                'loginHighlightColor' => '#97bf0d',
            ],
        ],
            // This GFX configuration allows processing by installed ImageMagick 6
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
        ],
        // This mail configuration sends all emails to mailhog
        'MAIL' => [
            'transport' => 'smtp',
            'transport_smtp_server' => 'localhost:1025',
        ],
        'SYS' => [
            'trustedHostsPattern' => '.*.*',
            'devIPmask' => '*',
            'displayErrors' => 1,
            'sitename' => 'Ansible Workshop',
        ],
        'BE' => [
            'installToolPassword' => getenv('TYPO3_INSTALL_TOOL_PASSWORD'),
        ],
        'LOG' => [
            'TYPO3' => [
                'CMS' => [
                    'deprecations' => [
                        'writerConfiguration' => [
                            \TYPO3\CMS\Core\Log\LogLevel::NOTICE => [
                                \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
                                    'logFileInfix' => 'deprecations',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]
);

<?php

Git::$repositories['emergence-home'] = [
    'remote' => 'git@github.com:EmergencePlatform/emergence-home.git',
    'originBranch' => 'master',
    'workingBranch' => 'master',
    'trees' => [
        // repo/site configuration
        'php-config/Git.config.d/emergence-home.php',
        'php-config/Site.config.d',

        // skeletons
        'api-docs/definitions/Emergence/Skeletons',
        'php-classes/Emergence/Skeletons',
        'site-root/skeletons.php'
    ]
];
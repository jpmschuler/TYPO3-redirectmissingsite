<?php
$EM_CONF['redirectmissingsite'] = [
    'title' => 'Redirect Missing Site',
    'description' => 'Allow 404 handling for unconfigured domains/sites',
    'category' => 'plugin',
    'author' => 'Schuler, J. Peter M.',
    'author_email' => 'j.peter.m.schuler@uni-due.de',
    'version' => '0.1.0-dev',
    'constraints' => [
        'depends' => [
            'php' => '7.2.0-',
            'typo3' => '9.5.0-10.99.99',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'autoload' => [
        'psr-4' => [
            'Jpmschuler\\RedirectMissingSite\\' => 'Classes/',
        ],
    ],
];

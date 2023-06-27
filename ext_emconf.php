<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Redirect Missing Site',
    'description' => 'Allow 404 handling for unconfigured domains/sites',
    'category' => 'plugin',
    'author' => 'Schuler, J. Peter M.',
    'author_email' => 'j.peter.m.schuler@uni-due.de',
    'version' => '1.0.8',
    'constraints' => [
        'depends' => [
            'php' => '7.4.0-',
            'typo3' => '10.4.0-11.99.99',
        ],
    ],
    'state' => 'stable',
    'autoload' => [
        'psr-4' => [
            'Jpmschuler\\RedirectMissingSite\\' => 'Classes/',
        ],
    ],
];

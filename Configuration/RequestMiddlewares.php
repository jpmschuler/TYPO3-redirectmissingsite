<?php

use Jpmschuler\RedirectMissingSite\Middleware\MissingSiteRedirect;

return [
    'frontend' => [
        'jpmschuler/redirectmissingsite/redirectmissingsite' => [
            'target' => MissingSiteRedirect::class,
            'after' => [
                'typo3/cms-frontend/site',
            ],
            'before' => [
                'typo3/cms-frontend/page-resolver',
            ],
        ],
    ],
];

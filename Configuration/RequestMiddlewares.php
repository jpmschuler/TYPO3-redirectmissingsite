<?php

return [
    'frontend' => [
        'jpmschuler/ito-extengine/gotorecordurl' => [
            'target' => \ Jpmschuler\RedirectMissingSite\Middleware\MissingSiteRedirect::class,
            'before' => [
                'typo3/cms-frontend/page-resolver',
            ],
        ],
    ]
];

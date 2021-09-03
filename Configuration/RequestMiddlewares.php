<?php

return [
    'frontend' => [
        'jpmschuler/RedirectMissingSite/MissingSiteRedirect' => [
            'target' => \ Jpmschuler\RedirectMissingSite\Middleware\MissingSiteRedirect::class,
            'after' => [
                'typo3/cms-frontend/page-resolver',
            ],
        ],
    ]
];

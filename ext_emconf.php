<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Template Foundation TYPO3 v9 LTS',
    'description' => 'Use it as a base for your website configuration. Add all your Stylesheets, JavaScripts and Templates.',
    'version' => '1.0.0',
    'state' => 'stable',
    'category' => 'templates',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sklein-medien.de',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'recycler' => '',
            'seo' => '',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];

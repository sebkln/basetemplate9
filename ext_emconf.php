<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Template Foundation TYPO3 v8 LTS',
    'description' => 'Use it as a base for your website configuration. Add all your Stylesheets, JavaScripts and Templates.',
    'category' => 'templates',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sklein-medien.de',
    'state' => 'stable',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => array(
        'depends' => array(
            'typo3' => '8.7.2-8.7.99',
            'recycler' => '',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);

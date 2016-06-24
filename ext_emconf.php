<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Template Foundation TYPO3 7.6',
    'description' => 'Use it as a base for your website configuration. Add all your Stylesheets, JavaScripts and Templates.',
    'category' => 'templates',
    'author' => 'Sebastian Klein',
    'author_email' => 'sebastian@sklein-medien.de',
    'state' => 'alpha',
    'internal' => '',
    'uploadfolder' => '0',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.5',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-7.6.99',
            'recycler' => '',
        ),
        'conflicts' => array(
        ),
        'suggests' => array(
        ),
    ),
);
<?php

/**
 * Extension Manager/Repository config file for ext "base_website".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Base Website',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-13.9.99',
            'mask' => '8.2.3',
            'news' => '11.0'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Thm\\BaseWebsite\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Julius, Leon',
    'author_email' => 'julius-frederik.wissemann@iem.thm.de',
    'author_company' => 'THM',
    'version' => '1.0.0',
];

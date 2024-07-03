<?php

/**
 * Changed in version 11.4
 * In Composer-based installations, 
 * the ordering of installed extensions and 
 * their dependencies is loaded from the composer.json file, 
 * instead of ext_emconf.php
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'Extension title',
    'description' => 'Extension description',
    'category' => 'templates',
    'author' => 'Author Name',
    'author_email' => 'author@email.org',
    'author_company' => 'Company Name',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',            
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Vendor\\ExtensionKey\\' => 'Classes',
        ],
    ],    
];

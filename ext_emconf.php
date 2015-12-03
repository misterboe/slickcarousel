<?php

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Slick Slider',
    'description' => 'the last carousel you\'ll ever need',
    'category' => 'templates',
    'version' => '0.0.1',
    'state' => 'beta',
    'clearcacheonload' => 1,
    'author' => 'Boris Schauer',
    'author_email' => 'me@bschauer.de',
    'author_company' => 'bschauer',
    'constraints' => array(
        'depends' => array(
            'typo3' => '7.6.0-7.99.99',
            'vhs' => '^2.4.0',
        ),
        'conflicts' => array(

        ),
    ),
);
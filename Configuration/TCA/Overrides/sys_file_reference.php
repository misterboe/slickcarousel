<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['palettes']['slickslider'] = [
    'showitem' => 'title,alternative,--linebreak--,crop,description'
];

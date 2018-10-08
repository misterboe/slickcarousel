<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tmp_sys_file_reference);

$GLOBALS['TCA']['sys_file_reference']['palettes']['slickslider'] = [
    'showitem' => 'title,alternative,--linebreak--,crop,description'
];

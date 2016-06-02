<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['ratios']['3.5']  = 'slick - wide';
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['ratios']['1.5']  = 'slick - 3:2';
$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config']['ratios']['1.77']  = 'slick - 16:9';

// Actually unused

$GLOBALS['TCA']['sys_file_reference']['interface']['showRecordFieldList'] .= ',usecaption';

$tmp_sys_file_reference = array(

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tmp_sys_file_reference);

$GLOBALS['TCA']['sys_file_reference']['palettes']['slickslider'] = array(
    'showitem' => '
            --linebreak--,
            title,alternative,
            --linebreak--,
            link,description,
            --linebreak--,
            crop
    '
);

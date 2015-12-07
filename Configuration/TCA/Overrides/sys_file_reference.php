<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$GLOBALS['TCA']['sys_file_reference']['columns']['crop']['config'] = array(
    'type' => 'imageManipulation',
    'ratios' => array(
        '1.7777777777777777' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.16_9',
        '1.3333333333333333' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.4_3',
        '1' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.1_1',
        'NaN' => 'LLL:EXT:lang/locallang_wizards.xlf:imwizard.ratio.free',
    ),
);

$GLOBALS['TCA']['sys_file_reference']['interface']['showRecordFieldList'] .= ',usecaption';

$tmp_sys_file_reference = array(
    'usecaption' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:caption',
        'config' => array(
            'type' => 'check',
            'default' => '1'
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('sys_file_reference', $tmp_sys_file_reference);

$GLOBALS['TCA']['sys_file_reference']['palettes']['slickslider'] = array(
    'showitem' => '
            usecaption,
            --linebreak--,
            title,alternative,
            --linebreak--,
            link,description,
            --linebreak--,
            crop
    '
);
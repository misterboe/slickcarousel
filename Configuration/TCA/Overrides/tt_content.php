<?php

// ************************************************
// * Backup all default cTypes add new and resort *
// ************************************************

$backupCTypeItems = $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'];

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'] = array(
    array(
        'slickcarousel',
        '--div--'
    ),
);

include('CE/slickcarousel.php');

foreach ($backupCTypeItems as $key => $value) {
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}

unset($key);
unset($value);
unset($backupCTypeItems);

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

$GLOBALS['TCA']['sys_file_reference']['palettes']['slickdefault'] = array(
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
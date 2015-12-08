<?php

$slick_default_fields = array(
    'slickdefault' => array(
        'exclude' => 0,
        'label' => 'Sick Slides',
        'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
            'slickdefault',
            array(
                'collapseAll' => 1,
                'maxitems' => 99,
                'foreign_types' => array(
                    '0' => array(
                        'showitem' => '
    										--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
    										--palette--;;filePalette'
                    ),
                    \TYPO3\CMS\Core\Resource\File::FILETYPE_IMAGE => array(
                        'showitem' => '
    										--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;slickslider,
    										--palette--;;filePalette'
                    ),
                )
            ),
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $slick_default_fields);


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
include('CE/slickcarouselbasic.php');
include('CE/slickcarouselsync.php');

foreach ($backupCTypeItems as $key => $value) {
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}

unset($key);
unset($value);
unset($backupCTypeItems);

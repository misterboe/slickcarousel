<?php

$slick_default_fields = array(
    'slickdefault' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slides',
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
    'tx_slickcarouselbgimg' => array(
        'exclude' => 0,
        'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.title',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_slickcarouselbgimg',
            'foreign_field' => 'tt_content',
            'maxitems' => 999,
            'appearance' => array(
                'collapseAll' => true,
                'useSortable' => true,
                'showSynchronizationLink' => false,
                'showAllLocalizationLink' => true,
                'showPossibleLocalizationRecords' => false,
                'showRemovedLocalizationRecords' => false,
                'expandSingle' => true,
                'enabledControls' => array(
                    'localize' => true,
                ),
            ),
            'behaviour' => array(
                'localizationMode' => 'select',
                'mode' => 'select',
                'localizeChildrenAtParentLocalization' => true,
            ),
        ),
    ),
    'slickheight' => array(
        'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.height',
        'config' => array(
            'type' => 'input',
            'size' => '3',
            'eval' => 'trim',
            'max' => '240',
            'default' => '0.5'
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

// Slick Basic - START

$GLOBALS['TCA']['tt_content']['types']['slickcarouselbasic'] = array(
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
		slickdefault;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slides,
		--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
		pi_flexform;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
		--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
	--div--;Gridelements,
	    tx_gridelements_container,
        tx_gridelements_columns,
    '
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slickcarouselbasic'] =
    'FILE:EXT:slickcarousel/Configuration/FlexForms/slick-basic.xml';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbasic.title',
    'slickcarouselbasic',
    'EXT:slickcarousel/ext_icon.gif'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slickcarouselbasic'] = 'slickicon';

// Slick Basic - END

// Slick Sync - START

$GLOBALS['TCA']['tt_content']['types']['slickcarouselsync'] = array(
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
		slickdefault;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slides,
		--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
		pi_flexform;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
		--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
	--div--;Gridelements,
	    tx_gridelements_container,
        tx_gridelements_columns,
    '
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slickcarouselsync'] =
    'FILE:EXT:slickcarousel/Configuration/FlexForms/slick-synked.xml';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselsync.title',
    'slickcarouselsync',
    'EXT:slickcarousel/ext_icon.gif'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slickcarouselsync'] = 'slickicon';

// Slick Sync - END

// Slick Expert - START

$GLOBALS['TCA']['tt_content']['types']['slickcarousel'] = array(
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
		slickdefault;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slides,
		--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
		pi_flexform;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
	--div--;Gridelements,
	    tx_gridelements_container,
        tx_gridelements_columns,
    '
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slickcarousel'] =
    'FILE:EXT:slickcarousel/Configuration/FlexForms/slick-responsive.xml';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarousel.title',
    'slickcarousel',
    'EXT:slickcarousel/ext_icon.gif'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slickcarousel'] = 'slickicon';

// Slick Expert - END

// Slick Text - START

$GLOBALS['TCA']['tt_content']['types']['slickcarouselbgimg'] = array(
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,
		slickheight;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.height,
		tx_slickcarouselbgimg;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.title,
		--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
		pi_flexform;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames;frames,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.visibility;visibility,
		--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.access;access,
	--div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.extended
	--div--;Gridelements,
	    tx_gridelements_container,
        tx_gridelements_columns,
    '
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slickcarouselbgimg'] =
    'FILE:EXT:slickcarousel/Configuration/FlexForms/slick-responsive.xml';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.title',
    'slickcarouselbgimg',
    'EXT:slickcarousel/ext_icon.gif'
);

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['slickcarouselbgimg'] = 'slickicon';

// Slick Text - END


foreach ($backupCTypeItems as $key => $value) {
    $GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = $value;
}

unset($key);
unset($value);
unset($backupCTypeItems);

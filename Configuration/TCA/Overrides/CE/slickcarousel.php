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
    										--palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
    										--palette--;;filePalette'
                    ),
                )
            ),
            $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
        ),
    ),
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $slick_default_fields);

$GLOBALS['TCA']['tt_content']['types']['slickcarousel'] = array(
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,rowDescription,
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
    'Slick Carousel',
    'slickcarousel',
    'EXT:slickcarousel/ext_icon.gif'
);

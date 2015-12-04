<?php

$tmp_slickslider = array(
    'tx_slickcarousel' => array(
        'exclude' => 0,
        'label' => 'Slick Carousel Items',
        'config' => array(
            'type' => 'inline',
            'foreign_table' => 'tx_slickcarousel',
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
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tmp_slickslider);


$GLOBALS['TCA']['tt_content']['types']['slickcarousel'] = array(
    'showitem' => '	--palette--;Settings;general,
                    tx_slickcarousel;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slides,
					--div--;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
					pi_flexform;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:settings,
					--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
					--div--;Gridelements,
					tx_gridelements_container,
					tx_gridelements_columns,'
);

$GLOBALS['TCA']['tt_content']['columns']['pi_flexform']['config']['ds'][',slickcarousel'] =
    'FILE:EXT:slickcarousel/Configuration/FlexForms/slick-responsive.xml';

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'Slick Carousel',
    'slickcarousel',
    'EXT:slickcarousel/ext_icon.gif'
);

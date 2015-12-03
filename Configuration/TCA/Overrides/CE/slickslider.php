<?php

$tmp_slickslider = array(

);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content', $tmp_slickslider);


$GLOBALS['TCA']['tt_content']['types']['slickslider'] = array(
    'showitem' => '	--palette--;Settings;general,
					--div--;Slick Slides,
					--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.visibility;visibility,
					--palette--;LLL:EXT:cms/locallang_ttc.xlf:palette.access;access,
					--div--;Bootstrap,
					--palette--;Bootstrap Settings;bootstrap,
					--div--;Gridelements,
					tx_gridelements_container,
					tx_gridelements_columns,'
);

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'Slick Slider',
    'slickslider',
    'EXT:slickslider/ext_icon.gif'
);

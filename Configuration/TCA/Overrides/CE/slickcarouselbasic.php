<?php

$GLOBALS['TCA']['tt_content']['types']['slickcarouselbasic'] = array(
    'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.general;general,
		header;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:header.ALT.div_formlabel,rowDescription,
		slickdefault;LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slides,
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

$GLOBALS['TCA']['tt_content']['columns']['CType']['config']['items'][] = array(
    'Slick Carousel - Basic',
    'slickcarouselbasic',
    'EXT:slickcarousel/ext_icon.gif'
);

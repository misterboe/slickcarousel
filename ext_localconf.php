<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'
    . $_EXTKEY . '/Configuration/PageTS/PageTS.ts">'
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
    'slickicon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:slickcarousel/slick.svg']
);

if (!is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}

// Disable default Content Elements

if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['disable_slickcarouselbasic']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarouselbasic)');
}
if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['disable_slickcarousel']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarousel)');
}
if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['disable_slickcarouselbgimg']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarouselbgimg)');
}
if ($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]['disable_slickcarouselsync']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarouselsync)');
}

if (is_array($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY])) {
    $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY] = serialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf'][$_EXTKEY]);
}
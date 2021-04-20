<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'
    . 'slickcarousel' . '/Configuration/PageTS/PageTS.ts">'
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
    'slickicon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:slickcarousel/slick.svg']
);

/***************
 * Make the extension configuration accessible
 */
if (class_exists(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)) {
    $extensionConfiguration = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
        \TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class
    );
    $slickcarouselPackageConfiguration = $extensionConfiguration->get('slickcarousel');
} else {
    // Fallback for CMS8
    // @extensionScannerIgnoreLine
    $slickcarouselPackageConfiguration = $GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['slickcarousel'];
    if (!is_array($slickcarouselPackageConfiguration)) {
        $slickcarouselPackageConfiguration = unserialize($slickcarouselPackageConfiguration);
    }
}

// Disable default Content Elements

if ($slickcarouselPackageConfiguration['disable_slickcarouselbasic']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarouselbasic)');
}
if ($slickcarouselPackageConfiguration['disable_slickcarousel']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarousel)');
}
if ($slickcarouselPackageConfiguration['disable_slickcarouselbgimg']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarouselbgimg)');
}
if ($slickcarouselPackageConfiguration['disable_slickcarouselsync']) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('TCEFORM.tt_content.CType.removeItems := addToList(slickcarouselsync)');
}

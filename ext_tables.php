<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'slickcarousel', // Extension Key
    'Configuration/TypoScript', // Path to setup.txt and constants.txt
    'Slick Carousel'            // Title in the selector box
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_slickcarouselbgimg');
$TCA['tx_slickcarouselbgimg']['ctrl']['hideTable'] = 1;

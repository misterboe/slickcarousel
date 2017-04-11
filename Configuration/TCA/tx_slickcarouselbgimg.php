<?php
return array(
    'ctrl' => array(
        'label' => 'headline',
        'sortby' => 'sorting',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'title' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.title',
        'delete' => 'deleted',
        'versioningWS' => true,
        'origUid' => 't3_origuid',
        'hideAtCopy' => false,
        'prependAtCopy' => 'LLL:EXT:lang/locallang_general.xlf:LGL.prependAtCopy',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'languageField' => 'sys_language_uid',
        'dividers2tabs' => true,
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'iconfile' => 'EXT:slickcarousel/slick.svg'
    ),
    'interface' => array(
        'showRecordFieldList' => '
        hidden,
        headline,
        subline,
        image,
        ',
    ),
    'types' => array(
        '1' => array(
            'showitem' => '
            headline,
            subline,
            image,
            --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,
            hidden,
            starttime,
            endtime
        '
        ),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
                'items' => array(
                    '1' => array(
                        '0' => 'LLL:EXT:cms/locallang_ttc.xlf:hidden.I.0'
                    )
                )
            )
        ),
        'starttime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'endtime' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
            'config' => [
                'type' => 'input',
                'renderType' => 'inputDateTime',
                'eval' => 'datetime',
                'default' => 0,
                'range' => [
                    'upper' => mktime(0, 0, 0, 1, 1, 2038)
                ]
            ],
            'l10n_mode' => 'exclude',
            'l10n_display' => 'defaultAsReadonly'
        ],
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'renderType' => 'selectSingle',
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array(
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1
                    ),
                    array(
                        'LLL:EXT:lang/locallang_general.xlf:LGL.default_value',
                        0
                    )
                )
            )
        ),
        'l10n_parent' => Array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.php:LGL.l18n_parent',
            'config' => Array(
                'renderType' => 'selectSingle',
                'type' => 'select',
                'items' => Array(
                    Array('', 0),
                ),
                'foreign_table' => 'tx_slickcarouselbgimg',
                'foreign_table_where' => 'AND tx_slickcarouselbgimg.uid=###REC_FIELD_l10n_parent### AND tx_slickcarouselbgimg.sys_language_uid IN (-1,0)',
            )
        ),
        'l10n_diffsource' => Array(
            'config' => array(
                'type' => 'passthrough'
            )
        ),
        'headline' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.headline',
            'config' => array(
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ),
        ),
        'subline' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.subline',
            'config' => array(
                'type' => 'input',
                'size' => 60,
                'eval' => 'trim'
            ),
        ),
        'image' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:slickcarousel/Resources/Private/Language/be_locallang.xlf:slickcarouselbging.image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                array(
                    'collapseAll' => 1,
                    'maxitems' => 1,
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
    ),
);

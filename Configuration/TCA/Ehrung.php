<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

$TCA['tx_ehrentafel_domain_model_ehrung'] = array(
    'ctrl' => $TCA['tx_ehrentafel_domain_model_ehrung']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, titel, nr, sort, person',
    ),
    'types' => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, titel, nr, sort, person,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
    ),
    'palettes' => array(
        '1' => array('showitem' => ''),
    ),
    'columns' => array(
        'sys_language_uid' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => array(
                'type' => 'select',
                'foreign_table' => 'sys_language',
                'foreign_table_where' => 'ORDER BY sys_language.title',
                'items' => array(
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
                    array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
                ),
            ),
        ),
        'l10n_parent' => array(
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => array(
                'type' => 'select',
                'items' => array(
                    array('', 0),
                ),
                'foreign_table' => 'tx_ehrentafel_domain_model_ehrung',
                'foreign_table_where' => 'AND tx_ehrentafel_domain_model_ehrung.pid=###CURRENT_PID### AND tx_ehrentafel_domain_model_ehrung.sys_language_uid IN (-1,0)',
            ),
        ),
        'l10n_diffsource' => array(
            'config' => array(
                'type' => 'passthrough',
            ),
        ),
        't3ver_label' => array(
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            )
        ),
        'hidden' => array(
            'exclude' => 1,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => array(
                'type' => 'check',
            ),
        ),
        'starttime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'endtime' => array(
            'exclude' => 1,
            'l10n_mode' => 'mergeIfNotBlank',
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
            'config' => array(
                'type' => 'input',
                'size' => 13,
                'max' => 20,
                'eval' => 'datetime',
                'checkbox' => 0,
                'default' => 0,
                'range' => array(
                    'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
                ),
            ),
        ),
        'titel' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_ehrung.titel',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'nr' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_ehrung.nr',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'int'
            ),
        ),
        'sort' => array(
            'exclude' => 0,
            'label' => 'Sortierung Detailseiten nach Jahr und Namen (* = ja, leer = nein)',
            'config' => array(
                'type' => 'input',
                'size' => 4,
                'eval' => 'trim'
            ),
        ),
/* TCA Gallery
		'photos' => array(
			'label' => 'Fotos',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_thomasnu_domain_model_photo',
				'foreign_field' => 'gallery',
				'maxitems'      => 9999,
				'appearance' => array(
					'newRecordLinkPosition' => 'bottom',
					'collapseAll' => 0,
					'expandSingle' => 1,
				)
			)
		)  */

        'person' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_ehrung.person',
            'config' => array(
                'type' => 'inline',
                'foreign_table' => 'tx_ehrentafel_domain_model_person',
                'foreign_field' => 'ehrung',
                'maxitems'      => 9999,
                'appearance' => array(
					'newRecordLinkPosition' => 'bottom',
					'collapseAll' => 0,
					'expandSingle' => 1,
/*                    'collapseAll' => 0,
                    'levelLinksPosition' => 'top',
                    'showSynchronizationLink' => 1,
                    'showPossibleLocalizationRecords' => 1,
                    'showAllLocalizationLink' => 1  */
                ),
            ),
        ),
    ),
);

?>

<?php
if (!defined ('TYPO3_MODE')) {
    die ('Access denied.');
}

$TCA['tx_ehrentafel_domain_model_person'] = array(
    'ctrl' => $TCA['tx_ehrentafel_domain_model_person']['ctrl'],
    'interface' => array(
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, name, vorname, ort, jahr, text, verstorben,  ehrung',
    ),
    'types' => array(
        '1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, name, vorname, ort, jahr, text, verstorben, ehrung,--div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access,starttime, endtime'),
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
                'foreign_table' => 'tx_ehrentafel_domain_model_person',
                'foreign_table_where' => 'AND tx_ehrentafel_domain_model_person.pid=###CURRENT_PID### AND tx_ehrentafel_domain_model_person.sys_language_uid IN (-1,0)',
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
        'name' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person.name',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'vorname' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person.vorname',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'ort' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person.ort',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'jahr' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person.jahr',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'text' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person.text',
            'config' => array(
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ),
        ),
        'verstorben' => array(
            'exclude' => 0,
            'label' => 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person.verstorben',
            'config' => array(
                'type' => 'check',
                'default' => 0
            ),
        ),
/* TCA Photo
		'gallery' => array(
			'label' => 'Fotogalerie',
			'config' => array(
				'type' => 'select',
				'minitems' => 1,
				'maxitems' => 1,
				'foreign_table' => 'tx_thomasnu_domain_model_gallery',
			)
		),  */
        'ehrung' => array(
		    'label' => 'Ehrungsart', // +
            'config' => array(
                'type' => 'select', // => 'passthrough',
				'minitems' => 1, // +
				'maxitems' => 1, // +
				'foreign_table' => 'tx_ehrentafel_domain_model_person', // +
            ),
        ),
    ),
);

?>

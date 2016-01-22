<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Ehrentafel',
	'ehrentafel'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'ehrentafel');

t3lib_extMgm::addLLrefForTCAdescr('tx_ehrentafel_domain_model_ehrung', 'EXT:ehrentafel/Resources/Private/Language/locallang_csh_tx_ehrentafel_domain_model_ehrung.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_ehrentafel_domain_model_ehrung');
$TCA['tx_ehrentafel_domain_model_ehrung'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_ehrung',
		'label' => 'titel',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'default_sortby' => 'ORDER BY nr ASC',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'titel,nr,sort,person,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Ehrung.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ehrentafel_domain_model_ehrung.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_ehrentafel_domain_model_person', 'EXT:ehrentafel/Resources/Private/Language/locallang_csh_tx_ehrentafel_domain_model_person.xlf');
t3lib_extMgm::allowTableOnStandardPages('tx_ehrentafel_domain_model_person');
$TCA['tx_ehrentafel_domain_model_person'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:ehrentafel/Resources/Private/Language/locallang_db.xlf:tx_ehrentafel_domain_model_person',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'default_sortby' => 'ORDER BY name ASC',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,vorname,ort,jahr,text,verstorben,ehrung,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Person.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_ehrentafel_domain_model_person.gif'
	),
);
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_ehrentafel'] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($_EXTKEY . '_ehrentafel', 'FILE:EXT:' . $_EXTKEY .'/Configuration/FlexForms/ehrentafel.xml');

?>

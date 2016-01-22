<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Ehrentafel',
	array(
		'Ehrung' => 'list',
		'Person' => 'show'
	),
	// non-cacheable actions
	array(
	)
);

/**
* Set templateRootPath of paginateWidget for this plugin
*/
$path = t3lib_utility_VersionNumber::convertVersionNumberToInteger(TYPO3_version) >= 6000000 ? 'TYPO3\\CMS\\Fluid\\ViewHelpers\\Widget\\' : 'Tx_Fluid_ViewHelpers_Widget_';
t3lib_extMgm::addTypoScriptSetup('
	plugin.tx_' . $_EXTKEY . '.view.widget.' . $path . 'PaginateViewHelper.templateRootPath = EXT:ehrentafel/Resources/Private/Templates/
');

?>

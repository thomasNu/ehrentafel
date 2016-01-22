<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ehrentafel".
 *
 * Auto generated 02-01-2014 15:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'ehrentafel',
	'description' => '',
	'category' => 'plugin',
	'author' => 'Steffen Liebig',
	'author_email' => 'steffen.liebig@gmx.de',
	'author_company' => '',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'stable',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '2.0.0',
	'constraints' => 
	array (
		'depends' => 
		array (
			'php' => '5.3.7-5.5.99',
			'typo3' => '4.7.0-6.2.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
	'_md5_values_when_last_written' => 'a:70:{s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"ea67";s:14:"ext_tables.php";s:4:"7818";s:14:"ext_tables.sql";s:4:"21b5";s:21:"ExtensionBuilder.json";s:4:"1d62";s:10:"Readme.rst";s:4:"f13b";s:39:"Classes/Controller/EhrungController.php";s:4:"cebc";s:39:"Classes/Controller/PersonController.php";s:4:"ec04";s:43:"Classes/Controller/VerstorbenController.php";s:4:"4137";s:31:"Classes/Domain/Model/Ehrung.php";s:4:"263f";s:31:"Classes/Domain/Model/Person.php";s:4:"7d4d";s:35:"Classes/Domain/Model/Verstorben.php";s:4:"78a4";s:46:"Classes/Domain/Repository/EhrungRepository.php";s:4:"4cff";s:48:"Classes/Domain/Repository/PersonenRepository.php";s:4:"8e69";s:38:"Classes/ViewHelpers/EvalViewHelper.php";s:4:"4807";s:36:"Classes/ViewHelpers/IfViewHelper.php";s:4:"ff7e";s:43:"Classes/ViewHelpers/UniqueForViewHelper.php";s:4:"7ce5";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"21e0";s:28:"Configuration/TCA/Ehrung.php";s:4:"9dd1";s:28:"Configuration/TCA/Person.php";s:4:"eaf4";s:38:"Configuration/TypoScript/constants.txt";s:4:"eabd";s:34:"Configuration/TypoScript/setup.txt";s:4:"18c3";s:37:"Documentation/_IncludedDirectives.rst";s:4:"53e5";s:37:"Documentation/AdministratorManual.rst";s:4:"2562";s:33:"Documentation/DeveloperCorner.rst";s:4:"e805";s:23:"Documentation/Index.rst";s:4:"f3f5";s:36:"Documentation/ProjectInformation.rst";s:4:"152a";s:38:"Documentation/RestructuredtextHelp.rst";s:4:"c86e";s:37:"Documentation/TyposcriptReference.rst";s:4:"5829";s:28:"Documentation/UserManual.rst";s:4:"3308";s:44:"Documentation/Images/IntroductionPackage.png";s:4:"cdeb";s:30:"Documentation/Images/Typo3.png";s:4:"4fac";s:61:"Documentation/Images/AdministratorManual/ExtensionManager.png";s:4:"14fc";s:47:"Documentation/Images/UserManual/BackendView.png";s:4:"ba6c";s:32:"Documentation/_De/UserManual.rst";s:4:"82b7";s:51:"Documentation/_De/Images/UserManual/BackendView.png";s:4:"ba6c";s:32:"Documentation/_Fr/UserManual.rst";s:4:"56b8";s:51:"Documentation/_Fr/Images/UserManual/BackendView.png";s:4:"ba6c";s:78:"Resources/Private/Language/locallang_csh_tx_ehrentafel_domain_model_ehrung.xlf";s:4:"6a7f";s:78:"Resources/Private/Language/locallang_csh_tx_ehrentafel_domain_model_person.xlf";s:4:"d2ed";s:82:"Resources/Private/Language/locallang_csh_tx_ehrentafel_domain_model_verstorben.xlf";s:4:"1f4a";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"80fe";s:38:"Resources/Private/Layouts/Default.html";s:4:"c785";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"3f8e";s:49:"Resources/Private/Partials/Ehrung/FormFields.html";s:4:"4728";s:49:"Resources/Private/Partials/Ehrung/Properties.html";s:4:"c817";s:49:"Resources/Private/Partials/Person/FormFields.html";s:4:"1abe";s:49:"Resources/Private/Partials/Person/Properties.html";s:4:"ba1b";s:53:"Resources/Private/Partials/Verstorben/FormFields.html";s:4:"699c";s:53:"Resources/Private/Partials/Verstorben/Properties.html";s:4:"27c2";s:44:"Resources/Private/Templates/Ehrung/Edit.html";s:4:"bc31";s:44:"Resources/Private/Templates/Ehrung/List.html";s:4:"ee9a";s:43:"Resources/Private/Templates/Ehrung/New.html";s:4:"68e6";s:44:"Resources/Private/Templates/Ehrung/Show.html";s:4:"f654";s:44:"Resources/Private/Templates/Person/Edit.html";s:4:"1105";s:44:"Resources/Private/Templates/Person/List.html";s:4:"7c61";s:43:"Resources/Private/Templates/Person/New.html";s:4:"32d8";s:44:"Resources/Private/Templates/Person/Show.html";s:4:"4297";s:48:"Resources/Private/Templates/Verstorben/Edit.html";s:4:"c488";s:48:"Resources/Private/Templates/Verstorben/List.html";s:4:"2c64";s:47:"Resources/Private/Templates/Verstorben/New.html";s:4:"15d7";s:48:"Resources/Private/Templates/Verstorben/Show.html";s:4:"4c98";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:60:"Resources/Public/Icons/tx_ehrentafel_domain_model_ehrung.gif";s:4:"905a";s:60:"Resources/Public/Icons/tx_ehrentafel_domain_model_person.gif";s:4:"1103";s:46:"Tests/Unit/Controller/EhrungControllerTest.php";s:4:"be6d";s:46:"Tests/Unit/Controller/PersonControllerTest.php";s:4:"0b3c";s:38:"Tests/Unit/Domain/Model/EhrungTest.php";s:4:"3570";s:38:"Tests/Unit/Domain/Model/PersonTest.php";s:4:"a261";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>
<?php
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['realurl']= array(
    'encodeSpURL_postProc' => array('user_encodeSpURL_postProc'),
    'decodeSpURL_preProc' => array('user_decodeSpURL_preProc'),
	'_DEFAULT' => array(
		'init' => array(
            'enableCHashCache' => true,
            'appendMissingSlash' => 'ifNotFile,redirect',
            'adminJumpToBackend' => true,
            'enableUrlDecodeCache' => true,
            'enableUrlEncodeCache' => true,
            'emptyUrlReturnValue' => '/',
		),
		'pagePath' => array(
            'type' => 'user',
            'userFunc' => 'EXT:realurl/class.tx_realurl_advanced.php:&tx_realurl_advanced->main',
            'spaceCharacter' => '-',
            'languageGetVar' => 'L',
		),
		'fileName' => array(
			'defaultToHTMLsuffixOnPrev' => 1,
			'acceptHTMLsuffix' => 1,
		),
		'fixedPostVars' => array(
			'ehrentafelConfiguration' => array(
				array(
					'GETvar' => 'tx_ehrentafel_ehrentafel[ehrung]',
					'lookUpTable' => array(
					    'table' => 'tx_ehrentafel_domain_model_ehrung',
					    'id_field' => 'uid',
					    'alias_field' => 'titel',
					    'addWhereClause' => ' AND NOT deleted',
					    'useUniqueCache' => 1,
					    'useUniqueCache_conf' => array(
				            'strtolower' => 1,
				            'spaceCharacter' => '-'
					    ),
					    'languageGetVar' => 'L',
					    'languageExceptionUids' => '',
					    'languageField' => 'sys_language_uid',
					    'transOrigPointerField' => 'l10n_parent',
					    'autoUpdate' => 1,
					    'expireDays' => 180,
				    ),
			    ),
		    ),
	   		'75' => 'ehrentafelConfiguration',
		),
		'postVarSets' => array(
		    '_DEFAULT' => array(
		        'an' => array(
		            array(
		                'GETvar' => 'tx_ehrentafel_ehrentafel[action]',
		                'noMatch' => 'bypass'
		            ),
		            array(
		                'GETvar' => 'tx_ehrentafel_ehrentafel[controller]',
		            ), 
		        ),
				'ehrenseite' => array(
					array(
						'GETvar' => 'tx_ehrentafel_ehrentafel[@widget_0][currentPage]',
					),
				), 
		    ),
		),
	),
);
function user_encodeSpURL_postProc(&$params, &$ref) {
    $params['URL'] = str_replace('/an/Person', '', $params['URL']);
    $params['URL'] = preg_replace('%/ehrenseite/(\d+)\.html%U', '-$1.html', $params['URL']);
}
function user_decodeSpURL_preProc(&$params, &$ref) {
    if (preg_match('%ehrentafel/(.+)-(\d+)\.html%U', $params['URL']) == TRUE) {
        $params['URL'] = preg_replace('%ehrentafel/(.+)-(\d+)\.html%U', 'ehrentafel/$1/an/Person/ehrenseite/$2.html', $params['URL']);
    } else {
        $params['URL'] = preg_replace('%ehrentafel/(.+)\.html%U', 'ehrentafel/$1/an/Person.html', $params['URL']);
    }
}
?>

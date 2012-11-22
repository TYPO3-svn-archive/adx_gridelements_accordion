<?php

########################################################################
# Extension Manager/Repository config file for ext "adx_gridelements_accordion".
#
# Auto generated 22-11-2012 16:09
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'ad: Grid Elements Accordion',
	'description' => 'Extends Grid Elements with Twitter Bootstraps accordion.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.0',
	'dependencies' => 't3jquery,gridelements,adx_twitter_bootstrap',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Arno Dudek',
	'author_email' => 'webmaster@adgrafik.at',
	'author_company' => 'ad:grafik',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			't3jquery' => '2.0.6-',
			'gridelements' => '1.2.3-',
			'adx_twitter_bootstrap' => '1.0.0-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:16:{s:12:"ext_icon.gif";s:4:"2d4f";s:17:"ext_localconf.php";s:4:"f8db";s:14:"ext_tables.php";s:4:"f5e8";s:25:"Classes/Hooks/StdWrap.php";s:4:"63bc";s:29:"Configuration/FlexForm/DS.xml";s:4:"7353";s:30:"Configuration/TSconfig/Page.ts";s:4:"3573";s:38:"Configuration/TypoScript/constants.txt";s:4:"23fe";s:34:"Configuration/TypoScript/setup.txt";s:4:"c694";s:34:"Resources/Private/LESS/Styles.less";s:4:"8cd2";s:46:"Resources/Private/Language/de.locallang_db.xlf";s:4:"6e7c";s:50:"Resources/Private/Language/de.locallang_db_csh.xlf";s:4:"e025";s:43:"Resources/Private/Language/locallang_db.xlf";s:4:"df86";s:47:"Resources/Private/Language/locallang_db_csh.xlf";s:4:"640e";s:42:"Resources/Public/Icons/16x16/Accordion.gif";s:4:"2d4f";s:40:"Resources/Public/Icons/16x16/Loading.png";s:4:"52df";s:42:"Resources/Public/Icons/24x24/Accordion.gif";s:4:"ff44";}',
	'suggests' => array(
	),
);

?>
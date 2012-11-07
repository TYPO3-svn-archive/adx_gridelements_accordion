<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// Include TypoScript configuration.
t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/Page.ts">');

// Include stdWrap function for includeFrontEndResources.
if (!t3lib_extMgm::isLoaded('ad_web_framework')) {
	$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_content.php']['stdWrap'][] = 'EXT:' . $_EXTKEY . '/Classes/Hooks/StdWrap.php:&Tx_AdxGridelementsAccordion_Hooks_StdWrap';
}

?>
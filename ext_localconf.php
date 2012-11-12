<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// Register stdWrap hook for includeFrontEndResources. Using "adx*" key to prevent colliding of other adx-extensions using the same hook.
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_content.php']['stdWrap']['adxIncludeFrontEndResources'] = 'EXT:' . $_EXTKEY . '/Classes/Hooks/StdWrap.php:&Tx_AdxGridelementsAccordion_Hooks_StdWrap';

// Include TypoScript configuration.
t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/Page.ts">');

?>
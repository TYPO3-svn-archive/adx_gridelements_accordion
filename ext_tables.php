<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

// Add CSH file to tt_content
t3lib_extMgm::addLLrefForTCAdescr('tt_content.pi_flexform..gridelements_pi1', 'EXT:' . $_EXTKEY . '/Resources/Private/Language/locallang_csh.xlf');

// Add static TypoScript
t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript/', 'ad: Grid Elements Accordion');

?>

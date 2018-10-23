<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '@import "EXT:basetemplate9/Configuration/TSconfig/User.tsconfig"'
);

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['basetemplate9_rte'] = 'EXT:basetemplate9/Configuration/RTE/Custom.yaml';

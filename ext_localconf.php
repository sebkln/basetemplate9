<?php
if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
    '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:' . $_EXTKEY . '/Configuration/TSconfig/User.txt">'
);

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['basetemplate8_rte'] = 'EXT:basetemplate8/Configuration/RTE/Custom.yaml';

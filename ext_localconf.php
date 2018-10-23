<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig(
        '@import "EXT:basetemplate9/Configuration/TSconfig/User.tsconfig"'
    );
});

$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['basetemplate9_rte'] = 'EXT:basetemplate9/Configuration/RTE/Custom.yaml';

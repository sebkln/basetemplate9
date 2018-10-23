<?php
defined('TYPO3_MODE') or die();

call_user_func(function () {
    $extensionKey = 'basetemplate9';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page/BackendLayouts.tsconfig',
        'Template Extension: BackendLayouts'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page/mod.tsconfig',
        'Template Extension: Module TSconfig [mod]'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page/rte_ckeditor.tsconfig',
        'Template Extension: Config for Rich Text Editor (CKEditor)'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page/TCAdefaults.tsconfig',
        'Template Extension: Default values for records [TCAdefaults]'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page/TCEFORM.tsconfig',
        'Template Extension: Form fields TSconfig [TCEFORM]'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        $extensionKey,
        'Configuration/TSconfig/Page/TCEMAIN.tsconfig',
        'Template Extension: Page permissions et al. [TCEMAIN]'
    );
});

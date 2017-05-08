<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/BackendLayouts.t3s',
        'Template Extension: BackendLayouts'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/mod.t3s',
        'Template Extension: Module TSconfig [mod]'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/RTE.t3s',
        'Template Extension: Rich Text Editor TSconfig [RTE]'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/TCAdefaults.t3s',
        'Template Extension: Default values for records [TCAdefaults]'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/TCEFORM.t3s',
        'Template Extension: Form fields TSconfig [TCEFORM]'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/TCEMAIN.t3s',
        'Template Extension: Page permissions et al. [TCEMAIN]'
);
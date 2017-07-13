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
        'Configuration/TSconfig/Page/rte_ckeditor.t3s',
        'Template Extension: Config for NEW Rich Text Editor (CKEditor)'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
        'basetemplate8',
        'Configuration/TSconfig/Page/rtehtmlarea.t3s',
        'Template Extension: Config for OLD Rich Text Editor (htmlArea RTE)'
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

<?php

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TRITUM\RepeatableFormElements\Configuration\Extension;
defined('TYPO3') || die();

call_user_func(function () {
    ExtensionManagementUtility::addStaticFile(
        Extension::KEY,
        'Configuration/TypoScript',
        'Repeatable form configuration'
    );
});

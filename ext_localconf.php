<?php

defined('TYPO3') || die();

call_user_func(
    static function () {
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['headlessViewhelper'] = [
            'SvenLie\HeadlessViewhelper\ViewHelpers'
        ];
    }
);
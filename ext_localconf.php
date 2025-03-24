<?php

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Configuration\Features;
use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Fluid\ViewHelpers\FormViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\TextfieldViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\TextareaViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\ButtonViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\CheckboxViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\CountrySelectViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\HiddenViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\PasswordViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\RadioViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\SelectViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptgroupViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\Select\OptionViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\SubmitViewHelper;
use TYPO3\CMS\Fluid\ViewHelpers\Form\UploadViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\FormViewHelper as HeadlessFormViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\TextfieldViewHelper as HeadlessTextfieldViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\TextareaViewHelper as HeadlessTextareaViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\ButtonViewHelper as HeadlessButtonViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\CheckboxViewHelper as HeadlessCheckboxViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\CountrySelectViewHelper as HeadlessCountrySelectViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\HiddenViewHelper as HeadlessHiddenViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\PasswordViewHelper as HeadlessPasswordViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\RadioViewHelper as HeadlessRadioViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\SelectViewHelper as HeadlessSelectViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\Select\OptgroupViewHelper as HeadlessOptgroupViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\Select\OptionViewHelper as HeadlessOptionViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\SubmitViewHelper as HeadlessSubmitViewHelper;
use SvenLie\HeadlessViewhelper\ViewHelpers\Form\UploadViewHelper as HeadlessUploadViewHelper;

defined('TYPO3') || die();

call_user_func(
    static function () {
       $GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['headlessViewhelper'] = [
            'SvenLie\HeadlessViewhelper\ViewHelpers'
        ];

        $GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['headlessViewhelper.overrideFluidViewHelper'] ??= false;

        $features = GeneralUtility::makeInstance(Features::class);

        if ($features->isFeatureEnabled('headlessViewhelper.overrideFluidViewHelper') && ExtensionManagementUtility::isLoaded('fluid')) {
            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][FormViewHelper::class] = [
                'className' => HeadlessFormViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TextfieldViewHelper::class] = [
                'className' => HeadlessTextfieldViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][TextareaViewHelper::class] = [
                'className' => HeadlessTextareaViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][ButtonViewHelper::class] = [
                'className' => HeadlessButtonViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][CheckboxViewHelper::class] = [
                'className' => HeadlessCheckboxViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][CountrySelectViewHelper::class] = [
                'className' => HeadlessCountrySelectViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][HiddenViewHelper::class] = [
                'className' => HeadlessHiddenViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][PasswordViewHelper::class] = [
                'className' => HeadlessPasswordViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][RadioViewHelper::class] = [
                'className' => HeadlessRadioViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][SelectViewHelper::class] = [
                'className' => HeadlessSelectViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][OptgroupViewHelper::class] = [
                'className' => HeadlessOptgroupViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][OptionViewHelper::class] = [
                'className' => HeadlessOptionViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][SubmitViewHelper::class] = [
                'className' => HeadlessSubmitViewHelper::class
            ];

            $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][UploadViewHelper::class] = [
                'className' => HeadlessUploadViewHelper::class
            ];
        }
    }
);
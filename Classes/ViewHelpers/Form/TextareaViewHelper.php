<?php

/*
 * This file is part of the "headless" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.md file that was distributed with this source code.
 */

declare(strict_types=1);

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace SvenLie\HeadlessViewhelper\ViewHelpers\Form;

/**
 * Generates an :html:`<textarea>`.
 *
 * The value of the text area needs to be set via the ``value`` attribute, as with all other form ViewHelpers.
 *
 * Examples
 * ========
 *
 * Example::
 *
 *    <f:form.textarea name="myTextArea" value="This is shown inside the textarea" />
 *
 * Output::
 *
 *    {
 *      "name": "tx_extension_plugin[myTextArea]",
 *      "type": "textarea",
 *      "value": "This is shown inside the textarea"
 *    }
 */
final class TextareaViewHelper extends AbstractFormFieldViewHelper
{
    public function initializeArguments(): void
    {
        parent::initializeArguments();
        $this->registerArgument('errorClass', 'string', 'CSS class to set if there are errors for this ViewHelper', false, 'f3-form-error');
        $this->registerArgument('required', 'bool', 'Specifies whether the textarea is required', false, false);
    }

    public function render(): string
    {
        $this->data = json_decode(parent::render(), true);

        $required = $this->arguments['required'];
        $name = $this->getName();
        $this->registerFieldNameForFormTokenGeneration($name);
        $this->setRespectSubmittedDataValue(true);

        $this->data['name'] = $name;
        $this->data['type'] = 'textarea';
        if ($required === true) {
            $this->data['required'] = 'required';
        }

        $this->data['value'] = htmlspecialchars((string)$this->getValueAttribute());
        $this->addAdditionalIdentityPropertiesIfNeeded();
        $this->setErrorClassAttribute();

        return json_encode($this->data);
    }
}

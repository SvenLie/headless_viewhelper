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

namespace SvenLie\HeadlessViewhelper\ViewHelpers\Form\Radio;

use SvenLie\HeadlessViewhelper\ViewHelpers\Form\AbstractFormFieldViewHelper;

final class GroupViewHelper extends AbstractFormFieldViewHelper
{
    public function render(): string
    {
        $this->data = json_decode(parent::render(), true);

        $this->data['label'] = $this->arguments['label'];
        $this->data['type'] = 'radioGroup';

        $renderedChildren = trim($this->renderChildren());
        $renderedChildren = preg_replace('!}\s*{!', '},{', $renderedChildren);
        $renderedChildren = preg_replace("!\r?\n!", '', $renderedChildren);
        $renderedChildren = '{"elements": [' . $renderedChildren . ']}';
        $renderedChildren = json_decode($renderedChildren, true);

        if ($renderedChildren !== null) {
            $this->data['options'] = $renderedChildren['elements'];
        }

        $nameAttribute = $this->getName();
        $this->registerFieldNameForFormTokenGeneration($nameAttribute);
        $this->data['name'] = $nameAttribute;

        return json_encode($this->data);
    }
}

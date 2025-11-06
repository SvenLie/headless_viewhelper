<?php

namespace SvenLie\HeadlessViewhelper\ViewHelpers\Form;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

final class StaticTextViewHelper extends AbstractTagBasedViewHelper
{
    protected array $data = [];

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('identifier', 'string', 'Specifies the id of the form element.', false, '');
    }

    public function render()
    {
        $children = trim($this->renderChildren());
        $this->data['type'] = 'staticText';
        $this->data['content'] = $children;
        $this->data['identifier'] = $this->arguments['identifier'] ?? '';

        return json_encode($this->data);
    }
}

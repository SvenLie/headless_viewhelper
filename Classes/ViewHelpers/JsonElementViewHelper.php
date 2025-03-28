<?php

namespace SvenLie\HeadlessViewhelper\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

final class JsonElementViewHelper extends AbstractTagBasedViewHelper
{
    protected array $data = [];

    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('identifier', 'string', 'JSON identifier', false, 'elements');
    }

    public function render()
    {
        $children = trim($this->renderChildren());
        $children = preg_replace("!\r?\n!", '', $children);
        $children = '{"element": ' . $children . '}';
        $children = json_decode($children, true);

        if ($children !== null && isset($children['element'])) {
            $this->data[$this->arguments['identifier']] = $children['element'];
        }

        return json_encode($this->data);
    }
}

<?php

namespace SvenLie\HeadlessViewhelper\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractTagBasedViewHelper;

final class JsonArrayViewHelper extends AbstractTagBasedViewHelper
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
        $children = preg_replace('!}\s*{!', '},{', $children);
        $children = preg_replace("!\r?\n!", '', $children);
        $children = '{"elements": [' . $children . ']}';
        $children = json_decode($children, true);

        if ($children !== null && isset($children['elements'])) {
            $this->data[$this->arguments['identifier']] = $children['elements'];
        }

        return json_encode($this->data);
    }
}

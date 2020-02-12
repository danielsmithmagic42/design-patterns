<?php

class PaddingDecorator extends HtmlElementDecorator
{
    const DEFAULT_METRIC = "px";

    public function __construct(HtmlElement $element, $top = 0, $right = 0, $bot = 0, $left = 0)
    {
        parent::__construct($element);

        if (!is_null($top)) {
            $this->addAttr('style', 'padding-top: ' . $top . self::DEFAULT_METRIC . ';');
        }

        if (!is_null($right)) {
            $this->addAttr('style', 'padding-right: ' . $right . self::DEFAULT_METRIC . ';');
        }

        if (!is_null($bot)) {
            $this->addAttr('style', 'padding-bottom: ' . $bot . self::DEFAULT_METRIC . ';');
        }

        if (!is_null($left)) {
            $this->addAttr('style', 'padding-left: ' . $left . self::DEFAULT_METRIC . ';');
        }
    }
}

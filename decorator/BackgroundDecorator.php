<?php

class BackgroundDecorator extends HtmlElementDecorator
{
    public function __construct(HtmlElement $element, $color)
    {
        parent::__construct($element);

        $this->addAttr('style', 'background: ' . $color . ';');
    }
}

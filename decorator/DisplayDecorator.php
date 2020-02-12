<?php

class DisplayDecorator extends HtmlElementDecorator
{
    public function __construct(HtmlElement $element, $display)
    {
        parent::__construct($element);

        $this->addAttr('style', 'display: ' . $display . ';');
    }
}
